<?php

namespace App\Http\Controllers;

use Activation;
use App\Http\Requests;
use App\Http\Requests\PasswordResetRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\FrontendRequest;
use App\User;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use File;
use Hash;
use Illuminate\Http\Request;
use Mail;
use Redirect;
use Reminder;
use Validator;
use Sentinel;
use URL;
use View;
use stdClass;
use App\Mail\Contact;
use App\Mail\ForgotPassword ;
use Overtrue\Socialite\SocialiteManager;
use Config;
use Illuminate\Support\Facades\DB;

class FrontEndController extends JoshController
{

    /*
     * $user_activation set to false makes the user activation via user registered email
     * and set to true makes user activated while creation
     */
    private $user_activation = true;

    /**
     * Account sign in.
     *
     * @return View
     */
    public function getLogin()
    {
        // Is the user logged in?
        if (Sentinel::check()) {
            return Redirect::route('my-account');
        }
        // Show the login page
        return view('login');
    }

    public function gotoFees() {
        return view('fees');
    }

    public function gotoFaqs() {
        return view('faqs');
    }

    public function gotoAboutus() {
        return view('aboutus');
    }

    public function gotoBlog() {
        return view('blog');
    }

    public function gotoBlogDetails() {
        return view('blog_details');
    }

    /**
     * Account sign in form processing.
     *
     * @return Redirect
     */
    public function postLogin(Request $request)
    {

        try {
            // Try to log the user in
            if ($user=  Sentinel::authenticate($request->only('email', 'password'), $request->get('remember-me', 0))) {
                //Activity log for login
                activity($user->full_name)
                    ->performedOn($user)
                    ->causedBy($user)
                    ->log('LoggedIn');
                return Redirect::route("home")->with('success', trans('auth/message.login.success'));
            } else {
                $this->messageBag->add('email', trans('auth/message.account_not_found'));
            }

        } catch (UserNotFoundException $e) {
            $this->messageBag->add('email', trans('auth/message.account_not_found'));
        } catch (NotActivatedException $e) {
            $this->messageBag->add('email', trans('auth/message.account_not_activated'));
        } catch (UserSuspendedException $e) {
            $this->messageBag->add('email', trans('auth/message.account_suspended'));
        } catch (UserBannedException $e) {
            $this->messageBag->add('email', trans('auth/message.account_banned'));
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            $this->messageBag->add('email', trans('auth/message.account_suspended', compact('delay')));
        }

        // Ooops.. something went wrong
        return Redirect::back()->withInput()->withErrors($this->messageBag);
    }

    /**
     * get user details and display
     */
    public function myAccount(User $user)
    {
        $user = Sentinel::getUser();
        $countries = $this->countries;
        return view('user_account', compact('user', 'countries'));
    }

    /**
     * update user details and display
     * @param Request $request
     * @param User $user
     * @return Return Redirect
     */
    public function update(User $user, FrontendRequest $request)
    {
        $user = Sentinel::getUser();
        //update values
        $user->update($request->except('password','pic','password_confirm'));

        if ($password = $request->get('password')) {
            $user->password = Hash::make($password);
        }
        // is new image uploaded?
        if ($file = $request->file('pic')) {
            $extension = $file->extension()?: 'png';
            $folderName = '/uploads/users/';
            $destinationPath = public_path() . $folderName;
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);

            //delete old pic if exists
            if (File::exists(public_path() . $folderName . $user->pic)) {
                File::delete(public_path() . $folderName . $user->pic);
            }
            //save new file path into db
            $user->pic = $safeName;

        }

        // Was the user updated?
        if ($user->save()) {
            // Prepare the success message
            $success = trans('users/message.success.update');
            //Activity log for update account
            activity($user->full_name)
                ->performedOn($user)
                ->causedBy($user)
                ->log('User Updated successfully');
            // Redirect to the user page
            return Redirect::route('my-account')->with('success', $success);
        }

        // Prepare the error message
        $error = trans('users/message.error.update');


        // Redirect to the user page
        return Redirect::route('my-account')->withInput()->with('error', $error);


    }

    /**
     * Account Register.
     *
     * @return View
     */
    public function getRegister()
    {
        // Show the page

        $lists = DB::select('select name from countries order by name') ;
        $country = array() ;
        foreach($lists as $list)
            array_push($country,$list->name) ;
        return view('register',compact('country'));
    }

    /**
     * Account sign up form processing.
     *
     * @return Redirect
     */

    public function postRegister(Request $request)
    {
        $data = new stdClass();
        $activate = $this->user_activation; //make it false if you don't want to activate user automatically it is declared above as global variable
        try {
            // Register the user
            $user = Sentinel::register($request->only(['name', 'email', 'password', 'gender']), $activate);

            //add user to 'User' group
            $role = Sentinel::findRoleByName('User');
            $role->users()->attach($user);

            //if you set $activate=false above then user will receive an activation mail
            if (!$activate) {
                // Data to be used on the email view
                $data->user_name =$user->first_name .' '. $user->last_name;
                $data->activationUrl = URL::route('activate', [$user->id, Activation::exists($user)->code]);
                // Send the activation code through email
                Mail::to($user->email)
                    ->send(new Restore($data));
                //Redirect to login page
                return redirect('login')->with('success', trans('auth/message.signup.success'));
            }
            // login user automatically
            Sentinel::login($user, false);
            //Activity log for new account
            activity($user->full_name)
                ->performedOn($user)
                ->causedBy($user)
                ->log('New Account created');
            // Redirect to the home page with success menu
            return Redirect::route("home")->with('success', trans('auth/message.signup.success'));

        } catch (UserExistsException $e) {
            $this->messageBag->add('email', trans('auth/message.account_already_exists'));
        }

        // Ooops.. something went wrong
        return Redirect::back()->withInput()->withErrors($this->messageBag);
    }

    /**
     * User account activation page.
     *
     * @param number $userId
     * @param string $activationCode
     *
     */
    public function getActivate($userId, $activationCode)
    {
        // Is the user logged in?
        if (Sentinel::check()) {
            return Redirect::route('my-account');
        }

        $user = Sentinel::findById($userId);

        if (Activation::complete($user, $activationCode)) {
            // Activation was successfull
            return Redirect::route('login')->with('success', trans('auth/message.activate.success'));
        } else {
            // Activation not found or not completed.
            $error = trans('auth/message.activate.error');
            return Redirect::route('login')->with('error', $error);
        }
    }

    /**
     * Forgot password page.
     *
     * @return View
     */
    public function getForgotPassword()
    {
        // Show the page
        return view('forgotpwd');

    }

    /**
     * Forgot password form processing page.
     * @param Request $request
     * @return Redirect
     */
    public function postForgotPassword(Request $request)
    {
        $data = new stdClass();
        try {
            // Get the user password recovery code
            $user = Sentinel::findByCredentials(['email' => $request->email]);
            if (!$user) {
                return Redirect::route('forgot-password')->with('error', trans('auth/message.account_email_not_found'));
            }

            $activation = Activation::completed($user);
            if (!$activation) {
                return Redirect::route('forgot-password')->with('error', trans('auth/message.account_not_activated'));
            }

            $reminder = Reminder::exists($user) ?: Reminder::create($user);
            // Data to be used on the email view

            $data->user_name =$user->first_name .' '. $user->last_name;
            $data->forgotPasswordUrl = URL::route('forgot-password-confirm', [$user->id, $reminder->code]);
            // Send the activation code through email
            Mail::to($user->email)
                ->send(new ForgotPassword($data));

        } catch (UserNotFoundException $e) {
            // Even though the email was not found, we will pretend
            // we have sent the password reset code through email,
            // this is a security measure against hackers.
        }

        //  Redirect to the forgot password
        return back()->with('success', trans('auth/message.forgot-password.success'));
    }

    /**
     * Forgot Password Confirmation page.
     *
     * @param  string $passwordResetCode
     * @return View
     */
    public function getForgotPasswordConfirm(Request $request, $userId, $passwordResetCode = null)
    {
        if (!$user = Sentinel::findById($userId)) {
            // Redirect to the forgot password page
            return Redirect::route('forgot-password')->with('error', trans('auth/message.account_not_found'));
        }

        if($reminder = Reminder::exists($user))
        {
            if($passwordResetCode == $reminder->code)
            {
                return view('forgotpwd-confirm', compact(['userId', 'passwordResetCode']));
            }
            else{
                return 'code does not match';
            }
        }
        else
        {
            return 'does not exists';
        }

    }

    /**
     * Forgot Password Confirmation form processing page.
     *
     * @param  string $passwordResetCode
     * @return Redirect
     */
    public function postForgotPasswordConfirm(PasswordResetRequest $request, $userId, $passwordResetCode = null)
    {

        $user = Sentinel::findById($userId);
        if (!$reminder = Reminder::complete($user, $passwordResetCode, $request->get('password'))) {
            // Ooops.. something went wrong
            return Redirect::route('login')->with('error', trans('auth/message.forgot-password-confirm.error'));
        }

        // Password successfully reseted
        return Redirect::route('login')->with('success', trans('auth/message.forgot-password-confirm.success'));
    }

    /**
     * Contact form processing.
     * @param Request $request
     * @return Redirect
     */
    public function postContact(Request $request)
    {
        $data = [
            'msg' => $request->get('message')
        ];
        Mail::send('emails.contact', $data, function($message) use ($request) {
            $emails = array("meuagenteturismo@gmail.com", "cechellafreelance@gmail.com");
            $message->subject($request->get('subject').' from '.$request->get('name'));
            $message->from('support@meuagente.com.br', "Contact from ".$request->get('email'));
            $message->to($emails);
        });

        return Redirect::route("home")->with('success', 'contact');
    }
    
    public function postSubscribe(Request $request)
    {
        $data = [
            'email' => $request->get('email')
        ];
        Mail::send('emails.subscribe', $data, function($message) use ($request) {
            $emails = array("meuagenteturismo@gmail.com", "cechellafreelance@gmail.com");
            $message->subject('Newsletter');
            $message->from('support@meuagente.com.br', "Newsletter from ".$request->get('email'));
            $message->to($emails);
        });

        return Redirect::route("home")->with('success', 'subscribe');
    }

    public function showFrontEndView($name=null)
    {
        if(View::exists($name))
        {
            return view($name);
        }
        else
        {
            abort('404');
        }
    }


    /**
     * Logout page.
     *
     * @return Redirect
     */
    public function getLogout()
    {
        if (Sentinel::check()) {
            //Activity log
            $user = Sentinel::getuser();
            activity($user->full_name)
                ->performedOn($user)
                ->causedBy($user)
                ->log('LoggedOut');
            // Log the user out
            Sentinel::logout();
        }
        // Redirect to the users page
        return redirect('login')->with('success', 'You have successfully logged out!');
    }

    public function google_login()
    {
        $socialite = new SocialiteManager(Config::get('services'));
        return $socialite->driver('google')->redirect();
    }

    public function google() {
        $data = new stdClass();
        $activate = $this->user_activation;

        $socialite = new SocialiteManager(Config::get('services'));
        $user = $socialite->driver('google')->user();
        $finduser = User::where('google_id', $user->id)->first();
        if($finduser) {
            Sentinel::login($finduser, false);
            return Redirect::route("home")->with('success', trans('auth/message.signup.success'));
        }
        else {
            $finduser_email = User::where('email', $user->email)->first();
            if($finduser_email) {
                Sentinel::login($finduser_email, false);
                return Redirect::route("home")->with('success', trans('auth/message.signup.success'));
            }
            else{
                $tempuser = array('name'=>$user->name, 'email'=>$user->email, 'password'=>encrypt('admin123'), 'google_id'=>$user->id);
                $newUser = Sentinel::register($tempuser, $activate);
    
                $role = Sentinel::findRoleByName('User');
                $role->users()->attach($newUser);
    
                if (!$activate) {
                    // Data to be used on the email view
                    $data->user_name =$newUser->name;
                    $data->activationUrl = URL::route('activate', [$newUser->id, Activation::exists($newUser)->code]);
                    // Send the activation code through email
                    Mail::to($newUser->email)
                        ->send(new Restore($data));
                    //Redirect to login page
                    return redirect('login')->with('success', trans('auth/message.signup.success'));
                }
    
                Sentinel::login($newUser, false);
                activity($newUser->full_name)
                    ->performedOn($newUser)
                    ->causedBy($newUser)
                    ->log('New Google Account created');
                return Redirect::route("home")->with('success', trans('auth/message.signup.success'));
            }
        }
    }
    
    public function facebook_login()
    {
        $socialite = new SocialiteManager(Config::get('services'));
        return $socialite->driver('facebook')->redirect();
    }

    public function facebook() {
        $data = new stdClass();
        $activate = $this->user_activation;

        $socialite = new SocialiteManager(Config::get('services'));
        $user = $socialite->driver('facebook')->user();
        $finduser = User::where('facebook_id', $user->id)->first();
        if($finduser) {
            Sentinel::login($finduser, false);
            return Redirect::route("home")->with('success', trans('auth/message.signup.success'));
        }
        else {
            $finduser_email = User::where('email', $user->email)->first();
            if($finduser_email) {
                Sentinel::login($finduser_email, false);
                return Redirect::route("home")->with('success', trans('auth/message.signup.success'));
            }
            else{
                $tempuser = array('name'=>$user->name, 'email'=>$user->email, 'password'=>encrypt('admin123'), 'facebook_id'=>$user->id);
                $newUser = Sentinel::register($tempuser, $activate);
    
                $role = Sentinel::findRoleByName('User');
                $role->users()->attach($newUser);
    
                if (!$activate) {
                    // Data to be used on the email view
                    $data->user_name =$newUser->name;
                    $data->activationUrl = URL::route('activate', [$newUser->id, Activation::exists($newUser)->code]);
                    // Send the activation code through email
                    Mail::to($newUser->email)
                        ->send(new Restore($data));
                    //Redirect to login page
                    return redirect('login')->with('success', trans('auth/message.signup.success'));
                }
    
                Sentinel::login($newUser, false);
                activity($newUser->full_name)
                    ->performedOn($newUser)
                    ->causedBy($newUser)
                    ->log('New Facebook Account created');
                return Redirect::route("home")->with('success', trans('auth/message.signup.success'));
            }
        }
    }

    //--------------search by budget(radio-1: total; radio-2: price(1/12)----------------------//
    public function search_budget(Request $request) {
        $budget = $request->get('budget') ;
        $budget_type = $request->get('radio') ;
        $search_flag = 1 ;
        return view('search_winzard',compact('budget','budget_type','search_flag')) ;
    }

    //---------search by destination-----------------------------------------------------------//
    public function search_destination(Request $request) {  
        $destination = $request->get('destination') ;
        $search_flag = 0 ;
        return view('search_winzard',compact('destination','search_flag')) ;
    }

    public function search_result(Request $request) {
        $datas = null ;
        $city = $request->get('city') ;
        $passenger = $request->get('passenger') ;
        $date_flag = $request->get('specify_date') ;
        $start_date = $request->get('start_date') ;
        $end_date = $request->get('end_date') ;
        $trip_period = $request->get('trip_period') ;
        $hotel_flag = $request->get('hotel_flag') ;
        $hotel_type = $request->get('hotel_type') ;
        $flight_type = $request->get('flight_type') ;
        $luggage_flag = $request->get('luggage_flag') ;
        $weight10 = $request->get('weight10') ;
        $weight23 = $request->get('weight23') ;
        if($request->get('search_flag')) {
            if($request->get('budget_type') == 1)
                $datas = DB::select('SELECT * FROM destinations WHERE price_total >= '.($request->get('budget')-100).' AND price_total <= '.($request->get('budget')+100).' ORDER BY price_total') ;
            else
                $datas = DB::select('SELECT * FROM destinations WHERE price_12 >= '.($request->get('budget')-100).' AND price_12 <= '.($request->get('budget')+100).' ORDER BY price_12') ;    
        }
        else {
            $datas = DB::select('SELECT t1.*,t2.pname FROM destinations AS t1 LEFT JOIN countries AS t2 ON t1.country = t2.name COLLATE utf8_unicode_ci WHERE t1.continent = "'.$request->get('destination').'" OR t2.pname="'.$request->get('destination').'" OR t1.name="'.$request->get('destination').'" ORDER BY t1.price_total') ;
        }
        foreach($datas as $data) {
            $userid = 0 ;
            if (Sentinel::check()) {
                $user = Sentinel::getUser();
                $userid = $user->id;
            }
            DB::insert('insert into search_destination (dest_id, user_id, time) values (?, ?, ?)', [$data->id, $userid, time()]);
        }
        $setting = DB::table('settings')->where('name','contact_phone')->first() ;
        return view('search_result',compact('datas','city', 'passenger', 'date_flag', 'start_date', 'end_date', 'trip_period', 'hotel_flag', 'hotel_type', 'flight_type', 'luggage_flag', 'weight10', 'weight23', 'setting')) ;
    }

    public function view_detail(Request $request,$id) {
        $city = $request->get('city') ;
        $passenger = $request->get('passenger') ;
        $date_flag = $request->get('date_flag') ;
        $start_date = $request->get('start_date') ;
        $end_date = $request->get('end_date') ;
        $trip_period = $request->get('trip_period') ;
        $hotel_flag = $request->get('hotel_flag') ;
        $hotel_type = $request->get('hotel_type') ;
        $flight_type = $request->get('flight_type') ;
        $luggage_flag = $request->get('luggage_flag') ;
        $weight10 = $request->get('weight10') ;
        $weight23 = $request->get('weight23') ;
        $data = DB::select('SELECT t1.*,t2.pname FROM destinations as t1 LEFT JOIN countries as t2 ON t1.country = t2.name COLLATE utf8_unicode_ci WHERE t1.id='.$id) ;
        $data = $data[0] ;
        $userid = 0 ;
        if (Sentinel::check()) {
            $user = Sentinel::getUser();
            $userid = $user->id;
        }
        $setting = DB::table('settings')->where('name','contact_phone')->first() ;
        DB::insert('insert into view_destination (dest_id, user_id, time) values (?, ?, ?)', [$data->id, $userid, time()]);
        return view('view_detail',compact('data','city', 'passenger', 'date_flag', 'start_date', 'end_date', 'trip_period', 'hotel_flag', 'hotel_type', 'flight_type', 'luggage_flag', 'weight10', 'weight23', 'setting')) ;
    }

    public function order_proposal(Request $request,$id) {
        $destination = DB::table('destinations')->where('id',$id)->first() ;
        $userid = 0 ;
        $username = $request->get('username') ;
        $email = $request->get('email') ;
        if (Sentinel::check()) {
            $user = Sentinel::getUser();
            $username = $user->name;
            $email = $user->email;
            $userid = $user->id ;
            DB::table('users')->where('id', $user->id)->update(['whatsapp' => $request->get('whatsapp')]);
        }
        $hotelname = "HOSPEDAGEM: HOTÉIS" ;
        if($request->get('hotel_type'))
            $hotelname = "HOSPEDAGEM: HOSTELS" ;
        if($request->get('hotel_flag'))
            $hotelname = 'NAO PRECISARA DE HOSPEDAGEM' ;
        $luggagename = '' ;
        if($request->get('luggage_flag'))
            $luggagename = $request->get('weight10').' 10kg + '.$request->get('weight23').' 23kg' ;
        else
            $luggagename = "0 10kg + 0 23kg" ;
        $datestr = '' ;
        if($request->get('date_flag'))
            $datestr = 'ENTRE '.$request->get('start_date').' E '.$request->get('end_date') ;
        else
            $datestr = 'DATA DE IDA: '.$request->get('start_date').' / VOLTA: '.$request->get('end_date') ;
        $flightmsg = 'APENAS VOO DIRETO';
        if($request->get('flight_type'))
            $flightmsg = 'PODE TER ESCALAS' ;
    
        $data = [
               'username' => $username,
               'email' => $email,
               'whatsapp' => $request->get('whatsapp'),
               'date' => date("d/m/Y"),
               'time' => date("h:i A"),
               'city' => $request->get('city'),
               'passenger_num' => $request->get('passenger'),
               'hotel' => $hotelname,
               'luggage' => $luggagename,
               'destination' => $destination->name,
               'trip_period' => $request->get('trip_period'),
               'datestr' => $datestr,
               'start_date' => $request->get('start_date'),
               'end_date' => $request->get('end_date'),
               'flight' => $flightmsg
        ];
        Mail::send('emails.proposal', $data, function($message) use ($username) {
            $emails = array("meuagenteturismo@gmail.com", "cechellafreelance@gmail.com");
            $message->subject("SOLICITACAO DE PROPOSTA#".time());
            $message->from('support@meuagente.com.br', $username.' via MEUAGENTE');
            $message->to($emails);
        });

        DB::insert('insert into sold_destination (dest_id, user_id, time) values (?, ?, ?)', [$id, $userid, time()]);
        return Redirect::route("home")->with('success', 'proposal');
    }
}

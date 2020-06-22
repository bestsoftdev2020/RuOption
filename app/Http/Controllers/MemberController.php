<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use File;
use App\Member;
use Sentinel;
use Overtrue\Socialite\SocialiteManager;
use Config;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::select('SELECT * FROM users WHERE is_admin <> 1');
        if(Sentinel::check())
            return view('admin.member.member', compact('datas'));
        else
            return redirect('admin/signin')->with('error', 'You must be logged in!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag_info = DB::select("select name from tag_list") ;
        $lists = DB::select('select nationality from countries order by display_order') ;
        $country = array() ;
        foreach($lists as $list)
            array_push($country,$list->nationality) ;
        if(Sentinel::check())
            return view('admin.member.member_add',compact('tag_info','country'));
        else
            return redirect('admin/signin')->with('error', 'You must be logged in!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = DB::table('users')->where('email',$request->get('email'))->first() ;
        if($validate)
            return Redirect::back()->withInput()->with('error', 'Email('.$request->get('email').') was registered!');
        $member = new Member;
        $member->name = $request->get('name');
        $member->email = $request->get('email') ;
        $member->whatsapp = $request->get('whatsapp') ;
        $member->passport_number = $request->get('passport_number') ;
        $member->city = $request->get('city') ;
        $member->state = $request->get('state') ;
        $member->address = $request->get('address') ;
        $member->nationality = $request->get('nationality') ;
        $member->cpf = $request->get('cpf') ;
        $member->rg = $request->get('rg') ;
        $member->comments = $request->get('comments') ;
        $tag_info = $request->get('tag_list') ;
        if($tag_info)
            $member->tags = implode(',',$tag_info) ;
        $member->passport_date_issue =  $this->changeDateFormat($request->get('passport_date_issue')) ;
        $member->passport_date_expiration =  $this->changeDateFormat($request->get('passport_date_expiration')) ;
        $member->birthday =  $this->changeDateFormat($request->get('birthday')) ;
        $member->save() ;
        return Redirect::to('admin/members')->with('success', 'Member info created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::select('SELECT * FROM users where id='.$id);
        $data = $data[0] ;

        $tag_info = DB::select("select name from tag_list") ;
        foreach($tag_info as $key=>$info) {
            if(strpos($data->tags, $info->name) !== false){
                $tag_info[$key]->flag = 1 ;
            }
            else {
                $tag_info[$key]->flag = 0 ;
            }
        }

        $lists = DB::select('select nationality from countries order by display_order') ;
        $country = array() ;
        foreach($lists as $list)
            array_push($country,$list->nationality) ;

        if(Sentinel::check())
            return view('admin.member.member_edit',compact('data','tag_info','country'));
        else
            return redirect('admin/signin')->with('error', 'You must be logged in!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changeDateFormat($origin_date) {
        $arr = explode('/',$origin_date) ;
        $arr[0] = $arr[0] + $arr[2] ;
        $arr[2] = $arr[0] - $arr[2] ;
        $arr[0] = $arr[0] - $arr[2] ;
        return implode('-',$arr) ;
    }

    public function update(Request $request, $id)
    {
        $validate = DB::table('users')->where('email',$request->get('email'))->where('id','!=',$id)->first() ;
        if($validate)
            return Redirect::back()->withInput()->with('error', 'Email('.$request->get('email').') was registered!');
        $member = Member::find($id);
        $member->update($request->except('tags','_token', 'tag_list', "passport_date_issue", "passport_date_expiration", "birthday")) ;
        $tag_info = $request->get('tag_list') ;
        $member->tags = implode(',',$tag_info) ;
        $member->passport_date_issue =  $this->changeDateFormat($request->get('passport_date_issue')) ;
        $member->passport_date_expiration =  $this->changeDateFormat($request->get('passport_date_expiration')) ;
        $member->birthday =  $this->changeDateFormat($request->get('birthday')) ;
        $member->save() ;
        return Redirect::to('admin/members')->with('success', 'Member info updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
        return Redirect::to('admin/members')->with('success', 'Member info deleted successfully!');
    }

    public function google_login()
    {
        $socialite = new SocialiteManager(Config::get('services'));
        return $socialite->driver('google')->redirect();
    }

    public function google() {
        $config = [
            'google' => [
                'client_id' => '232097190856-f1sm72meej1bc3he2k726uibta8ibt1j.apps.googleusercontent.com',
                'client_secret' => '-Yk93ldM9R-XskO2YbvZ5dAU',
                'redirect' => 'http://localhost:8000/admin/google',
            ],        
        ];

        $socialite = new SocialiteManager(Config::get('services'));
        $user = $socialite->driver('google')->user();
        dd($user->getEmail());
    }
}

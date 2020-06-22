<?php

use Illuminate\Support\Facades\DB;


include_once 'web_builder.php';
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::pattern('slug', '[a-z0-9- _]+');

# custom routes
Route::get('role',[
    'middleware' => 'role:edit',
    'uses' => 'TestController@index',
]);

Route::get('terminate',[
    'middleware' => 'terminate',
    'uses' => 'ABCController@index',
]);


Route::get('/myclass','ImplicitController@index');
class MyClass{
    public $foo = 'barddd';
}


Route::group(['prefix' => 'admin', 'namespace'=>'Admin'], function () {

    # Error pages should be shown without requiring login
    Route::get('404', function () {
        return view('admin/404');
    });
    Route::get('500', function () {
        return view('admin/500');
    });
    # Lock screen
    Route::get('{id}/lockscreen', 'UsersController@lockscreen')->name('lockscreen');
    Route::post('{id}/lockscreen', 'UsersController@postLockscreen')->name('lockscreen');
    # All basic routes defined here
    Route::get('login', 'AuthController@getSignin')->name('login');
    Route::get('signin', 'AuthController@getSignin')->name('signin');
    Route::post('signin', 'AuthController@postSignin')->name('postSignin');
    Route::post('signup', 'AuthController@postSignup')->name('admin.signup');
    Route::post('forgot-password', 'AuthController@postForgotPassword')->name('forgot-password');
    Route::get('login2', function () {
        return view('admin/login2');
    });


    # Register2
    Route::get('register2', function () {
        return view('admin/register2');
    });
    Route::post('register2', 'AuthController@postRegister2')->name('register2');

    # Forgot Password Confirmation
    Route::get('forgot-password/{userId}/{passwordResetCode}', 'AuthController@getForgotPasswordConfirm')->name('forgot-password-confirm');
    Route::post('forgot-password/{userId}/{passwordResetCode}', 'AuthController@getForgotPasswordConfirm');

    # Logout
    Route::get('logout', 'AuthController@getLogout')->name('logout');

    # Account Activation
    Route::get('activate/{userId}/{activationCode}', 'AuthController@getActivate')->name('activate');
});


Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'as' => 'admin.'], function () {
    # GUI Crud Generator

    # Dashboard / Index
    Route::get('/', 'JoshController@showHome')->name('dashboard');

    Route::get('setting', 'SettingController@index') ;
    Route::post('setting', 'SettingController@save') ;

    Route::get('tags', 'TagsController@index') ;
    Route::post('tags', 'TagsController@save') ;

    Route::get('google_login', 'MemberController@google_login');
    Route::get('google', 'MemberController@google');

    Route::get('destinations/delete/{id}', 'DestinationController@destroy');
    Route::post('destinations/update/{id}', 'DestinationController@update');

    Route::get('products/delete/{id}', 'ProductController@destroy');
    Route::post('products/update/{id}', 'ProductController@update');

    Route::get('proposals/delete/{id}', 'ProposalController@destroy');
    Route::post('proposals/update_main/{id}', 'ProposalController@update_main');
    Route::post('proposals/update_item/{id}', 'ProposalController@update_item');
    Route::post('proposals/update_document/{id}', 'ProposalController@update_document');
    Route::post('proposals/update_paid/{id}', 'ProposalController@update_paid');

    Route::get('members/delete/{id}', 'MemberController@destroy');
    Route::post('members/update/{id}', 'MemberController@update');
    # crop demo
    Route::post('crop_demo', 'JoshController@crop_demo')->name('crop_demo');
});

Route::group(['prefix' => 'admin','namespace'=>'Admin', 'middleware' => 'admin', 'as' => 'admin.'], function () {

    # User Management
    Route::group([ 'prefix' => 'users'], function () {
        Route::get('data', 'UsersController@data')->name('users.data');
        Route::get('{user}/delete', 'UsersController@destroy')->name('users.delete');
        Route::get('{user}/confirm-delete', 'UsersController@getModalDelete')->name('users.confirm-delete');
        Route::get('{user}/restore', 'UsersController@getRestore')->name('restore.user');
//        Route::post('{user}/passwordreset', 'UsersController@passwordreset')->name('passwordreset');
        Route::post('passwordreset', 'UsersController@passwordreset')->name('passwordreset');

    });
    Route::resource('users', 'UsersController');

    Route::get('crop_demo', function () {
        return redirect('admin/imagecropping');
    });
});

# Remaining pages will be called from below controller method
# in real world scenario, you may be required to define all routes manually

// Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
//     Route::get('{name?}', 'JoshController@showView');
// });

#frontend views
Route::get('/', ['as' => 'home', function () {
//    phpinfo() ;
    $lists = DB::select('SELECT t1.name,t1.continent,t2.pname FROM destinations AS t1 LEFT JOIN countries AS t2 ON t1.country = t2.name COLLATE utf8_unicode_ci ORDER BY t1.name') ;
    $destination = array() ;
    foreach($lists as $list) {
        array_push($destination,$list->name) ;
        array_push($destination,$list->pname) ;
        array_push($destination,$list->continent) ;
    }
    $setting = DB::table('settings')->where('name','contact_phone')->first() ;
    return view('index',compact('destination','setting'));
}]);
Route::get('login', 'FrontEndController@getLogin')->name('login');
Route::post('login', 'FrontEndController@postLogin')->name('login');
Route::get('register', 'FrontEndController@getRegister')->name('register');
Route::post('register','FrontEndController@postRegister')->name('register');
Route::get('login/google_login', 'FrontEndController@google_login')->name('google_login');
Route::get('login/google', 'FrontEndController@google')->name('google');
Route::get('login/facebook_login', 'FrontEndController@facebook_login')->name('facebook_login');
Route::get('login/facebook', 'FrontEndController@facebook')->name('facebook');
Route::get('logout', 'FrontEndController@getLogout')->name('logout');

Route::post('search_budget', 'FrontEndController@search_budget')->name('search_budget');
Route::post('search_destination', 'FrontEndController@search_destination')->name('search_destination');
Route::post('search_result', 'FrontEndController@search_result')->name('search_result') ;
Route::post('view_detail:{id}', 'FrontEndController@view_detail')->name('view_detail') ;
Route::post('order_proposal:{id}', 'FrontEndController@order_proposal')->name('order_proposal') ;
Route::post('contact', 'FrontEndController@postContact')->name('contact') ;
Route::post('subscribe', 'FrontEndController@postSubscribe')->name('subscribe') ;
Route::get('fees', 'FrontEndController@gotoFees')->name('fees');
Route::get('faqs', 'FrontEndController@gotoFaqs')->name('faqs');
Route::get('aboutus', 'FrontEndController@gotoAboutus')->name('aboutus');
Route::get('blog', 'FrontEndController@gotoBlog')->name('blog');
Route::get('blog/details', 'FrontEndController@gotoBlogDetails')->name('blog_details');

Route::resources([
    'admin/destinations' => 'DestinationController',
    'admin/products' => 'ProductController',
    'admin/proposals' => 'ProposalController',
    'admin/members' => 'MemberController'
]);



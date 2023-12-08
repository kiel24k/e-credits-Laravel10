<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfile;
use App\Http\Middleware\client;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
route::controller(UserController::class)->group(function () {
    route::get('/', 'userLogin')->name('user.login');
    route::get('user/signup', 'userSignup')->name('user.signup');
    route::post('user/signup/account', 'userSignupAccount')->name('user.signup.account');
    route::post('user/login/account', 'userLoginAccount')->name('user.login.account');
    route::get('main', 'mainSection')->name('main');
    route::get('section', 'userSection')->name('user.section');

     route::middleware([client::class])->group(function(){

        route::get('profile','userProfile')->name('user.profile');
        route::get('logout','userLogout')->name('user.logout');
     });
});

route::controller(UserProfile::class)->group(function(){
    route::middleware([client::class])->group(function(){
        route::get('profile','profileView')->name('profile.view');
    });
    });


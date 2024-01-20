<?php

use App\Http\Middleware\Admin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PurchaseController;
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

*/

// Route::get('/', function () {
//     return view('welcome');
// });
route::controller(UserController::class)->group(function () {
    route::get('login', 'userLogin')->name('user.login');
    route::get('user/signup', 'userSignup')->name('user.signup');
    route::post('user/signup/account', 'userSignupAccount')->name('user.signup.account');
    route::post('user/login/account', 'userLoginAccount')->name('user.login.account');
    route::get('main', 'mainSection')->name('main');
    route::get('section', 'userSection')->name('user.section');
    route::get('offer', 'offerDisplay')->name('offer.display');
    route::get('/', 'homeDisplay')->name('home.display');


    route::middleware([client::class])->group(function () {
        route::get('profile', 'userProfile')->name('user.profile');
        route::get('logout', 'userLogout')->name('user.logout');
    });
});

route::controller(PurchaseController::class)->group(function () {
    route::middleware([client::class])->group(function () {
        route::get('user/purchase/{id}', 'userPurchase')->name('user.purchase');
        route::post('purchased', 'purchaseProduct')->name('purchase.product');
    });
});
route::controller(UserProfile::class)->group(function () {
    route::middleware([client::class])->group(function () {
        route::get('profile', 'profileView')->name('profile.view');
        route::Get('delete.history{id}', 'deleteHistory')->name('delete.history');
    });
});

route::controller(AdminController::class)->group(function () {
    route::middleware([Admin::class])->group(function () {
        route::get('Admin/add', 'adminAddView')->name('admin.add.view');
        route::post('Admin/Add', 'adminAdd')->name('admin.add');
        route::get('admin/product', 'adminProduct')->name('admin.product');
        route::get('admin/add/product', 'adminAddProduct')->name('admin.add.product');
        route::post('admin/add/products', 'adminAddProducts')->name('admin.add.products');
        route::get('admin/update/view/{id}', 'adminUpdateView')->name('admin.update.view');
        route::post('admin/update', 'adminUpdate')->name('admin.update');
        route::get('admin/logout', 'adminLogout')->name('admin.logout');
        route::get('admin/delete{id}', 'delete')->name('admin.delete');
    });
});

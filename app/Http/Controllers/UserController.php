<?php

namespace App\Http\Controllers;

use App\Models\AllUser;
use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function mainSection()
    {
        return view('user.components.main');
    }
    public function userSection()
    {
        return view('user.layouts.section');
    }
    public function userLogin()
    {
        return view('user.components.login');
    }
    public function userSignup()
    {
        return view('user.components.signup');
    }
    public function userProfile(){
        return view('user.components.profile');
    }
    public function userSignupAccount(Request $req)
    {
        $req->validate([
            'username' => 'required|string|max:9',
            'email' => 'required|unique:all_users,email',
            'password' => 'required'
        ]);
        client::create([
            'username' => $req->username,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'user_type' => 'user'
        ]);
        return redirect()->route('user.login');
    }
    public function userLoginAccount(Request $req)
    {
        $cred = $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::guard('client')->attempt($cred)) {
            return redirect()->route('user.section');
        }
        return back()->withErrors([
            'user_email' => 'Your Email Not Registered'
        ]);
    }
    public function userLogout(Request $request){
        Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
    }
}


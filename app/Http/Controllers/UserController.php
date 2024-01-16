<?php

namespace App\Http\Controllers;

use App\Models\AllUser;
use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function mainSection()
    {
        return view('user.components.main');
    }
    public function userSection()
    {
        $item = DB::table('product')
            ->select('*')
            ->get();
        return view('user.layouts.section', compact('item'));
    }
    public function userLogin()
    {
        return view('user.components.login');
    }
    public function userSignup()
    {
        return view('user.components.signup');
    }
    public function userSignupAccount(Request $req)
    {
        $req->validate([
            'username' => 'required|unique:clients,username|string|max:9',
            'email' => 'required|unique:clients,email',
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
            if (Auth('client')->user()->user_type == 'user') {
                return redirect()->route('user.section');
            } else if (Auth('client')->user()->user_type == 'admin') {
                if (Auth::guard('admin')->attempt($cred)) {
                    return redirect()->route('admin.add.view');
                }
            }
        }
        return back()->withErrors([
            'user_email' => 'Your Email Not Registered'
        ]);
    }
    public function userLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ProductAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfile extends Controller
{
    public function profileView()
    {
        $info = Auth::guard('client')->user()->email;
        $infos = productAuth::where('owner', $info)->get();
        return view('user.components.profile', ['infos' => $infos]);
    }
}

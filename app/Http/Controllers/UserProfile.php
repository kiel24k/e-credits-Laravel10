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
        $infos = productAuth::where('owner', $info)->simplePaginate(5);
        return view('user.components.profile', ['infos' => $infos]);
    }
    public function deleteHistory($owner){
        ProductAuth::destroy($owner);
        return redirect()->route('profile.view');
        }
    }


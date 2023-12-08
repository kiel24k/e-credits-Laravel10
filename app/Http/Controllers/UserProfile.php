<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfile extends Controller
{
    public function profileView(){
        return view('user.components.profile');
    }
}

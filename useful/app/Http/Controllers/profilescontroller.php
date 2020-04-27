<?php

namespace App\Http\Controllers;
use App\user;
use Illuminate\Http\Request;

class profilescontroller extends Controller
{
    public function index($user)
    {
       $user = user::find($user);
        return view('home')->with('user',$user);
    }
}

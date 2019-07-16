<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class HomeController extends Controller
{
    public function index()
    {
    	$user = user::find(1)->passport;
    	return view('welcome',compact('user'));
    }
}

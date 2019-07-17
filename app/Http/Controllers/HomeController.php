<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class HomeController extends Controller
{
    public function index()
    {
    	//$users = user::find(1);
    	//$users = user::find(1)->mobile;
     	//$users = user::find(1)->passport;
     	return view('welcome');
    }
}

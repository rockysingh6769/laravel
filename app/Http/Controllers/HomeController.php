<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\role;
use App\video;
use App\post;

class HomeController extends Controller
{
    public function index()
    {
    	//$users = user::find(1);
        //$users = user::find(1)->mobile;
     	//$users = user::find(1)->passport;
     	//$users = user::find(1)->roles;
        //$post  =  post::first();
        //return $post->tags;
    	return view('welcome');
    }
}

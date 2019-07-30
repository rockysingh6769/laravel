<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\Mailtrap;		


class mailtrapController extends Controller
{
	public function index()
	{
		Mail::to('rocky@cybertrontechnologies.com')->send(new Mailtrap());
	}
}

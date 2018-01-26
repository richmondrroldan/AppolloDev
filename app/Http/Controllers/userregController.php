<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class userregController extends Controller
{
    public function mentorRegister(){
    	return view('auth.mRegister');
    }
}

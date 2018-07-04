<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //return home
    public function home()
    {
    	return view('cms.home');
    }
}

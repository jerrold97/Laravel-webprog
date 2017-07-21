<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
    	return view('website.index');
    }
    public function about(){
    	return view('website.about');
    }
}

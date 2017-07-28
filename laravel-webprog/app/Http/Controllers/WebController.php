<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;


class WebController extends Controller
{
    public function index(){
    	$destinations = Destination::all();
    	return view('website.index')->with('destinations',$destinations);
    }
    public function about(){
    	return view('website.about');
    }
}

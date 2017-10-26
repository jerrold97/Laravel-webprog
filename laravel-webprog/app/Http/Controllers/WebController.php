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

    public function destinations(){
    	return view('website.destination');
    }
    
    public function provinces(){
    	return view('website.provinces');
    }

    public function gallery(){
    	return view('website.gallery');
    }

    public function about(){
    	return view('website.about');
    }

    public function updates(){
    	return view('website.updates');
    }

    public function events(){
    	return view('website.events');
    }
}

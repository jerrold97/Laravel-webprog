<?php

namespace App\Http\Controllers;

use App\Destination;
use Illuminate\Http\Request;
use Alert;

class AdminController extends Controller
{
    public function index(){
    	return view('adminPortal.index');
    }
     public function destinations(Request $request){

    	$destinations = Destination::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.destinations.index', ['destinations' => $destinations]);
    	
    }

    public function table(Request $request){
        if($request->ajax()){
            $destinations = Destination::all();
            return view('admin.destinations.table')->with('destinations', $destinations); 
        }
        else {
            return redirect(route('clients.index'));
        }
    }
    public function create()
    {
        //$tags = Tag::all();
        return view('admin.destinations.index')  
                    ->with('type', "CREATE")
                    ->with('title', "ADD")
                    ->with('action', 'btn-success add')
                    ->with('button_text', 'Add');
    }
}

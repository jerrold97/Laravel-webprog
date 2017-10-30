<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Article;
use App\Event;
use App\User;
use Illuminate\Http\Request;
use Alert;

class AdminController extends Controller
{
    public function index(){
        $destination_number = Destination::all()->count();
        $article_number = Article::all()->count();
        $event_number = Event::all()->count();
        $user_number = User::all()->count();
    	return view('adminPortal.index')
                    ->with('destination_number', $destination_number)
                    ->with('article_number', $article_number)
                    ->with('event_number', $event_number)
                    ->with('user_number', $user_number);
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

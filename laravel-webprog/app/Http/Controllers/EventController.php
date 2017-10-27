<?php

namespace App\Http\Controllers;

use App\Event;
use App\Province;
use App\Municipality;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.events.index', ['events' => $events]);
    }

    public function table(Request $request){
        if($request->ajax()){
            $events = Event::all();
            return view('admin.events.table')->with('events', $events); 
        }
        else {
            return redirect(route('event.index'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();
        $municipalities = Municipality::all();
        return view('admin.events.form')  
                    ->with('provinces', $provinces)
                    ->with('municipalities', $municipalities)
                    ->with('type', "CREATE")
                    ->with('title', "ADD")
                    ->with('action', 'btn-success add')
                    ->with('button_text', 'Add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){

        $this->validate($request, [
            // Name of input in form
            'fkevent_municipality' => 'required',
            'event_name' => 'required',
            'event_desc' => 'required'
        ]);

        $event = new Event([
            //Name of column in database
            'fkevent_municipality' => $request->input('fkevent_municipality'),
            'event_name' => $request->input('event_name'),
            'event_desc' => $request->input('event_desc')
        ]);
        
        $event->save();
        //Alert::success('Good job!')->persistent("Close");
        //$destination->tags()->attach($request->input('tags') === null ? [] : $request->input('tags'));
        return redirect()->route('event.index')->with('info', 'Event Added, Event name is: ' . $request->input('event_name'));
    }
            else {
            return redirect(route('event.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if($request->ajax()) {
            $event = Event::findOrFail($id);
            $provinces = Province::all();
            $municipalities = Municipality::all();            
            $title = "Official";
           return view('admin.events.form')
                ->with('provinces', $provinces)
                ->with('municipalities', $municipalities)
                ->with('event', $event)
                ->with('title', $title)
                ->with('type', "SHOW")
                ->with('button_text', "Save Changes")
                ->with('action', "btn-warning view");
        }else{
            return redirect(route('event.index'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        if($request->ajax()) {

            $event = Event::findOrFail($id);
            $provinces = Province::all();
            $municipalities = Municipality::all(); 
            $title= "Edit Event";
           return view('admin.events.form')
                ->with('provinces', $provinces)
                ->with('municipalities', $municipalities)
                ->with('event', $event)
                ->with('title', $title)
                ->with('type', "EDIT")
                ->with('button_text', "Save Changes")
                ->with('action', "btn-primary edit");
        }else{
            return redirect(route('event.index'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        if($request->ajax()){
        $this->validate($request, [
            // Name of input in form
            'fkevent_municipality' => 'required',
            'event_name' => 'required',
            'event_desc' => 'required'
        ]);

        $event = Event::find($request->input('id'));
        $event->fkevent_municipality = $request->input('fkevent_municipality');
        $event->event_name = $request->input('event_name');
        $event->event_desc = $request->input('event_desc');

        $event->update();

        return redirect()->route('event.index')->with('info', 'Event edited for: ' . $request->input('event_name'));
        }else{
            return redirect(route('event.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event = $event->destroy($id)
            ? [
                    'message'    => "Successfully deleted event",
                    'alert' => 'success',
            ]
            : [
                    'message'    => "Sorry it appears there was a problem deleting this event",
                    'alert' => 'error',
            ];

        return response()->json($event);
    }
}

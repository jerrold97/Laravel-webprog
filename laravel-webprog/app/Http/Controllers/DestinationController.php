<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Province;
use App\Municipality;
use App\Barangay;
use Illuminate\Http\Request;
use Alert;
class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $destinations = Destination::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.destinations.index', ['destinations' => $destinations]);
    }

    public function table(Request $request){
        if($request->ajax()) {
            $destinations = Destination::all();
            return view('admin.destinations.table')->with('destinations', $destinations); 
        }
        else {
            return redirect(route('destination.index'));
        }
    }

    public function tableProvince(Request $request,$id){
        if($request->ajax()){
            
            $municipality_id = Municipality::where('fkmunicipality_provinces', $id)->pluck('municipality_id');
            $municipalities = Municipality::where('fkmunicipality_provinces', $id)->pluck('municipality_id');

            $barangays = Barangay::whereIn('fkbarangays_municipalities', $municipality_id)->pluck('barangays_id');
            $destinations = Destination::whereIn('fkdestination_barangays', $barangays)->get();

            return view('admin.destinations.table')->with('destinations', $destinations); 
        }
        else {
            return redirect(route('destination.index'));
        }
    }

    public function tableMunicipality(Request $request, $province, $municipality){

        if($request->ajax()) {
           
            if($municipality == 0) {
                $municipality_id = Municipality::where('fkmunicipality_provinces', $province)->pluck('municipality_id');
                $barangays = Barangay::whereIn('fkbarangays_municipalities', $municipality_id)->pluck('barangays_id');
                $destinations = Destination::whereIn('fkdestination_barangays', $barangays)->get();
            }
            else {
                $barangays = Barangay::where('fkbarangays_municipalities', $municipality)->pluck('barangays_id');
                $destinations = Destination::whereIn('fkdestination_barangays', $barangays)->get();                
            }

            return view('admin.destinations.table')->with('destinations', $destinations); 
        }
        else {
            return redirect(route('destination.index'));
        }


    }

    public function tableBarangay(Request $request, $province, $municipality, $barangay){
        if($request->ajax()){
            
            if($barangay == 0)
            {
                $barangays = Barangay::where('fkbarangays_municipalities', $municipality)->pluck('barangays_id');

                $destinations = Destination::whereIn('fkdestination_barangays', $barangays)->get();      
            }
            else
            {
                $destinations = Destination::where('fkdestination_barangays', $barangay)->get();
            }
            

            return view('admin.destinations.table')->with('destinations', $destinations); 
        }
        else {
            return redirect(route('destination.index'));
        }
    }
    public function getMunicipality(Request $request){
        if($request->ajax()){
            //$municipality_id = $request->province;
            $municipalities = Municipality::where('fkmunicipality_provinces', $request->province)->get();
            //dd($municipality_id);
            return response()->json($municipalities);
        }
        else {
            return redirect(route('destination.index'));
        }
    }

    public function getBarangay(Request $request){
        if($request->ajax()){
            //$barangay_id = $request->municipality;
            //dd("AAAA");
            $barangays = Barangay::where('fkbarangays_municipalities', $request->municipality)->get();
            //dd($municipality_id);
            return response()->json($barangays);
        }
        else {
            return redirect(route('destination.index'));
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$tags = Tag::all();
        $provinces = Province::all();
        //$municipalities = Municipality::where('fkmunicipality_provinces', 1)->get();
        //$barangays = Barangay::all();
        $municipalities = [];
        $barangays = [];
        return view('admin.destinations.form')
                    ->with('provinces', $provinces)
                    ->with('municipalities', $municipalities)
                    ->with('barangays', $barangays)
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
            'fkdestination_barangays' => 'required',
            'dname' => 'required',
            'dlocation' => 'required',
            'ddesc' => 'required'
        ]);
        $destination = new Destination([
            'fkdestination_barangays' => $request->input('fkdestination_barangays'),
            'dname' => $request->input('dname'),
            'dlocation' => $request->input('dlocation'),
            'ddesc' => $request->input('ddesc')
        ]);
        
        $destination->save();
        Alert::success('Good job!')->persistent("Close");
        //$destination->tags()->attach($request->input('tags') === null ? [] : $request->input('tags'));
        return redirect()->route('destination.index')->with('info', 'Post created, Destination is: ' . $request->input('dname'));
    }
            else {
            return redirect(route('destination.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if($request->ajax()) {
            $destination = Destination::findOrFail($id);
            $provinces = Province::all();
            $municipalities = Municipality::all(); 
            $barangays = Barangay::all();
            $title = "Destination";
           return view('admin.destinations.form')
                ->with('provinces', $provinces)
                ->with('municipalities', $municipalities)
                ->with('barangays', $barangays)
                ->with('destination', $destination)
                ->with('title', $title)
                ->with('type', "SHOW")
                ->with('button_text', "Save Changes")
                ->with('action', "btn-warning view");
        }else{
            return redirect(route('destination.index'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        if($request->ajax()) {

            $destination = Destination::findOrFail($id);
            $provinces = Province::all();
            $municipalities = Municipality::all(); 
            $barangays = Barangay::all();
            $title= "Edit Destination Information";
           return view('admin.destinations.form')
                ->with('provinces', $provinces)
                ->with('municipalities', $municipalities)
                ->with('barangays', $barangays)
                ->with('destination', $destination)
                ->with('title', $title)
                ->with('type', "EDIT")
                ->with('button_text', "Save Changes")
                ->with('action', "btn-primary edit");
        }else{
            return redirect(route('destination.index'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Destination  $destination)
    {
        if($request->ajax()){
        $this->validate($request, [
            'fkdestination_barangays' => 'required',
            'dname' => 'required',
            'dlocation' => 'required',
            'ddesc' => 'required'
        ]);
        $destination = Destination::find($request->input('id'));
        $destination->fkdestination_barangays = $request->input('fkdestination_barangays');
        $destination->dname = $request->input('dname');
        $destination->dlocation = $request->input('dlocation');
        $destination->ddesc = $request->input('ddesc');

        $destination->update();
        //$post->tags()->detach();
        //$post->tags()->attach($request->input('tags') === null ? [] : $request->input('tags'));
        //$post->tags()->sync($request->input('tags') === null ? [] : $request->input('tags'));
        return redirect()->route('destination.index')->with('info', 'Desination Info edited for: ' . $request->input('dname'));
        }else{
            return redirect(route('destination.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $destination = Destination::findOrFail($id);
        $destination = $destination->destroy($id)
            ? [
                    'message'    => "Successfully deleted employee",
                    'alert' => 'success',
            ]
            : [
                    'message'    => "Sorry it appears there was a problem deleting this employee",
                    'alert' => 'error',
            ];

        return response()->json($destination);
    }
}

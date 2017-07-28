<?php

namespace App\Http\Controllers;

use App\Official;
use App\Province;
use App\Municipality;
use Illuminate\Http\Request;
use Alert;
class OfficialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $officials = Official::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.officials.index', ['officials' => $officials]);
    }

    public function table(Request $request){
        if($request->ajax()){
            $officials = Official::all();
            return view('admin.officials.table')->with('officials', $officials); 
        }
        else {
            return redirect(route('official.index'));
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
        return view('admin.officials.form')  
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
            'fkofficial_municipality' => 'required',
            'fkofficial_province' => 'required',
            'official_first' => 'required',
            'official_last' => 'required'
        ]);
        $official = new Official([
            'fkofficial_municipality' => $request->input('fkofficial_municipality'),
            'fkofficial_province' => $request->input('fkofficial_province'),
            'official_first' => $request->input('official_first'),
            'official_middle' => $request->input('official_middle'),
            'official_last' => $request->input('official_last')
        ]);
        
        $official->save();
        Alert::success('Good job!')->persistent("Close");
        //$destination->tags()->attach($request->input('tags') === null ? [] : $request->input('tags'));
        return redirect()->route('official.index')->with('info', 'Official Added, Official name is: ' . $request->input('official_first'));
    }
            else {
            return redirect(route('official.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Official  $official
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if($request->ajax()) {
            $official = Official::findOrFail($id);
            $provinces = Province::all();
            $municipalities = Municipality::all();            
            $title = "Official";
           return view('admin.officials.form')
                ->with('provinces', $provinces)
                ->with('municipalities', $municipalities)
                ->with('official', $official)
                ->with('title', $title)
                ->with('type', "SHOW")
                ->with('button_text', "Save Changes")
                ->with('action', "btn-warning view");
        }else{
            return redirect(route('official.index'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Official  $official
     * @return \Illuminate\Http\Response
     */
    public function edit(Official $official)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Official  $official
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Official $official)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Official  $official
     * @return \Illuminate\Http\Response
     */
    public function destroy(Official $official)
    {
        //
    }
}

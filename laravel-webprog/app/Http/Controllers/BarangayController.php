<?php

namespace App\Http\Controllers;

use App\Province;
use App\Municipality;
use App\Barangay;
use Illuminate\Http\Request;

class BarangayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangays = Barangay::all();
        return view('admin.barangays.index')->with('barangays',$barangays);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function table(Request $request){
        if($request->ajax()) {
            $barangays = Barangay::all();
            return view('admin.barangays.table')->with('barangays', $barangays); 
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
            //$barangays = Destination::whereIn('fkdestination_barangays', $barangays)->get();

            return view('admin.barangays.table')->with('barangays', $barangays); 
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
                //$barangays = Destination::whereIn('fkdestination_barangays', $barangays)->get();
            }
            else {
                $barangays = Barangay::where('fkbarangays_municipalities', $municipality)->pluck('barangays_id');
                //$barangays = Destination::whereIn('fkdestination_barangays', $barangays)->get();                
            }

            return view('admin.barangays.table')->with('barangays', $barangays); 
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
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barangay  $barangay
     * @return \Illuminate\Http\Response
     */
    public function show(Barangay $barangay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barangay  $barangay
     * @return \Illuminate\Http\Response
     */
    public function edit(Barangay $barangay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barangay  $barangay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barangay $barangay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barangay  $barangay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barangay $barangay)
    {
        //
    }
}

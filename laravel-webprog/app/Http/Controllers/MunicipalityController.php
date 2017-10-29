<?php

namespace App\Http\Controllers;

use App\Municipality;
use App\Province;
use Illuminate\Http\Request;



class MunicipalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //$provinces= Province::all();
        $municipalities = Municipality::all();
        return view('admin.municipalities.index')->with('municipalities',$municipalities);
    }

    public function table(){
        $municipalities = Municipality::all();
        return view('admin.municipalities.table')->with('municipalities',$municipalities);
    }

    public function tableProvince(Request $request,$id){
        if($request->ajax()){
            
            $municipalities = Municipality::where('fkmunicipality_provinces', $id)->get();

            return view('admin.municipalities.table')->with('municipalities', $municipalities);
        }
        else {
            return redirect(route('municipality.index'));
        }
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function show(Municipality $municipality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function edit(Municipality $municipality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipality $municipality)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipality $municipality)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = \App\City::all();
        return view('citys.index', ['cities' => $cities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city= new \App\City;
        return view('citys.create', ['city' => $city]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       \App\City::create($this->validata($request));
       return redirect()->route('citys.index')->with('success', 'City created');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $city = \App\City::findorfail($id);
        return view('citys.show', ['city' => $city]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = \App\City::findorfail($id);
        return view('citys.edit', ['city' => $city]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       \App\City::findorfail($id)->update($this-validata($request));
       return redirect()->route('citys.index')->with('success', 'City updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = \App\City::findorfail($id);
        $city->delete();
        return redirect()->route('citys.index')->with('success', 'City was deleted');
    }
    private function validata($request){
        $validata = $request->validate(
            ['name' => 'required',
             'state' => 'required', 
             'population_2010' => 'integer',
             'population_rank' => 'integer'
             ]);
        return $validata;
    }
}

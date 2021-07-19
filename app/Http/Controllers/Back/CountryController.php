<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountryCreateRequest;
use App\Http\Requests\CountryUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{

    public function index()
    {
        $countries = Country::orderBy('created_at' , 'desc')->get();
        return view('back.country.list' , compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryCreateRequest $request)
    {
        $country = new Country;
        $country->name      = $request->name;
        $country->content    = $request->content;


        if($request->hasFile('image')){

            $file = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/country' , $file);
            $country->image = $file;
        
        }


        $country->save();
        return redirect()->route('countries.index')->withSuccess('Success Create...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countries = Country::find($id);
        return view('back.country.edit' , compact('countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CountryUpdateRequest $request, $id)
    {
        $country=Country::find($id) ?? abort(403, 'Country not found');
        $country->name       = $request->name;
        $country->content      = $request->content;

        if($request->hasFile('image')){

            $file = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/country' , $file);
            $country->image = $file;
        
        }

        $country->save();
        return redirect()->route('countries.index')->withSuccess('Country update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Country::find($id)->delete();
        return redirect()->back()->withSuccess('Success delete...');
    }
}

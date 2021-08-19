<?php

namespace App\Http\Controllers\Back;


use App\Http\Requests\EducationCreateRequest;
use App\Http\Requests\EducationUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;


class EducationController extends Controller
{
    function __construct()
    {
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
        $this->middleware('permission:education-index'   , ['only' => ['index']]);
        $this->middleware('permission:education-create'  , ['only' => ['create']]);
        $this->middleware('permission:education-store'   , ['only' => ['store']]);
        $this->middleware('permission:education-edit'    , ['only' => ['edit']]);
        $this->middleware('permission:education-update'  , ['only' => ['update']]);
        $this->middleware('permission:education-destroy' , ['only' => ['destroy']]);
    }

    public function index()
    {
        $educations = Education::orderBy('created_at' , 'desc')->get();
        return view('back.education.list' , compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EducationCreateRequest $request)
    {
        $education = new Education;
        $education->name      = $request->name;

        if($request->hasFile('image')){

            $file = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/education' , $file);
            $education->image = $file;
        
        }


        $education->save();
        return redirect()->route('educations.index')->withSuccess('Success Create...');
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
        $educations = Education::find($id);
        return view('back.education.edit' , compact('educations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EducationUpdateRequest $request, $id)
    {
        $education=Education::find($id) ?? abort(403, 'Education not found');
        $education->name       = $request->name;
        
        if($request->hasFile('image')){

            $file = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/education' , $file);
            $education->image = $file;
        
        }

        $education->save();
        return redirect()->route('educations.index')->withSuccess('Education update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Education::find($id)->delete();
        return redirect()->back()->withSuccess('Success delete...');
    }
}

<?php

namespace App\Http\Controllers\Back;

use App\Http\Requests\SuccessCreateRequest;
use App\Http\Requests\SuccessUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Success;

class SuccessController extends Controller
{
    function __construct()
    {
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
        $this->middleware('permission:success-index'   , ['only' => ['index']]) ?? abort('Icaze Yoxdu');
        $this->middleware('permission:success-create'  , ['only' => ['create']]);
        $this->middleware('permission:success-store'   , ['only' => ['store']]);
        $this->middleware('permission:success-edit'    , ['only' => ['edit']]);
        $this->middleware('permission:success-update'  , ['only' => ['update']]);
        $this->middleware('permission:success-destroy' , ['only' => ['destroy']]);
    }
    public function index()
    {
        $successes = success::orderBy('created_at' , 'desc')->get();
        return view('back.success.list' , compact('successes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.success.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuccessCreateRequest $request)
    {
        $success = new success;
        $success->name    = $request->name;
        $success->uni     = $request->uni;
        $success->faculty = $request->faculty;
        $success->degree  = $request->degree;
        

        if($request->hasFile('image')){

            $file = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/success' , $file);
            $success->image = $file;
        
        }


        $success->save();
        return redirect()->route('successes.index')->withSuccess('Success Create...');
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
        $successes = success::find($id);
        return view('back.success.edit' , compact('successes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SuccessUpdateRequest $request, $id)
    {
        $success=success::find($id) ?? abort(403, 'Success not found');
        $success->name    = $request->name;
        $success->uni     = $request->uni;
        $success->faculty = $request->faculty;
        $success->degree  = $request->degree;
        

        if($request->hasFile('image')){

            $file = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/success' , $file);
            $success->image = $file;
        
        }


        $success->save();
        return redirect()->route('successes.index')->withSuccess('Success Create...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        success::find($id)->delete();
        return redirect()->back()->withSuccess('Success delete...');
    }
}

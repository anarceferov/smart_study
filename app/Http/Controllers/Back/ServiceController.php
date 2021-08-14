<?php

namespace App\Http\Controllers\Back;

use App\Http\Requests\ServiceCreateRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Http\Controllers\Controller;
use App\Models\Service;


class ServiceController extends Controller
{
    function __construct()
    {
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
        $this->middleware('permission:service-index'   , ['only' => ['index']]) ?? abort('Icaze Yoxdu');
        $this->middleware('permission:service-create'  , ['only' => ['create']]);
        $this->middleware('permission:service-store'   , ['only' => ['store']]);
        $this->middleware('permission:service-edit'    , ['only' => ['edit']]);
        $this->middleware('permission:service-update'  , ['only' => ['update']]);
        $this->middleware('permission:service-destroy' , ['only' => ['destroy']]);
    }
    
    public function index()
    {
        $services = service::orderBy('created_at' , 'desc')->get();
        return view('back.service.list' , compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceCreateRequest $request)
    {
        $service = new Service;
        $service->name      = $request->name;
        $service->content = $request->content;

        if($request->hasFile('image') && $request->hasFile('single_image')){

            $file = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/service' , $file);
            $service->image = $file;

            $file = $request->file('single_image')->getClientOriginalName();
            $request->file('single_image')->storeAs('public/service' , $file);
            $service->single_image = $file;
        
        }


        $service->save();
        return redirect()->route('services.index')->withSuccess('Success Create...');
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
        $services = Service::find($id);
        return view('back.service.edit' , compact('services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceUpdateRequest $request, $id)
    {
        $service=Service::find($id) ?? abort(403, 'Service not found');
        $service->name      = $request->name;
        $service->content = $request->content;

        if($request->hasFile('image') && $request->hasFile('single_image')){

            $file = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/service' , $file);
            $service->image = $file;

            $file = $request->file('single_image')->getClientOriginalName();
            $request->file('single_image')->storeAs('public/service' , $file);
            $service->single_image = $file;
        
        }


        $service->save();
        return redirect()->route('services.index')->withSuccess('Success Create...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        service::find($id)->delete();
        return redirect()->back()->withSuccess('Success delete...');
    }
}

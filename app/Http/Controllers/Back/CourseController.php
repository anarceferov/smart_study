<?php

namespace App\Http\Controllers\Back;

use App\Http\Requests\CourseCreateRequest;
use App\Http\Requests\CourseUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('created_at' , 'desc')->get();
        return view('back.course.list' , compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseCreateRequest $request)
    {
        $course = new Course;
        $course->name      = $request->name;
        $course->content    = $request->content;


        if($request->hasFile('image')){

            $file = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/course' , $file);
            $course->image = $file;
        
        }


        $course->save();
        return redirect()->route('courses.index')->withSuccess('Success Create...');
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
        $courses = Course::find($id);
        return view('back.course.edit' , compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseUpdateRequest $request, $id)
    {
        $course=Course::find($id) ?? abort(403, 'Course not found');
        $course->name       = $request->name;
        $course->content      = $request->content;

        if($request->hasFile('image')){

            $file = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/course' , $file);
            $course->image = $file;
        
        }

        $course->save();
        return redirect()->route('courses.index')->withSuccess('Course update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::find($id)->delete();
        return redirect()->back()->withSuccess('Success delete...');
    }
}

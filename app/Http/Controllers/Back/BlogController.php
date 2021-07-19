<?php

namespace App\Http\Controllers\Back;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\BlogCreateRequest;
use App\Http\Requests\BlogUpdateRequest;

class BlogController extends Controller
{

    public function index()
    {

        $blogs = Blog::orderBy('created_at' , 'desc')->with('author')->get();

        return view('back.blog.list' , compact('blogs'));
    }

    public function create()
    {
        return view('back.blog.create');
    }

    public function store(BlogCreateRequest $request)
    {
        $blog = new Blog;
        $blog->title      = $request->title;
        $blog->content    = $request->content;
        $blog->user_id     = Auth::user()->id;
        $blog->status = 'check';
        $blog->slug    = Str::slug($request->title);

        if($request->hasFile('blog_image')){

            $file = $request->file('blog_image')->getClientOriginalName();
            $request->file('blog_image')->storeAs('public/blog' , $file);
            $blog->blog_image = $file;
        
        }


        $blog->save();
        return redirect()->route('blogs.index')->withSuccess('Success Create...');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $blogs = Blog::find($id);
        return view('back.blog.edit' , compact('blogs'));
    }

    public function update(BlogUpdateRequest $request, $id)
    {
        $blog=Blog::find($id) ?? abort(403, 'Blog not found');
        $blog->title       = $request->title;
        $blog->content      = $request->content;
        $blog->status        = $request->status; 

        if($request->hasFile('blog_image')){

            $file = $request->file('blog_image')->getClientOriginalName();
            $request->file('blog_image')->storeAs('public/blog' , $file);
            $blog->blog_image = $file;
        
        }

        $blog->save();
        return redirect()->route('blogs.index')->withSuccess('Blog update');
    }

    public function destroy($id)
    {
        Blog::find($id)->delete();
        return redirect()->back()->withSuccess('Success delete...');
    }
}

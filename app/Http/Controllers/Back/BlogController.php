<?php

namespace App\Http\Controllers\Back;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Http\Requests\BlogCreateRequest;
use App\Http\Requests\BlogUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class BlogController extends Controller
{

    function __construct()
    {
        Cache::flush();
        $this->middleware('permission:blog-index', ['only' => ['index']]);
        $this->middleware('permission:blog-create', ['only' => ['create']]);
        $this->middleware('permission:blog-store', ['only' => ['store']]);
        $this->middleware('permission:blog-edit', ['only' => ['edit']]);
        $this->middleware('permission:blog-update', ['only' => ['update']]);
        $this->middleware('permission:blog-destroy', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {

        // $blogs = Redis::connection();

        // $blogs->set('blogs' ,  Blog::orderBy('created_at', 'desc')->with('author')->get());
 
        // $blogs->get('blogs');
        // session()->put('name' , 'Anar Ceferov');
        // $tests = session()->get('name');
        // return $tests;
        $blogs = Cache::remember('blogs', 120 , function () {
           return Blog::orderBy('created_at', 'desc')->with('author')->get();
        });
        // $blogs =  Blog::orderBy('created_at', 'desc')->with('author')->get();
        // $blogs = Redis::set('blogs' , $blogs);
        // $blogs = Redis::get($blogs);

        return view('back.blog.list', compact('blogs'));

        // return view('back.blog.list', compact('blogs'));
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

        if ($request->hasFile('blog_image')) {

            $file = $request->file('blog_image')->getClientOriginalName();
            $request->file('blog_image')->storeAs('public/blog', $file);
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
        return view('back.blog.edit', compact('blogs'));
    }

    public function update(BlogUpdateRequest $request, $id)
    {
        $blog = Blog::find($id) ?? abort(403, 'Blog not found');
        $blog->title       = $request->title;
        $blog->content      = $request->content;
        $blog->status        = $request->status;

        if ($request->hasFile('blog_image')) {

            $file = $request->file('blog_image')->getClientOriginalName();
            $request->file('blog_image')->storeAs('public/blog', $file);
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

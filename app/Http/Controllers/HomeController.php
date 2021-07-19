<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\Country;
use App\Models\Education;
use App\Models\Service;
use App\Models\Success;
use App\Models\Course;

class HomeController extends Controller
{

    public function home()
    {
        $educations = Education::orderBy('created_at' , 'desc')->get();
        $countries  = country::inRandomOrder()->take(6)->get();
        $services = Service::orderBy('created_at' , 'desc')->get();
        $blogs = Blog::with('author')->orderBy('created_at' , 'desc')->take(6)->get();
        $successes = success::orderBy('created_at' , 'desc')->get();
        $courses = course::orderBy('created_at' , 'desc')->get();
        return view('front.home' , compact('educations' , 'countries' , 'services' , 'blogs' , 'successes' , 'courses'));
    }

    public function blog()
    {
        $blogs = Blog::orderBy('created_at' , 'desc')->with('author');

        if(request()->get('blog'))
        {
            $blogs = $blogs->where('title' , 'LIKE' , '%'.request()->get('blog').'%');
        }
        $blogs = $blogs->get();
        return view('front.blog' , compact('blogs'));
    }

    public function blog_inner($slug)
    {
        $blogs = blog::whereSlug($slug)->first();
        $allBlogs = Blog::with('author')->whereStatus('publish')->whereNotIn('slug' , [$slug])->inRandomOrder()->take(3)->get();
        return view('front.blog_inner' , compact('blogs' , 'allBlogs'));
    }

    public function country()
    {
        $countries = country::orderBy('created_at' , 'desc')->get();
        return view('front.country' , compact('countries'));
    }


    public function country_inner($id)
    {
        $country = country::whereId($id)->first();
        return view('front.country_inner' , compact('country'));
    }

    public function servise_inner($id)
    {
        $services = Service::whereId($id)->first();
        return view('front.services_inner' , compact('services'));
    }
}

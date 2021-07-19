@extends('front.layouts.master')
@section('title', 'Smart Study-Blog')
@section('content')
<div class="main-container">
    <form action="" method="GET" autocomplete="off">
        <div class="row justify-content-center bg-dark">
            <div class="form-group col-md-3 mt-5 mb-5">
                <input type="search" placeholder="Search..." class="form-control text-center"
                    style="border-radius: 15px; box-shadow: none!important;" name="blog"
                    value="{{request()->get('blog')}}">
            </div>
        </div>
    </form>
    <div class="main">
        <h1 id=line>Blog</h1>
        @if (count($blogs) < 1)
        <div class="alert alert-danger text-center" role="alert">
            <h2>Blog Tapilmadi...</h2>
        </div>
        @endif

        <div class="country-cards">
            @foreach ($blogs as $blog)
            <a class="card2 col-md-4" href="{{ route('blog.inner' ,  $blog->slug )}}" style="display: block">
                <img class="photo1" src="{{$blog->blog_image}}" alt="{{$blog->slug}}" />
                <img class="photo2" src="{{$blog->author->image}}" alt="{{$blog->slug}}" />
                <div id="info">
                    <h1 class="infoh1">{{$blog->author->name}}</h1>
                    <hr />
                    <h1 class="infoh2">{!! Str::limit($blog->title , 15)!!}</h1>
                    <p>{!!Str::limit($blog->content , 20)!!}</p>
                </div>
            </a>
            @endforeach

        </div>
    </div>
</div>
@endsection
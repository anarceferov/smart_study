@extends('front.layouts.master')
@section('title', $blogs->title)
@section('content')
<div class="main-container">
    <div class="main">
        <a href="{{route('blog')}}">
            <div id="arrow2"><img src="{{asset('front/')}}/resources/img/kecid.mavi.svg" alt=""></div>
        </a>
        <h1 id=line>{{$blogs->title}}</h1>
        <div class="full">
            <div class=" left">
                <img src="{{$blogs->blog_image}}" alt="">
                <p>
                    {!!$blogs->content!!}
                </p>
            </div>
            <div class="right">

                @foreach ($allBlogs as $blogall)
                <div class="card2" data-tilt>
                    <a href="{{ route('blog.inner' ,  $blogall->slug )}}">
                        <img class="photo1" src="{{$blogall->blog_image}}" alt="{{$blogall->slug}}" />
                        <img class="photo2" src="{{$blogall->author->image}}" alt="{{$blogall->slug}}" />
                        <div id="info">
                            <h1 class="infoh1">{{$blogall->author->name}}</h1>
                            <hr />
                            <h1 class="infoh2">{!! Str::limit($blogall->title , 15)!!}</h1>
                            <p>{!!Str::limit($blogall->content , 20)!!}</p>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>



@endsection
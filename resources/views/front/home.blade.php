@extends('front.layouts.master')
@section('title', 'Smart Study')
@section('content')
<div class="hero">
    <div class="hero-inner">
        <div class="registration">
            <h1>Xoş Gəlmisiniz!</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis laudantium consequuntur odit
                aliquam excepturi, quibusdam porro dolore ipsam alias nemo.</p>
            <a href="#getintouch" id="registr">Qeydiyyat</a>
        </div>
        <div class="hero-img">
            <img src="{{asset('front/')}}/resources/img/home.png" alt="">
        </div>
    </div>
</div>
<div id="studyabroad" class="education-container">
    <div class="education">
        <div class="text-blue">
            <h1>Xaricdə Təhsil</h1>
            <p>Xaricdə təhsil almaq istəyən tələbələr üçün xüsusi yaradılmış xidmət </p>
        </div>
        <div class="icons-container">
            @foreach ($educations as $education)
            <div class="icons">
                <div class="iconsinner">
                    <img src="{{$education->image}}" alt="">
                    <p class="p3">{!! Str::limit($education->name , 10) !!}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div id="cities" class="country-container">
    <div class="country">
        <div class="text-white">
            <h1>Ölkələr</h1>
            <p>Xaricdə təhsil almaq istəyən tələbələr üçün xüsusi yaradılmış xidmət</p>
        </div>
        <div class="icons1-container">

            @foreach ($countries as $country)
            <a href="{{route('country.inner' , $country->id)}}">
                <div style="background: url('{{$country->image}}') center/cover;"
                    class="icons1">
                    <div class="countrytext">
                        <span>{{$country->name}}</span>
                        <span>
                            <p>{!!$country->content!!}</p>
                        </span>
                    </div>
                </div>
            </a>
            @endforeach

            <div id="arrow0">
                <a href="{{route('country')}}"><img src="{{asset('front/')}}/resources/img/kecid.mavi.svg" alt=""></a>
            </div>
        </div>
        <div class="bottomarrow">
            <a href="{{route('country')}}"><img src="{{asset('front/')}}/resources/img/kecid.mavi.svg" alt=""></a>
        </div>
    </div>
</div>
<div id="services" class="education1-container">
    <div class="education1">
        <div class="text-blue">
            <h1>Xidmətlərimiz</h1>
            <p>Xaricdə təhsil almaq istəyən tələbələr üçün xüsusi yaradılmış xidmət </p>
        </div>
        <div class="icons-container">
            @foreach ($services as $servise)
            <div class="icons">
                <a href="{{route('servise.inner' , $servise->id)}}">
                    <div class="iconsinner">
                        <img src="{{$servise->image}}" alt="">
                        <p class="p3">{!! Str::limit($servise->name , 10) !!}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div id="blogs" class="blog-container">
    <div class="blog">
        <div class="text-white">
            <h1>Blog</h1>
            <p>Xaricdə təhsil almaq istəyən tələbələr üçün xüsusi yaradılmış xidmət
                <p>
        </div>
        <div class="carousel">

            @foreach ($blogs as $blog)
            <a href="{{route('blog.inner' , $blog->slug)}}">
                <div class="card1">
                    <img class="photo1" src="{{$blog->blog_image}}" alt="" />
                    <img class="photo2" src="{{$blog->author->image}}" alt="" />
                    <div id="info">
                        <h1 class="infoh1">{{$blog->author->name}}</h1>
                        <hr />
                        <h1 class="infoh2">{!! str::limit($blog->title , 10) !!}</h1>
                        <p>{!! str::limit($blog->content , 10) !!}</p>
                    </div>
                </div>
            </a>
            @endforeach

            <div id="arrow">
                <a href="{{route('blog')}}"><img src="{{asset('front/')}}/resources/img/kecid.ag.svg" alt=""></a>
            </div>
        </div>
        <div class="bottomarrow">
            <a href="{{route('blog')}}"><img src="{{asset('front/')}}/resources/img/kecid.ag.svg" alt=""></a>
        </div>
    </div>
</div>
<div id="diamonds" class="success-container">
    <div class="success">
        <div class="text-blue">
            <h1>Uğurlarımız</h1>
            <p>Xaricdə təhsil almaq istəyən tələbələr üçün xüsusi yaradılmış xidmət
                <p>
        </div>
        <div class="success-0">
            @foreach ($successes as $success)
            <div class="success1">
                <div id="profile"><img src="{{$success->image}}" alt=""></div>
                <div class="box">
                    <p>{{$success->name}}</p>
                </div>
                <hr />
                <div class="box">
                    <p>{{$success->uni}}</p>
                </div>
                <hr />
                <div class="box">
                    <p>{{$success->faculty}}</p>
                </div>
                <hr />
                <div class="box">
                    <p>{{$success->degree}}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<div id="languagecourse" class="language-container">
    <div class="language">
        <div class="text-white">
            <h1>Dil Kursları</h1>
            <p>Xaricdə təhsil almaq istəyən tələbələr üçün xüsusi yaradılmış xidmət
                <p>
        </div>
        <div class="lang-flex">

            @foreach ($courses as $course)
            <div style="background: url('{{$course->image}}') center/cover;"
                class="language-photo">
                <div id="whitebox">
                    <p class="p2">{!! $course->name !!}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
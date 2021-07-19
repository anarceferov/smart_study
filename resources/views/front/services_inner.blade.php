@extends('front.layouts.master')
@section('title', $services->name)
@section('content')
<div class="main-container">
    <div class="main">
        <a href="{{route('home')}}">
            <div id="arrow2"><img src="{{asset('front/')}}/resources/img/kecid.mavi.svg" alt=""></div>
        </a>
        <h1 id=line>{!! $services->name !!}</h1>
        <div class="aside">
            <div id="singleimg1">
                <img src="{{$services->image}}" alt="">
            </div>
            <div id="singleinfo">
                <p>{!! $services->content !!}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
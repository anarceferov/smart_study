@extends('front.layouts.master')
@section('title', $country->name)
@section('content')
<div class="main-container">
    <div class="main">
        <a href="index.html"><div id="arrow2" ><img src="./resources/img/kecid.mavi.svg" alt=""></div></a>            <h1 id=line>{{$country->name}}</h1>
        <div class="aside">
            <div id="singleimg">
                <img src="{{$country->image}}" alt="">
            </div>
            <div id="singleinfo">
                <p>{!!$country->content!!}</p>
            </div>
        </div>
    </div>
</div>
@endsection


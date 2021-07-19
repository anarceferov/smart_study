@extends('front.layouts.master')
@section('title', 'Smart Study Ölkələr')
@section('content')
<div class="main-container">
    <div class="main">
        <a href="index.html">
            <div id="arrow2"><img src="./resources/img/kecid.mavi.svg" alt=""></div>
        </a>
        <h1 id=line>Ölkələr</h1>
        <div class="country-cards">
            @foreach ($countries as $country)
            <a href="{{route('country.inner' , $country->id)}}">
                <div style="background: url('{{$country->image}}') center/cover;" class="icons1">
                    <div class="countrytext"> 
                        <span>{!!$country->name!!}</span>
                        <span>
                            <p>{!!$country->content!!}</p>
                        </span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection


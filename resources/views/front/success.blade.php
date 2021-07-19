@extends('front.layouts.master')
@section('title', 'Smart Study')
@section('content')
    <div class="hero">
        <div class="hero-inner">
            <div class="registration">
                <h1>Xoş Gəlmisiniz!</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis laudantium consequuntur odit aliquam excepturi, quibusdam porro dolore ipsam alias nemo.</p>
                <a href="#" id="registr">Qeydiyyat</a>
            </div>
            <div class="hero-img">
                <img src="{{asset('front/')}}/resources/img/homeimage.png" alt="">
            </div>
        </div>
    </div>
    <div id="studyabroad" style="background: url('{{asset('front/')}}resources/img/bg.jpg') center/covrer;" class="education-container" >
        <div class="education">
            <div class="text-blue">
                <h1>Xaricdə Təhsil</h1>
                <p>Xaricdə təhsil almaq istəyən tələbələr üçün xüsusi yaradılmış xidmət </p>
            </div>
            <div class="icons-container" >
                <div class="icons">
                    <img id="tr" src="" alt="">
                    <p>Bakalavr</p>
                </div>
                <div class="icons">
                    <img src="" alt="">
                    <p>Magistr</p>
                </div>
                <div class="icons">
                    <img src="" alt="">
                    <p>PhD</p>
                </div>
                <div class="icons">
                    <img src="" alt="">
                    <p>Foundation</p>
                </div>
                <div class="icons">
                    <img src="" alt="">
                    <p>Studienkolleg</p>
                </div>
                <div class="icons">
                    <img src="" alt="">
                    <p>Teqaud </br>Proqramlari</p>
                </div>
            </div>
        </div>
    </div>
    <div id="cities" style="background: url({{asset('front/')}}/resources/img/xaricde.tehsil.back-min.jpg) center/cover; background-repeat: no-repeat;" class="country-container">
        <div class="country">
            <div class="text-white">
                <h1>Ölkələr</h1>
                <p>Xaricdə təhsil almaq istəyən tələbələr üçün xüsusi yaradılmış xidmət <p>
            </div>
            <div class="icons1-container" >
                <div class="icons1" id="america">
                    <p class="countryp1">ABŞ</p>
                    <p class="countryp2">Uno completo assistance</p>
                </div>
                <div class="icons1" id="canada">
                    <p class="countryp1">KANADA</p>
                    <p class="countryp2">Uno completo assistance</p>
                </div>
                <div class="icons1" id="england">
                    <p class="countryp1">İNGİLTƏRƏ</p>
                    <p class="countryp2" >Uno completo assistance</p>
                </div>
                <div class="icons1" id="italy">
                    <p class="countryp1">İTALİYA</p>
                    <p class="countryp2" >Uno completo assistance</p>
                </div>
                <div class="icons1" id="poland">
                    <p class="countryp1">POLŞA</p>
                    <p class="countryp2" >Uno completo assistance</p>
                </div>
                <div class="icons1" id="germany">
                    <p class="countryp1">ALMANİYA</p>
                    <p class="countryp2" >Uno completo assistance</p>
                </div>
                <div class="icons1" id="belgium">
                    <p class="countryp1">BELÇİKA</p>
                    <p class="countryp2" >Uno completo assistance</p>
                </div>
                <div class="icons1" id="hungary">
                    <p class="countryp1">MACARISTAN </p>
                    <p class="countryp2" >Uno completo assistance</p>
                </div>
                <div id="arrow0">
                    <img src="{{asset('front/')}}/resources/img/kecid.mavi.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="services" class="education1-container">
        <div class="education1">
            <div class="text-blue">
                <h1>Xidmətlərimiz</h1>
                <p>Xaricdə təhsil almaq istəyən tələbələr üçün xüsusi yaradılmış xidmət </p>
            </div>
            <div class="icons-container" >
                <div class="icons">
                    <img src="" alt="">
                    <p class="p3">Ödənişsiz Konsultasiya</p>
                </div>
                <div class="icons">
                    <img src="" alt="">
                    <p class="p3">Universitetlərə Müraciət</p>
                </div>
                <div class="icons">
                    <img src="" alt="">
                    <p class="p3">Təqaüd proqramları</p>
                </div>
                <div class="icons">
                    <img src="" alt="">
                    <p class="p3">Motivasiya Məktubu</p>
                </div>
                <div class="icons">
                    <img src="" alt="">
                    <p class="p3">CV Hazırlanması</p>
                </div>
                <div class="icons">
                    <img src="" alt="">
                    <p class="p3">Sənədləşmə</p>
                </div>
                <div class="icons">
                    <img src="" alt="">
                    <p class="p3">Viza Dəstəyi</p>
                </div>
                <div class="icons">
                    <img src="" alt="">
                    <p class="p3">Qalma yerinin Tapılması</p>
                </div>
            </div>
        </div>
    </div>
    <div id="blogs" class="blog-container">
        <div class="blog" >
            <div class="text-white">
                <h1>Blog</h1>
                <p>Xaricdə təhsil almaq istəyən tələbələr üçün xüsusi yaradılmış xidmət <p>
            </div>
            <div class="carousel">
                <div class="card1" data-tilt>
                    <img class="photo1" src="" alt="" />
                    <img class="photo2" src="" alt="" />
                    <div id="info">
                        <h1 class="infoh1">Nigar Ələkbərli</h1>
                        <hr />
                        <h1 class="infoh2">Yeni Limanlar</h1>
                        <p>Ümumiyyətlə evdən uzaq olmağımız və yeni insanlar</p>
                    </div>
                </div>
                <div class="card1" data-tilt>
                    <img class="photo1" src="" alt="" />
                    <img class="photo2" src="" alt="" />
                    <div id="info">
                        <h1 class="infoh1">Nigar Ələkbərli</h1>
                        <hr />
                        <h1 class="infoh2">Yeni Limanlar</h1>
                        <p>Ümumiyyətlə evdən uzaq olmağımız və yeni insanlar</p>
                    </div>
                </div>
                <div class="card1" data-tilt>
                    <img class="photo1" src="" alt="" />
                    <img class="photo2" src="" alt="" />
                    <div id="info">
                        <h1 class="infoh1">Nigar Ələkbərli</h1>
                        <hr />
                        <h1 class="infoh2">Yeni Limanlar</h1>
                        <p>Ümumiyyətlə evdən uzaq olmağımız və yeni insanlar</p>
                    </div>
                </div>
                <div id="arrow">
                    <img  src="" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="diamonds" class="success-container">
        <div class="success">
            <div class="text-blue">
                <h1>Uğurlarımız</h1>
                <p>Xaricdə təhsil almaq istəyən tələbələr üçün xüsusi yaradılmış xidmət <p>
            </div>
            <div class="success-0">
                <div class="success1">
                    <div id="profile"><img  src=""alt=""></div>
                    <div class="box">
                        <img src="" alt="">
                        <p>Cinara Melikzade</p>
                    </div>
                    <hr/>
                    <div class="box">
                        <img src="" alt="">
                        <p>University of Lodz</p>
                    </div>
                    <hr/>
                    <div class="box">
                        <img src="" alt="">
                        <p>Business Adminstration</p>
                    </div>
                    <hr/>
                    <div class="box">
                        <img src="" alt="">
                        <p>IELTS-6.5</p>
                    </div>
                </div>
                <div class="success1">
                    <div id="profile"><img  src="" alt=""></div>
                    <div class="box">
                        <img src="" alt="">
                        <p>Cinara Melikzade</p>
                    </div>
                    <hr/>
                    <div class="box">
                        <img src="" alt="">
                        <p>University of Lodz</p>
                    </div>
                    <hr/>
                    <div class="box">
                        <img src="" alt="">
                        <p>Business Adminstration</p>
                    </div>
                    <hr/>
                    <div class="box">
                        <img src="" alt="">
                        <p>IELTS-6.5</p>
                    </div>
                </div>
                <div class="success1">
                    <div id="profile"><img  src="" alt=""></div>
                    <div class="box">
                        <img src="" alt="">
                        <p>Cinara Melikzade</p>
                    </div>
                    <hr/>
                    <div class="box">
                        <img src="" alt="">
                        <p>University of Lodz</p>
                    </div>
                    <hr/>
                    <div class="box">
                        <img src="" alt="">
                        <p>Business Adminstration</p>
                    </div>
                    <hr/>
                    <div class="box">
                        <img src="" alt="">
                        <p>IELTS-6.5</p>
                    </div>
                </div>
                <div id="arrow">
                    <a href="sucsess.htm"><img src="" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div id="languagecourse" class="language-container">
        <div class="language">
            <div class="text-white">
                <h1>Dil Kursları</h1>
                <p>Xaricdə təhsil almaq istəyən tələbələr üçün xüsusi yaradılmış xidmət <p>
            </div>
            <div class="lang-flex">
                <div class="language-photo" id="lang1">
                    <div id="whitebox">
                        <p class="p2">Yay Məktəbləri</p>
                    </div>
                </div>
                <div class="language-photo" id="lang2">
                    <div id="whitebox">
                        <p class="p2">Amerikada Dil Kursları</p>
                    </div>
                </div>
                <div class="language-photo" id="lang3">
                    <div id="whitebox">
                        <p class="p2">Kanadada Dil Kursları</p>
                    </div>
                </div>
                <div class="language-photo" id="lang4">
                    <div id="8whitebox">
                        <p class="p2">İngiltərədə Dil Kursları</p>
                    </div>
                </div>
                <div class="language-photo" id="lang5">
                    <div id="whitebox">
                        <p class="p2"s>Almaniyada Dil Kursları</p>
                    </div>
                </div>
                <div class="language-photo" id="lang6">
                    <div id="whitebox">
                        <p class="p2">Avropada  Dil Kursları</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div>

</div>
@endsection


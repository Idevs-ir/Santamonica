<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Santa monica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('web/style.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/jquery.fancybox.css')}}">
</head>
<body>
<header>
    <div class="bg-header">
        <div class="bg-shadow">
            <div class="top-header flex justify-content-between align-items-end">
                <div class="container flex justify-content-between">
                    <div class="date flex">
                        <i class="fa fa-clock-o"></i>
                    <span>{{ $setting->workat }}</span>
                    </div>
                    <div class="phone flex">
                        <i class="fa fa-phone"></i>
                        <span>{{ $setting->phone }} </span>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"/>
                </svg>
            </div>
            <div class="container flex flex-column justify-content-center align-items-center">
                <button class="menu-bars" type="button"><i class="fa fa-bars"></i></button>
                <ul class="menu flex">
                    <li @if(Request::route()->getName()=='web')) class="current-menu-item" @endif><a href="{{ route('web') }}">HOME</a></li>
                    <li @if(Request::route()->getName()=='videos')) class="current-menu-item" @endif><a href="{{ route('videos') }}">VIDEOS</a></li>
                    <li @if(Request::route()->getName()=='gallery')) class="current-menu-item" @endif><a href="{{ route('gallery') }}">PHOTOS</a></li>
                    <li @if(Request::route()->getName()=='contact')) class="current-menu-item" @endif><a href="{{ route('contact') }}">CONTACT</a></li>
                    <li @if(Request::route()->getName()=='about')) class="current-menu-item" @endif><a href="{{ route('about') }}">ABOUT US</a></li>
                    <li @if(Request::route()->getName()=='academy')) class="current-menu-item" @endif><a href="{{ route('academy') }}">ACADEMY</a></li>
                    <li @if(Request::route()->getName()=='team')) class="current-menu-item" @endif><a href="{{ route('team') }}">OUR TEAM</a></li>
                </ul>
                @yield('main')
            </div>
            <a class="logo flex justify-content-center align-items-center" href="{{ route('about') }}">
                <img src="{{asset($setting->logo)}}">
            </a>
            <div class="bottom-header text-center flex justify-content-between align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"/>
                </svg>
                <div class="container flex justify-content-between ">
                    <span class="copy-right">© made with <i class="fa fa-heart"></i> by <a href="#">imassi.ir</a> , All Rights Reserved </span>
                    <ul class="social flex">
                        <li><a href="{{ $setting->twitter }}"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{ $setting->instagram }}"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="{{ $setting->whatsapp }}"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a href="{{ $setting->telegram }}"><i class="fa fa-telegram"></i></a></li>
                        <li><a href="{{ $setting->facebook }}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{ $setting->email }}"><i class="fa fa-envelope-o"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="extra">
            <img src="{{asset('web/images/extra/1.png')}}" class="active animated fadeIn">
            <img src="{{asset('web/images/extra/2.png')}}" class="animated fadeIn">
            <img src="{{asset('web/images/extra/3.png')}}" class="animated fadeIn">
        </div>
    </div>
</header>
<script src="{{asset('web/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('web/js/slick.min.js')}}"></script>
<script src="{{asset('web/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('web/js/inc.js')}}"></script>

</body>
</html>
@extends('web.master')

@section('main')
<div class="home-text">
        <h1>Welcome to <a href="{{ route('home') }}">{{$setting->title}}</a>
            <span class="animated flash infinite slow">&verbar;</span>
        </h1>
    </div>
    <a class="more-about hvr-ripple-out" href="{{ route('about') }}">About us</a>
@endsection
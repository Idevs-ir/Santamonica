@extends('web.master')

@section('main')

<div class="our-team" id="our-team">
    @foreach ($items as $item)
    <div class="team">
            <img src="{{asset($item->image)}}">
            <div class="info-team flex flex-column align-items-center">
                <h3>{{$item->title}}</h3>
                <ul class="flex">
                        <li><a href="{{ $item->instagram }}"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="{{ $item->whatsapp }}"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a href="{{ $item->telegram }}"><i class="fa fa-telegram"></i></a></li>
                        <li><a href="{{ $item->facebook }}"><i class="fa fa-facebook"></i></a></li>
                </ul>
            </div>
            <div class="logo-team">
                <img src="{{asset($setting->logo)}}">
            </div>
        </div>
    @endforeach
        
    </div>
@endsection
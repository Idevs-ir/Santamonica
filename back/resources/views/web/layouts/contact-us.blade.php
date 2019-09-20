@extends('web.master')

@section('main')
<div class="contact">
        <ul class="contact-us">
            <li class="flex align-items-center">
            <img src="{{asset('web/images/placeholder.svg')}}" alt="">
                <span>{{$setting->address}}</span>
            </li>
            <li class="flex align-items-center">
                <img src="{{asset('web/images/old-typical-phone.svg')}}" alt="">
                <span>{{$setting->phone}} </span>
            </li>
            <li class="flex align-items-center">
                <img src="{{asset('web/images/smartphone-call.svg')}}" alt="">
                <span>{{$setting->whatsapp}}  </span>
            </li>
            <li class="flex align-items-center">
                <img src="{{asset('web/images/envelope.svg')}}" alt="">
                <span>{{$setting->email}} </span>
            </li>
        </ul>
        <ul class="social flex">
                <li><a href="{{ $setting->twitter }}"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{{ $setting->instagram }}"><i class="fa fa-instagram"></i></a></li>
                <li><a href="{{ $setting->whatsapp }}"><i class="fa fa-whatsapp"></i></a></li>
                <li><a href="{{ $setting->telegram }}"><i class="fa fa-telegram"></i></a></li>
                <li><a href="{{ $setting->facebook }}"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{ $setting->email }}"><i class="fa fa-envelope-o"></i></a></li>
        </ul>
    </div>
@endsection
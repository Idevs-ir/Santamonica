@extends('web.master')

@section('main')
<div class="about-us grid">
        <div class="about-text flex flex-column">
            <h3>{{$setting->title}} is the best office for tatto</h3>
            <p>{{$setting->about}}</p>
            <div class="santa">
            <img src="{{asset('web/images/signature.png')}}">
            </div>
        </div>
        <div class="assist text-center flex flex-column justify-content-between">
            <h5>Companies that are working with us</h5>
            <div class="assist-slider foot2" id="assist-slider">
                @foreach ($items as $item)
                <div class="assist-item">
                        <img src="{{asset($item->image)}}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
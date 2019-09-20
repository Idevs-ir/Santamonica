@extends('web.master')

@section('main')
<div class="academy" id="show">
    @foreach ($items as $item)
    <div class="academy-item">
            <video controls poster="{{asset($item->poster)}}">
                <source src="{{asset($item->video)}}" type="video/mp4">
            </video>
            <div class="text-academy flex flex-column">
                <h6>{{$item->title}}</h6>
                <P>{{$item->description}}</P>
            </div>
        </div>   
    @endforeach
    </div>
@endsection
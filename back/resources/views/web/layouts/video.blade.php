@extends('web.master')

@section('main')
<div class="videos" id="show">
    @foreach ($items as $item)
    <div class="vid-item">
            <video poster="{{asset($item->poster)}}" controls>
                <source src="{{asset($item->video)}}" type="video/mp4">
            </video>
            <a class="circle fancybox play-btn" >
                <i class="fa fa-play" aria-hidden="true"></i>
            </a>
        </div>
    @endforeach
        
    </div>
@endsection
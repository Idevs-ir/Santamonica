@extends('web.master')

@section('main')
<div class="gallery-slider" id="gallery-slider">
    @for($i=0; $i < count($items)/3 +1; $i++)
    <div class="hold-gallery">
            <div class="gallery grid">
                @for($j=$i*3; $j<$i*3+3; $j++)
                @php
                    if(!isset($items[$j]))
                    {
                        break;
                    }
                @endphp
                <a class="pic fancybox-content fancybox-is-open fancybox-is-zoomable fancybox-can-zoomIn"
                   data-fancybox="images" href="{{asset($items[$j]->image)}}">
                    <img class="fancybox-image" src="{{asset($items[$j]->image)}}">
                </a>
                @endfor
            </div>
        </div>
    @endfor
    </div>
@endsection
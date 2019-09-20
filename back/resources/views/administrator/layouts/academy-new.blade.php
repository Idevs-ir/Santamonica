@extends('administrator.master')

@section('main')
<div class="box">
        <div class="video">
          <p>کاور فیلم</p>
          <div id='video-image' class="preview">
          </div>
        </div>
      </div>
      <div class="box">
        <form class="form" action="@if($type=='new'){{ route('admin-academy-add') }}@else{{ route('admin-academy-update' , ['academy'=> $item->id]) }}@endif" method="post" enctype="multipart/form-data">
            @csrf
          <div class="form-controll">
          <input type="text" name="title" placeholder="عنوان آکادمی ..." value="@if(isset($item)){{ $item->title }}@else{{ old('title') }}@endif" required>
          </div>
          <div class="form-controll">
            <div class="form-controll-both">
              <div class="input-file-container">
                <input class="input-file" id="cover" type="file" name="poster" accept="image/*">
                <label tabindex="0" for="cover" class="input-file-trigger">انتخاب کاور فیلم</label>
              </div>
              <div class="input-file-container">
                <input class="input-file" id="file" type="file" name="video" accept="video/*" >
                <label tabindex="0" for="file" class="input-file-trigger">انتخاب فیلم</label>
              </div>
            </div>
            <video id='video-prev' src="@if(isset($item)){{ asset($item->video)}}@endif" controls poster="@if(isset($item)){{ asset($item->poster)}}@else{{ asset('img/preview.svg') }}@endif"></video>
          </div>
          <div class="form-controll">
            <textarea name="description" rows="10" placeholder="متن توضیحات ..." required>@if(isset($item)){{ $item->description }}@else{{ old('description')}}@endif</textarea>
          </div>
          <div class="form-controll">
            <input type="submit" name="submit" value="ثبت اطلاعات">
          </div>
        </form>
      </div>
@endsection
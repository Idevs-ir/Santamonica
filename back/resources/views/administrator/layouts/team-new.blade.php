@extends('administrator.master')

@section('main')
<div class="box">
        <div class="video">
          <p>تصویر</p>
          <div id='video-image' class="preview">
          </div>
        </div>
      </div>
      <div class="box">
        <form class="form" action="@if($type=='new'){{ route('admin-team-add') }}@else{{ route('admin-team-update' , ['team'=> $item->id]) }}@endif" method="post" enctype="multipart/form-data">
            @csrf
          <div class="form-controll">
          <input type="text" name="title" placeholder="عنوان  ..." value="@if(isset($item)){{ $item->title }}@else{{ old('title') }}@endif" required>
          </div>
          <div class="form-controll">
            <div class="form-controll-both">
              <div class="input-file-container">
                <input class="input-file" id="cover" type="file" name="image" accept="image/*">
                <label tabindex="0" for="cover" class="input-file-trigger">انتخاب تصویر</label>
              </div>
            </div>
          </div>
          <div class="form-controll">
          <input type="text" name="facebook" placeholder="آدرس فیسبوک  ..." value="@if(isset($item)){{ $item->title }}@else{{ old('title') }}@endif" required>
          </div>
          <div class="form-controll">
          <input type="text" name="whatsapp" placeholder="آدرس واتساپ  ..." value="@if(isset($item)){{ $item->title }}@else{{ old('title') }}@endif" required>
          </div>
          <div class="form-controll">
          <input type="text" name="telegram" placeholder="آدرس تلگرام  ..." value="@if(isset($item)){{ $item->title }}@else{{ old('title') }}@endif" required>
          </div>
          <div class="form-controll">
          <input type="text" name="instagram" placeholder="آدرس اینستاگرام  ..." value="@if(isset($item)){{ $item->title }}@else{{ old('title') }}@endif" required>
          </div>

          <div class="form-controll">
            <input type="submit" name="submit" value="ثبت اطلاعات">
          </div>
        </form>
      </div>
@endsection
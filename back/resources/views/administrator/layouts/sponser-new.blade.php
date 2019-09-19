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
        <form class="form" action="@if($type=='new'){{ route('admin-sponser-add') }}@else{{ route('admin-sponser-update' , ['sponser'=> $item->id]) }}@endif" method="post" enctype="multipart/form-data">
            @csrf
          <div class="form-controll">
            <div class="form-controll-both">
              <div class="input-file-container">
                <input class="input-file" id="cover" type="file" name="image" accept="image/*">
                <label tabindex="0" for="cover" class="input-file-trigger">انتخاب تصویر همکار</label>
              </div>
            </div>
          </div>
          <div class="form-controll">
            <input type="submit" name="submit" value="ثبت اطلاعات">
          </div>
        </form>
      </div>
@endsection
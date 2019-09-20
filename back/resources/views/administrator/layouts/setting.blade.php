@extends('administrator.master')

@section('main')
<div class="box">
        <div class="video">
          <p>تصویر لوگو</p>
          <div id='video-image' class="preview">
          <img src='{{asset($item->logo)}}' alt='preview' >
          </div>
        </div>
      </div>
      <div class="box">
        <form class="form" action="{{ route('admin-settings-update') }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="form-controll">
          <input type="text" name="title" placeholder="عنوان سایت ..." value="@if(isset($item)){{ $item->title }} @else{{ old('title') }}@endif" required>
          </div>
          <div class="form-controll">
            <input type="text" name="address" placeholder="آدرس ..." value="@if(isset($item)){{ $item->address }} @else{{ old('address') }}@endif">
            </div>
          <div class="form-controll">
            <div class="form-controll-both">
              <div class="input-file-container">
                <input class="input-file" id="cover" type="file" name="logo" accept="image/*" @if(!isset($item)) required @endif>
                <label tabindex="0" for="cover" class="input-file-trigger">انتخاب لوگو</label>
              </div>
            </div>
          </div>
          <div class="form-controll">
          <input type="text" name="workat" placeholder="ساعت کاری ..." value="@if(isset($item)){{ $item->workat }}@else{{ old('workat') }}@endif">
          </div>
          <div class="form-controll">
          <input type="text" name="phone" placeholder="شماره تماس ..." value="@if(isset($item)){{ $item->phone }}@else{{ old('phone') }}@endif">
          </div>
          <div class="form-controll">
          <input type="text" name="email" placeholder="ایمیل ..." value="@if(isset($item)){{ $item->email }}@else{{ old('email') }}@endif">
          </div>
          <div class="form-controll">
          <input type="text" name="whatsapp" placeholder="لینک واتساپ ..." value="@if(isset($item)){{ $item->whatsapp }}@else{{ old('whatsapp') }}@endif">
          </div>
          <div class="form-controll">
          <input type="text" name="telegram" placeholder="لینک تلگرام ..." value="@if(isset($item)){{ $item->telegram }}@else{{ old('telegram') }}@endif">
          </div>
          <div class="form-controll">
          <input type="text" name="twitter" placeholder="لینک توییتر ..." value="@if(isset($item)){{ $item->twitter }}@else{{ old('twitter') }}@endif">
          </div>
          <div class="form-controll">
          <input type="text" name="facebook" placeholder="لینک فیسبوک ..." value="@if(isset($item)){{ $item->facebook }}@else{{ old('facebook') }}@endif">
          </div>
          <div class="form-controll">
            <input type="submit" name="submit" value="ثبت اطلاعات">
          </div>
        </form>
      </div>
@endsection
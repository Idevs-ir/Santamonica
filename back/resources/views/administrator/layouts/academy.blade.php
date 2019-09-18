@extends('administrator.master')

@section('main')
<div class="full-box">
        <div class="tool-box">
        </div>
        @foreach ($posts as $item)
        <div class="content-box">
          <img src="{{ asset($item->poster) }}" alt="preview">
          <div class="title-box" >
          <p style="font-weight:bold; color:#a5a5a5;">{{ $item->title }}</p>
            <p>{{ substr($item->description , 0 , 30)." ..." }}</p>
          </div>
          <div class="button-box">
          <button type="button" class='view-btn' onclick="modal('content'); showItem('{{ route('admin-academy-show' , [ 'academy' => $item->id ]) }}')">نمایش</button>
            <button type="button" class='edit-btn' onclick="window.location = '{{ route('admin-academy-edit' , ['academy'=>$item->id])}}'">ویرایش</button>
            <button type="button" class='delete-btn' onclick="window.location = '{{ route('admin-academy-delete' , ['academy'=>$item->id])}}'">حذف</button>
          </div>
        </div>
        @endforeach
      </div>

@endsection
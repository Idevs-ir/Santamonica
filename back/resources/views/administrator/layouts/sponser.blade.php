@extends('administrator.master')

@section('main')
<div class="full-box">
        <div class="tool-box">
        </div>
        @foreach ($posts as $item)
        <div class="content-box">
          <img src="{{ asset($item->image) }}" alt="preview">
          <div class="title-box" >
          </div>
          <div class="button-box">
          <button type="button" class='view-btn' onclick="modal('content'); showItem('{{ route('admin-sponser-show' , [ 'sponser' => $item->id ]) }}')">نمایش</button>
            <button type="button" class='edit-btn' onclick="window.location = '{{ route('admin-sponser-edit' , ['sponser'=>$item->id])}}'">ویرایش</button>
            <button type="button" class='delete-btn' onclick="window.location = '{{ route('admin-sponser-delete' , ['sponser'=>$item->id])}}'">حذف</button>
          </div>
        </div>
        @endforeach
      </div>

@endsection
@extends('administrator.master')

@section('main')
<div class="full-box">
        <div class="tool-box">
        </div>
        @foreach ($posts as $item)
        <div class="content-box">
          <img src="{{ asset($item->image) }}" alt="preview">
          <div class="title-box" >
          <p style="font-weight:bold; color:#a5a5a5;">{{ $item->title }}</p>
          </div>
          <div class="button-box">
          <button type="button" class='view-btn' onclick="modal('content'); showItem('{{ route('admin-team-show' , [ 'team' => $item->id ]) }}')">نمایش</button>
            <button type="button" class='edit-btn' onclick="window.location = '{{ route('admin-team-edit' , ['team'=>$item->id])}}'">ویرایش</button>
            <button type="button" class='delete-btn' onclick="window.location = '{{ route('admin-team-delete' , ['team'=>$item->id])}}'">حذف</button>
          </div>
        </div>
        @endforeach
      </div>

@endsection
@extends('layouts.layout')


@section('content')
<div class="row">
  <div class="col-3"></div>
  <div class="col-6">
    <div class="card">
    <img src="{{$post->content_img}}" class="card-img-top post_img_top" alt="...">
    <div class="card-body">
        <p class="card-text">{{$post->content}}</p>
    </div>
    <div class="card-footer post_footer">
      <img src="{{$post->author_img}}" class="card-img-bottom post_img_bottom" alt="...">
      <div class="text-center">
        <p>{{$post->author}}</p>
        <small>del: {{$post->created_at}}</small>
      </div>
    </div>
  </div>
  </div>
</div>
  
@endsection

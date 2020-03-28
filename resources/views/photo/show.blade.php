@extends('layouts.layout')


@section('content')
<div class="row">
  <div class="col-3"></div>
  <div class="col-6">
    <div class="card">
    <img src="{{$photo->photo_path}}" class="card-img-top post_img_top" alt="...">
    <div class="card-footer text-center">
        id: {{$photo->id}}<br>
        scattata da : <a href="{{route('users.show', $photo->user)}}">{{$photo->user->name}}</a><br>
        contatto : {{$photo->user->email}}<br>
    </div>
  </div>
  </div>

</div>
  
@endsection

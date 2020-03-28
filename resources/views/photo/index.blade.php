@extends('layouts.layout')


@section('content')

    @foreach ($photos as $photo)
    <div class="card">
      <img src="{{$photo->photo_path}}" class="{{-- card-img-top --}} img-thumbnail" alt="...">
      <div class="card-body">
        <h5 class="card-title"><a href="{{route('users.show', $photo->user)}}">{{$photo->user->name}}</a></h5>
        <p class="card-text">{{$photo->user->email}}</p>
        <p class="card-text"><small class="text-muted">Last updated {{$photo->updated_at}}</small></p>
      </div>
      <div class="card-footer text-center ">
        <a href="{{route('photos.show', $photo)}}" class="btn btn-primary">Show</a>
      </div>
    </div>
    <br>
    @endforeach


  
@endsection

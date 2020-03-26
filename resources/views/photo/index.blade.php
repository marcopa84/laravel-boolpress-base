@extends('layouts.layout')


@section('content')
  {{-- <div class="card-group"> --}}
    @foreach ($photos as $photo)
    <div class="card">
      <img src="{{$photo->photo_path}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$photo->user->name}}</h5>
        <p class="card-text">{{$photo->user->email}}</p>
        <p class="card-text"><small class="text-muted">Last updated {{$photo->updated_at}}</small></p>
      </div>
      <div class="card-footer">
        <a href="{{route('photo.show', $photo)}}" class="btn btn-primary">Show</a>
      </div>
    </div>
    <br>
    @endforeach
  {{-- </div> --}}

@endsection

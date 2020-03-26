@extends('layouts.layout')


@section('content')
    <div class="row justify-content-center">
      <a class="btn btn-primary" href="{{route('posts.create')}}">Aggiungi un post</a>
    </div>


    <div class="row">
      @foreach ($posts as $post)
          <div class="col mb-4">
            <div class="card">
              <img src="{{$post->content_img}}" class="card-img-top post_img_top" alt="...">
              <div class="card-body">
                <p class="card-text">{{$post->content}}</p>
              </div>
              <div class="card-footer post_footer">
                <img src="{{$post->author_img}}" class="card-img-bottom post_img_bottom" alt="...">
                <div class="commands">
                  <a href="{{route('posts.show', $post)}}" class="btn btn-primary">Show</a>
                  <a href="{{route('posts.edit', $post)}}" class="btn btn-success">Update</a>
                  <form action="{{route('posts.destroy', $post)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </div>
                <div class="text-center">
                  <p>{{$post->author}}</p>
                  <small>del: {{$post->created_at}}</small>
                </div>
              </div>
            </div>
          </div>
      @endforeach
    </div>

@endsection

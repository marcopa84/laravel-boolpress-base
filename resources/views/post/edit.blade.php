@extends('layouts.layout')


@section('content')
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
    <div class="col-6">
        <form action="{{route('posts.update', $post)}}" method="post">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="content_img">Path immagine profilo:</label>
          <input type="text" class="form-control" name="content_img" value="{{$post->content_img}}">
        </div>
        <div class="form-group">
          <label for="content">Testo:</label>
          <textarea name="content" rows="4" cols="80">{{$post->content}}</textarea>
        </div>
        <div class="form-group">
          <label for="author">Autore:</label>
          <input type="text" class="form-control" name="author" value="{{$post->author}}">
        </div>
        <div class="form-group">
          <label for="author_img">Path immagine profilo:</label>
          <input type="text" class="form-control" name="author_img" value="{{$post->author_img}}" >
        </div>
        <button type="submit" class="btn btn-danger ">Salva</button>
        </form>
    </div>
@endsection

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
        <form action="{{route('posts.store')}}" method="post">
        @method('POST')
        @csrf
        <div class="form-group">
          <label for="content_img">Path immagine profilo:</label>
          <input type="text" class="form-control" name="content_img" placeholder="Inserisci il path dell'immagine dell'articolo">
        </div>
        <div class="form-group">
          <label for="content">Testo:</label>
          <textarea name="content" rows="4" cols="80"></textarea>
        </div>
        <div class="form-group">
          <label for="author">Autore:</label>
          <input type="text" class="form-control" name="author" placeholder="Inserisci l'autore">
        </div>
        <div class="form-group">
          <label for="author_img">Path immagine profilo:</label>
          <input type="text" class="form-control" name="author_img" placeholder="Inserisci il path dell'immagine profilo">
        </div>
        <button type="submit" class="btn btn-danger ">Salva</button>
        </form>
    </div>
@endsection

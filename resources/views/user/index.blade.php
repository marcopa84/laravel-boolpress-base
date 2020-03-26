@extends('layouts.layout')


@section('content')
<ol>
  @foreach ($users as $user)
    @php
        $photos = $user->photo;
    @endphp
    {{-- @dd($photos); --}}
      <li>
        <ul>
        <li>NOME: {{$user->name}}</li>
        <li>EMAIL: {{$user->email}}</li>
        <li>PASSWORD: {{$user->password}}</li>
        <li>
          <div class="command">
            <a href="">Show</a>
              <a href="" class="btn btn-primary">Photo</a>
              {{-- <form action="{{route('photo.photo_user', $photos)}}" method="post">
              @csrf
              @method('POST')
              <button type="submit">FOTO</button>
              </form> --}}
          </div>
        </li>  
        </ul>
      </li>
  @endforeach
  </ol>
@endsection

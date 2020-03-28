@extends('layouts.layout')


@section('content')
<ol>
  @foreach ($users as $user)
      <li>
        <ul>
        <li>NOME: {{$user->name}}</li>
        <li>EMAIL: {{$user->email}}</li>
        <li>PASSWORD: {{$user->password}}</li>
        <li>
          <div class="command">
            <a href="{{route('users.show', $user)}}" class="btn btn-primary">Show</a>
            <a href="{{route('photo_byuser', $user->id)}}" class="btn btn-danger">Photos</a>
          </div>
        </li>  
        </ul>
      </li>
  @endforeach
  </ol>
@endsection

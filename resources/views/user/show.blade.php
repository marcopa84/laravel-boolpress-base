@extends('layouts.layout')


@section('content')

<div class="row">
  <div class="col-3"></div>
  <div class="col-6">
  <ul>
  <li>NOME: {{$user->name}}</li>
  <li>EMAIL: {{$user->email}}</li>
  <li>PASSWORD: {{$user->password}}</li>
  </ul>
  </div>
</div>

@endsection

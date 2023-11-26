@extends('layouts/main')

@section('container')
  <h1>About page</h1>
  <h2>{{ $name }}</h2>
  <p>{{ $email }}</p>
  <img src="img/{{ $picture }}" alt="{{ $picture }}" width="200" class="img-thumbnail rounded-circle">
@endsection('container')
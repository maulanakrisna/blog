@extends('layouts/main')

@section('container')
  @foreach($categories as $category)
    <article class="mb-5 border-bottom">
      <a href="/category/{{ $category->slug }}" class="text-decoration-none"><h2>{{ $category->name }}</h2></a>
    </article>
  @endforeach
@endsection('container')

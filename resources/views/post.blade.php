@extends('layouts/main')

@section('container')
  <article>
    <h2>{{ $post->title }}</h2>
    <h5>by Maulana in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
    {!! $post->body !!}
  </article>
  <a href="/blog">back to blog</a>
@endsection()


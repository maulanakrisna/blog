@extends('layouts/main')

@section('container')
  <article>
    <h2>{{ $post->title }}</h2>
    <h5>by <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
    {!! $post->body !!}
  </article>
  <a href="/blog" class="d-block mt-3 text-decoration-none">back to posts</a>
@endsection('container')


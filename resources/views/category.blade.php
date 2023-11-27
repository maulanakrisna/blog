@extends('layouts/main')

@section('container')
  <article>
    <h2>Category : {{ $category }}</h2>
    @foreach ($posts as $post)
        <article>
            <h5><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
  </article>
  <a href="/blog" class="text-decoration-none">back to posts</a>
@endsection('container')


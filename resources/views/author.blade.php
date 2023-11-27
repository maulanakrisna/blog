@extends('layouts/main')

@section('container')
    <h2>Author : {{ $title }}</h2>
    @foreach ($posts as $post)
        <article class="mt-3 border-bottom">
            <h5>by <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
            <p>{{ $post->excerpt }}</p>
            <p><a href="/post/{{ $post->slug }}" class="text-decoration-none">read more..</a></p>
        </article>
    @endforeach
@endsection('container')


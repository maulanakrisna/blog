@extends('layouts/main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <h5>by <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
                    in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top pt-3" alt="{{ $post->title }}">
                <article class="my-3 pt-3">
                    {!! $post->body !!}
                </article>
                <a href="/posts" class="btn btn-primary mb-5">back to posts</a>
            </div>
        </div>
    </div>

@endsection('container')


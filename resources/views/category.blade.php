@extends('layouts/main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        @if ($posts->count())
        <div class="card mb-3">
            <a href="/post/{{ $posts[0]->slug }}">
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->title }}">
            </a>
            <div class="card-body text-center">
                <h5 class="card-title">
                    <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                        {{ $posts[0]->title }}
                    </a>
                </h5>
                <p class="card-text"><small class="text-body-secondary">by <a href="/author/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/category/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">read more..</a>
            </div>
        </div>
        @else
            <p>no post found.</p>
        @endif
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach($posts->skip(1) as $post)
            <div class="col-md-4">
                <div class="card mb-3">
                    <a href="/category/{{ $post->category->slug }}">
                        <div class="position-absolute text-white text-decoration-none px-2 py-2" style="background-color: rgba(0,0,0,0.7)">
                        {{ $post->category->name }}</div></a>
                    <a href="/post/{{ $post->slug }}">
                        <img src="https://source.unsplash.com/400x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->title }}">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><a href="/post/{{ $post->slug }}" class="text-decoration-none text-dark">
                            {{ $post->title }}</a></h5>
                        <p class="card-text">
                            <small class="text-body-secondary">
                            by <a href="/author/{{ $post->author->username }}" class="text-decoration-none">
                            {{ $post->author->name }}</a>
                            {{ $post->created_at->diffForHumans() }}
                        </small>
                        </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/post/{{ $post->slug }}" class="btn btn-primary">read more..</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection('container')


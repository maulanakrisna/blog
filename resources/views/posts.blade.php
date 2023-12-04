@extends('layouts/main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/posts">
                <div class="input-group mb-3">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <input type="text" class="form-control" name="search" value="{{ request('search') }}" placeholder="Search .." >
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
</div>
@if ($posts->count())
<div class="container">
    <div class="row">
        <div class="col-md-12">

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
                <p class="card-text"><small class="text-body-secondary">
                    by <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a>
                    in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                    {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">read more..</a>
            </div>
        </div>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
    @foreach($posts->skip(1) as $post)
        <div class="col-md-4">
            <div class="card mb-3">
                <a href="/posts?category={{ $post->category->slug }}">
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
                        by <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
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
@else
<p class="text-center">no post found.</p>
@endif
<div class="d-flex justify-content-center">
        <div>{{ $posts->links() }}</div>
</div>
@endsection('container')

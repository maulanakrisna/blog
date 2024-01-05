@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2>{{ $post->title }}</h2>
            <h5 class="mt-3">
                <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i><span> Back to posts</span></a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pen"></i><span> Edit</span></a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash3"></i></button>
                </form>
            </h5>
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top pt-3" alt="{{ $post->title }}">
            @endif
            <article class="mt-3 pt-3">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>

@endsection

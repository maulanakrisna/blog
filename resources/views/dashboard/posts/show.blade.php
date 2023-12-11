@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2>{{ $post->title }}</h2>
            <h5 class="mt-3">
                <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i><span> Back to posts</span></a>
                <a href="" class="btn btn-warning"><i class="bi bi-pen"></i><span> Edit</span></a>
                <a href="" class="btn btn-danger"><i class="bi bi-trash3"></i><span> Delete</span></a>
            </h5>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top pt-3" alt="{{ $post->title }}">
            <article class="mt-3 pt-3">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>

@endsection

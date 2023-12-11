@extends('dashboard.layouts.main')

@section('container')
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Posts</h1>
        <p>{{ auth()->user()->name }}</p>
      </div>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                <td>
                    <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-success"><i class="bi bi-eye"></i></a>
                    <a href="" class="btn btn-warning"><i class="bi bi-pen"></i></a>
                    <a href="" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection

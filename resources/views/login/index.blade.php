@extends('layouts.main')

@section('container')
<div class="row justify-content-center"><div class="col-lg-6">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
<div class="d-flex align-items-center py-4">
<main class="form-signin w-100 m-auto">
  <form method="POST" action="/login">
    @csrf
    <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>

    <div class="form-floating">
      <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email')
          is-invalid
      @enderror" id="floatingInput" placeholder="name@example.com" required autofocus>
      <label for="floatingInput">Email address</label>
      @error('username')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
    @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>
    <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Login</button>
    <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
  </form>
</main>
</div>
</div></div>
@endsection('container')

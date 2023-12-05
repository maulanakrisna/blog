@extends('layouts.main')

@section('container')
<div class="row justify-content-center"><div class="col-lg-6">
<div class="d-flex align-items-center py-4">
<main class="form-signin w-100 m-auto">
  <form action="/register" method="POST">
    @csrf
    <h1 class="h3 mb-3 fw-normal text-center">Please register</h1>
    <div class="form-floating">
        <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name')
            is-invalid
        @enderror" id="floatingInput" placeholder="your name" required >
        <label for="floatingInput">Name</label>
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-floating">
        <input type="text" name="username" value="{{ old('username') }}" class="form-control @error('username')
            is-invalid
        @enderror" id="floatingInput" placeholder="username" required >
        <label for="floatingInput">Username</label>
        @error('username')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email')
          is-invalid
      @enderror" id="floatingInput" placeholder="name@example.com" required >
      <label for="floatingInput">Email address</label>
      @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control @error('password')
          is-invalid
      @enderror" id="floatingPassword" placeholder="Password" required >
      <label for="floatingPassword">Password</label>
      @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Register</button>
    <small class="d-block text-center mt-3">Already registered? <a href="/login">Login Now!</a></small>
  </form>
</main>
</div>
</div></div>
@endsection('container')

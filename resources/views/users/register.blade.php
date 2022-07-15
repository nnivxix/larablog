@extends('layouts.main')

@section('container')

<main class=" w-100 m-auto ">
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-md-4 col-lg-6">
      <h1 class="h3 mb-3 fw-normal">Register An Account</h1>
      <form action="/register" method="POST">
        @csrf
        <div class="form-floating">
          <input type="text" class="form-control @error('username')
            is-invalid
          @enderror" id="username" name="username"
          placeholder="name@example.com" value="{{ old('username') }}" autofocus>
          <label for="username">Username</label>
          @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" class="form-control @error('name')
            is-invalid
          @enderror " id="name" name="name" placeholder="name@example.com" value="{{ old('name') }}">
          <label for="name">Name</label>
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" class="form-control @error('email')
            is-invalid
          @enderror" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control @error('password')
            is-invalid
          @enderror" id="password" name="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>

      </form>
      <p>Already Have An Acoount? <a href="/login">login</a> </p>
    </div>
  </div>

</main>

@endsection
<div style="  position: absolute;bottom: 0;width: 80%;">
                @include('partials.footer')
            </div>
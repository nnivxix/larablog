@extends('layouts.main')

@section('container')

<main class=" w-100 m-auto ">
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-10 col-md-8 col-lg-6">
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('success')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    @if (session()->has('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{session('error')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif


        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      <form action="/login" method="POST" >

        @csrf
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
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          <label for="password">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Login in</button>

      </form>
      <p>Not Register? <a href="/register">Regsiter Now</a> </p>
    </div>
  </div>

</main>

@endsection

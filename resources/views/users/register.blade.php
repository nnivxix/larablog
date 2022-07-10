@extends('layouts.main')

@section('container')

<main class="form-signin w-100 m-auto ">
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-md-4 col-lg-6">
      <form>
        <h1 class="h3 mb-3 fw-normal">Register An Account</h1>

        <div class="form-floating">
          <input type="text" class="form-control" id="username" name="username" placeholder="name@example.com">
          <label for="username">Username</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" id="name" name="name" placeholder="name@example.com">
          <label for="name">Name</label>
        </div>
        <div class="form-floating">
          <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          <label for="password">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Login in</button>

      </form>
      <p>Already Have An Acoount? <a href="/login">login</a> </p>
    </div>
  </div>

</main>

@endsection

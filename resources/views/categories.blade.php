@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row">
    <h1>List Categories</h1>
@foreach ( $categories as $cat )

    <div class="col-md-4">

      <div class="card bg-dark text-white">
        <a href="/category/{{ $cat->slug}}" class="text-white">
          <img src="https://source.unsplash.com/1200x600?{{$cat->slug}}" class="card-img " alt="{{$cat->name}}" loading="lazy">
          <div class="card-img-overlay d-flex align-items-center" style="background-color: rgba(0,0,0,0.3) ;">
            <h5 class="card-title flex-fill p-4 fs-3 text-center">{{ $cat->name }}</h5>
          </div>
        </a>

      </div>
    </div>
@endforeach
  </div>
</div>
@endsection

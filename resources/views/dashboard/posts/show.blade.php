@extends('dashboard.layouts.main')


@section('container')
<div class="container">
  <div class="row ">
    <section class="col-md-8">
      <h2>{{ $post['title'] }}</h2>
      <a href="/dashboard/posts" class="btn btn-success m-2">
        <span data-feather="arrow-left"></span> Back To My Posts
      </a>
      <a href="/dashboard/posts" class="btn btn-warning m-2">
        <span data-feather="edit"></span> Back To My Posts
      </a>
      <a href="/dashboard/posts" class="btn btn-danger m-2">
        <span data-feather="trash-2"></span> Back To My Posts
      </a>
      <img src="https://source.unsplash.com/1200x600?{{$post->category->slug}}" loading="lazy" class="card-img-top img-fluid my-3" alt="{{ $post->slug }}">


      <p>{!! $post->body !!}</p>

      <a href="/dashboard/posts">back to all my posts</a>
    </section>

  </div>
</div>
@endsection

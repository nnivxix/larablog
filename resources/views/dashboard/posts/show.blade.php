@extends('dashboard.layouts.main')


@section('container')
<div class="container">
  <div class="row ">
    <section class="col-md-8">
      <h2>{{ $post['title'] }}</h2>
      <a href="/dashboard/posts" class="btn btn-success m-2">
        <span data-feather="arrow-left"></span> Back To My Posts
      </a>
      <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-warning m-2">
        <span data-feather="edit"></span> Back To My Posts
      </a>
      <form action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger m-2" onclick="return confirm('Confirm, do you want to delete this post?')">
          <span data-feather="trash-2"></span> Delete My Posts
        </button>
      </form>
      <!-- <img src="https://source.unsplash.com/1200x600?{{$post->category->slug}}" loading="lazy" class="card-img-top img-fluid my-3" alt="{{ $post->slug }}"> -->


      <p>{!! $post->body !!}</p>

      <a href="/dashboard/posts">back to all my posts</a>
    </section>

  </div>
</div>
@endsection

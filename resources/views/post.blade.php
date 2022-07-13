@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row justify-content-center">
    <section class="col-md-8">
      <h2>{{ $post['title'] }}</h2>
      <p class="card-text"><small class="text-muted">Posted by {{$post->author->name}} in category {{ $post->category->slug }} | Last updated {{ $post->created_at->diffForHumans() }} </small></p>
      @if ($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" loading="lazy" class="card-img-top img-fluid my-3" alt="{{ $post->slug }}">
      @else
        <img src="https://source.unsplash.com/1200x600?{{$post->category->slug}}" loading="lazy" class="card-img-top img-fluid my-3" alt="{{ $post->slug }}">
      @endif


      <p>{!! $post->body !!}</p>

      <a href="/blog">back to blogs</a>
    </section>

  </div>
</div>


@endsection


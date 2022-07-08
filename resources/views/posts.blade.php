@extends('layouts.main')

@section('container')
  <h1>{{ $title }}</h1>
  <article class="card mb-3 ">
  <img src="https://source.unsplash.com/1200x600?{{$posts[0]->category->slug}} loading="lazy" class="card-img-top" alt="$posts[0]->slug">
  <div class="card-body d-flex justify-content-center flex-column">
    <h3 class="card-title">{{ $posts[0]->title }}</h3>
    <p class="card-text"><small class="text-muted">Posted by {{$posts[0]->author->name}} in category {{ $posts[0]->category->slug }} | Last updated {{ $posts[0]->created_at->diffForHumans() }} </small></p>
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
    <a href="/blog/{{ $posts[0]->slug }}" class="btn btn-primary w-25 align-self-center" type="button">Read More</a>
  </div>
</article>
<div class="container">
  <div class="d-flex justify-content-between gx-3 flex-wrap">
@foreach ( $posts->skip(1) as $post )
    <div class="card col-md-4  my-2 gx-3 card-responsive"  >
      <div class="position-absolute px-2 py-3" style="background-color: rgba(0,0,0,0.7) ;">
        <a href="/category/{{ $post->category->slug }}" class="text-decoration-none text-white">{{$post->category->slug}}</a>
      </div>
      <img src="https://source.unsplash.com/1200x600?{{$post->category->slug}}" class="card-img-top" alt="{{$post->title}}" loading="lazy">
      <div class="card-body">
        <p class="card-text"><small class="text-muted">Posted by <a href="/author/{{ $post->author->username  }}/">{{ $post->author->name  }} </a> in category <a href="/category/{{ $post->category->slug}}">{{  $post->category->slug  }}</a>  | Last updated {{ $post->created_at->diffForHumans() }} </small></p>
        <p class="card-text">{{ $post->excerpt }}</p>
        <a href="/blog/{{ $post->slug }}">Read More</a>
      </div>
    </div>

@endforeach
</div>
</div>
@endsection



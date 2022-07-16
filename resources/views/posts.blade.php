@extends('layouts.main')

@section('container')
  <h1 class="text-center mb-3">{{ $title }}</h1>

  <!-- form control -->
  <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <form action="/blog" method="get">
      <div class="input-group mb-3">
        @if (request('category'))
          <input type="hidden" class="form-control" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
        @endif

        <input type="text" class="form-control" name="search" value="{{request('search')}}" placeholder="Search Post" aria-label="Form Search" aria-describedby="Search Form">
        <button type="button" type="submit"  class="btn btn-danger"> Search </button>
      </div>

      </form>
    </div>
  </div>
  <!-- end of form control -->


<!-- Check kondisi -->
@if ($posts->count())

<!--  -->
  <!-- First Post -->
  <article class="card mb-3 ">
  <!-- <img src="https://source.unsplash.com/1200x600?{{$posts[0]->category->slug}} loading="lazy" class="card-img-top" alt="image of {{ $posts[0]->title }}"> -->
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
        <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{$post->category->slug}}</a>
      </div>
      <!-- <img src="https://source.unsplash.com/1200x600?{{$post->category->slug}}" class="card-img-top" alt="image of {{$post->title}}" loading="lazy"> -->
      <h3 class="card-title">{{ $post->title }}</h3>
      <div class="card-body">
        <p class="card-text"><small class="text-muted">Posted by <a href="/blog?author={{ $post->author->username  }}">{{ $post->author->name  }} </a> in category <a href="/blog?category={{ $post->category->slug}}">{{  $post->category->slug  }}</a>  | Last updated {{ $post->created_at->diffForHumans() }} </small></p>
        <p class="card-text">{{ $post->excerpt }}</p>
        <a href="/blog/{{ $post->slug }}">Read More</a>
      </div>
    </div>
    @endforeach
  </div>
</div>
@else
<p class="text-center fs-4">Post Not Found</p>
@endif
<!-- pengecekan berakhir -->


{{ $posts->links() }}
@endsection




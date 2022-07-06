@extends('layouts.main')

@section('container')

@foreach ( $posts as $post )
  <article class="mb-5">
    <h2><a class="link-dark" href="/blog/{{ $post->slug }}"> {{ $post->title  }}</a> </h2>
    <h5>Posted by: <a href="/author/{{ $post->author->username }}"> {{  $post->author->name  }}</a></h5>
    <p>{{ $post->excerpt }}</p>
  </article>
@endforeach

@endsection



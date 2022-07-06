@extends('layouts.main')

@section('container')

@foreach ( $posts as $post )
  <article class="mb-5">
    <h2><a class="link-dark" href="/blog/{{ $post->slug }}"> {{ $post->title  }}</a> </h2>
    <p>in {{ $post->category->name }}</p>
    <p>{{ $post->excerpt }}</p>
  </article>
@endforeach

@endsection
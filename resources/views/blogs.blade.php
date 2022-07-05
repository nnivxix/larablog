@extends('layouts.main')

@section('container')

@foreach ( $blogs as $blog )
  <article class="mb-5">
    <h2><a class="link-dark" href="/blog/{{ $blog->slug }}"> {{ $blog->title  }}</a> </h2>
    <p>{{ $blog->excerpt }}</p>
  </article>
@endforeach

@endsection



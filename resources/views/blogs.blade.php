@extends('layouts.main')

@section('container')

@foreach ( $blogs as $blog )
  <article class="mb-5">
    <h2><a class="link-dark" href="/blog/{{ $blog['slug'] }}"> {{ $blog['title']   }}</a> </h2>
    <h5>By: {{ $blog['author']}}</h5>
    <p>{{ $blog['content'] }}</p>
  </article>
@endforeach

@endsection



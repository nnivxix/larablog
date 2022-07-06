@extends('layouts.main')

@section('container')

@foreach ( $categories as $cat )
  <ul>
    <li><a class="link-dark" href="/category/{{ $cat->slug }}"> {{ $cat->name  }}</a></li>
  </ul>
@endforeach

@endsection

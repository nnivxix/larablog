@extends('layouts.main')

@section('container')

<h1>single post {{ $slug }}</h1>

<h2>{{ $post['title'] }}</h2>
<h5>{{ $post['author'] }}</h5>
<p>{{ $post['content'] }}</p>

<a href="/blog">back to blogs</a>
@endsection


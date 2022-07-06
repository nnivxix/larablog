@extends('layouts.main')

@section('container')


<h2>{{ $post['title'] }}</h2>
<h5>The post in Category <a href="/category/{{ $post->category->slug }}">{{ $post->category->name  }}</a> </h5>
<p>{!! $post->body !!}</p>

<a href="/blog">back to blogs</a>
@endsection


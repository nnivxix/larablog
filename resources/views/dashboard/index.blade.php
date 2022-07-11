@extends('dashboard.layouts.main')


@section('container')
  <h1>Hei, Welcome back {{auth()->user()->name}}</h1>
  {{ auth()->user()->id }}
@endsection

@extends('dashboard.layouts.main')

@section('container')
<a href="/dashboard/posts/create" class="btn btn-primary my-3" role="button" aria-label="create post" title="create a post">Create Post</a>
<h2>All My Post</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No. </th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post )
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->category->name }}</td>
        <td>
          <a href="/dashboard/posts/{{$post->slug}}" class="badge bg-info">
            <span data-feather="eye"></span>
          </a>
          <a href="/dashboard/posts/{{$post->slug}}" class="badge bg-warning">
            <span data-feather="edit"></span>
          </a>
          <a href="/dashboard/posts/{{$post->slug}}" class="badge bg-danger">
            <span data-feather="trash-2"></span>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection

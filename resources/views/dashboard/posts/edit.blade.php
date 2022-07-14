@extends('dashboard.layouts.main')
@section('container')

@if (isset($errors) && count($errors))

<ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }} </li>
  @endforeach
</ul>

@endif

<div class="col-lg-8">
  <form action="/dashboard/posts/{{$post->slug}}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title')
        is-invalid
      @enderror" id="title" name="title" autofocus value="{{ old('title', $post->title) }}">
      @error('title')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug')
        is-invalid
      @enderror" id="slug" name="slug" value="{{ old('slug', $post->title) }}">
      @error('slug')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select class="form-select" name="category_id" aria-label="Select Category">
        @foreach ($categories as $category )
        @if (old('category_id', $post->category_id) == $category->id )
        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @endif
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="input-group mb-3">
      <input type="hidden" name="oldImage" value="{{$post->image}}">
      @if ($post->image)
      <img class="img-preview img-fluid d-block" src="{{ asset('storage/' . $post->image) }}">
      @else
      <img class="img-preview img-fluid d-block">
      @endif
      <!-- <label class="input-group-text" for="image">Upload</label> -->
      <input type="file" class="form-control @error('image')
        is-invalid
      @enderror" id="image" name="image" onchange="previewImg()" >
      @error('image')
      <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      @error('body')
      <p class="text-danger">{{ $message }}</p>
      @enderror
      <input id="body" type="hidden" name="body" class="@error('body') is-invalid @enderror" value="{{ old('body', $post->body) }}">
      <trix-editor input="body"></trix-editor>
    </div>
    <button type="submit" class="btn btn-primary">Update Post</button>
  </form>
</div>
<style>
  trix-toolbar .trix-button-group--file-tools {
    display: none;
  }
</style>
<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function() {
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug);
  });

  document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
  });

  function previewImg() {
    const image = document.querySelector('#image');
    const imagePreview = document.querySelector('.img-preview');

    imagePreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
      imagePreview.src = oFREvent.target.result;
      imagePreview.alt = "preview image post";
      imagePreview.title = "preview image post";
    }
  }
</script>
@endsection

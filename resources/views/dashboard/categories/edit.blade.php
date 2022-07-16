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
  <form action="/dashboard/categories/{{$category->slug}}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control @error('name')
        is-invalid
      @enderror" id="name" name="name" autofocus value="{{ old('name', $category->name) }}">
      @error('name')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug')
        is-invalid
      @enderror" id="slug" name="slug" value="{{ old('slug', $category->slug) }}">
      @error('slug')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
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
  const name = document.querySelector('#name');
  const slug = document.querySelector('#slug');

  name.addEventListener('change', function() {
    fetch('/dashboard/categories/checkSlug?name=' + name.value)
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

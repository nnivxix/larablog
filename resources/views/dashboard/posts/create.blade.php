
@extends('dashboard.layouts.main')

@section('container')
<div class="col-lg-8">
  <form method="post" action="/dashboard/posts">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control" id="slug" name="slug">
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Slug</label>
      <select class="form-select" aria-label="Select Category">
        @foreach ($categories as $category )

        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      <input id="body" type="hidden" name="body">
      <trix-editor input="body"></trix-editor>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
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
      .then(data => slug.value = data.slug );
  });

  document.addEventListener('trix-file-accept', function(e) {
  e.preventDefault();

});
</script>
@endsection


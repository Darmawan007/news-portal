@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create New Category</h1>
</div>

<div class="col-lg-6">
  <form method="POST" action="/dashboard/categories" class="mb-5">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Category Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required readonly value="{{ old('slug') }}">
      @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="color" class="form-label">Category Color</label>
      <select class="form-select @error('color') is-invalid @enderror" id="color" name="color" required>
        <option value="red" {{ old('color') == 'red' ? 'selected' : '' }}>Red</option>
        <option value="blue" {{ old('color') == 'blue' ? 'selected' : '' }}>Blue</option>
        <option value="green" {{ old('color') == 'green' ? 'selected' : '' }}>Green</option>
        <option value="yellow" {{ old('color') == 'yellow' ? 'selected' : '' }}>Yellow</option>
        <option value="purple" {{ old('color') == 'Purple' ? 'selected' : '' }}>Purple</option>
      </select>
      @error('color')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Create Category</button>
  </form>
</div>

<script>
  const name = document.querySelector('#name');
  const slug = document.querySelector('#slug');

  name.addEventListener('change', function() {
    slug.value = name.value.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-+|-+$/g, '');
  });
</script>
@endsection

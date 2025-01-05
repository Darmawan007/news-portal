@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Profile</h1>
</div>

<div class="col-lg-8">
  <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <!-- Nama -->
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
    </div>

    <!-- Username -->
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" id="username" name="username" value="{{ old('username', $user->username) }}" required>
    </div>

    <!-- Email -->
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
    </div>

    <!-- Password -->
    <div class="mb-3">
      <label for="password" class="form-label">Password (optional)</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Leave empty to keep current password">
    </div>

    <!-- Foto Profil -->
    <div class="mb-3">
      <label for="photo" class="form-label">Profile Photo</label>
      <input type="file" class="form-control" id="photo" name="photo">
      @if ($user->photo)
      <div class="mt-2">
        <img src="{{ asset('storage/' . $user->photo) }}" alt="{{ $user->name }}" class="img-fluid" style="max-height: 100px;">
      </div>
      @endif
    </div>

    <!-- Field Is Admin (Hidden) -->
    <input type="hidden" name="is_admin" value="{{ $user->is_admin }}">

    <button type="submit" class="btn btn-primary">Save Changes</button>
  </form>
</div>
@endsection

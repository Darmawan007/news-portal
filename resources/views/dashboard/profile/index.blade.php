@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Profile</h1>
</div>

<div class="card mb-3" style="max-width: 600px;">
  <div class="row g-0">
    <!-- Foto Profil -->
    <div class="col-md-4 text-center">
      <img 
        src="{{ $user->photo ? asset('storage/' . $user->photo) : asset('images/default-user.png') }}" 
        class="img-fluid rounded-start mt-3" 
        alt="{{ $user->name }}" 
        style="max-height: 150px; width: 150px;">
    </div>

    <!-- Detail Profil -->
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $user->name }}</h5>
        <p class="card-text"><strong>Username:</strong> {{ $user->username }}</p>
        <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
        <p class="card-text"><strong>Joined:</strong> {{ $user->created_at->format('d M Y') }}</p>
        <div class="text-end">
          <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit Profile</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

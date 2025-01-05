@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Dashboard</h1>
</div>

<div class="row">
  @if (auth()->user()->is_admin)
    <!-- Card My News -->
    <div class="col-md-3 mb-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h6 class="card-title">My News</h6>
          <h3 class="fw-bold">{{ $myNewsCount }} News</h3>
        </div>
      </div>
    </div>

    <!-- Card All News -->
    <div class="col-md-3 mb-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h6 class="card-title">All News</h6>
          <h3 class="fw-bold">{{ $allNewsCount }} News</h3>
        </div>
      </div>
    </div>

    <!-- Card All Users -->
    <div class="col-md-3 mb-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h6 class="card-title">All Users</h6>
          <h3 class="fw-bold">{{ $allUsersCount }} Users</h3>
        </div>
      </div>
    </div>

    <!-- Card All Categories -->
    <div class="col-md-3 mb-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h6 class="card-title">All Categories</h6>
          <h3 class="fw-bold">{{ $allCategoriesCount }} Categories</h3>
        </div>
      </div>
    </div>
  @else
    <!-- Card My News -->
    <div class="col-md-3 mb-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h6 class="card-title">My News</h6>
          <h3 class="fw-bold">{{ $myNewsCount }} News</h3>
        </div>
      </div>
    </div>
  @endif
</div>
@endsection

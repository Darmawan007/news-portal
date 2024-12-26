@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My News</h1>
</div>

<div class="table-responsive">
  <a href="/dashboard/news/create" class="btn btn-primary mb-3">Create new News</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($news as $newss)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $newss->title }}</td>
        <td>{{ $newss->category->name }}</td>
        <td>
          <a href="/dashboard/news/{{ $newss->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
          <a href="/dashboard/news/{{ $newss->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
          <form action="/dashboard/news/{{ $newss->slug }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="button" class="badge bg-danger border-0" onclick="remove(this)"><span data-feather="trash-2"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
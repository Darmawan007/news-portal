@extends('dashboard.layouts.main')

@section('container')

<div class="container">
  <div class="row my-3">
    <div class="col lg-8">
      <h1 class="mb-3">{{ $news->title }}</h1>
      <a href="/dashboard/news" class="btn btn-info"><span data-feather="arrow-left"></span> Back to my news</a>
      <a href="/dashboard/news/{{ $news->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
      <form action="/dashboard/news/{{ $news->slug }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="trash-2"></span> Delete</button>
      </form>
       @if ($news->image)
       <div class="my-3">
         <img src="{{asset('storage/'. $news->image)}}" class="card-img-top" alt="..." class="img-fluid mt-3">
     </div>
       @else
       <div class="my-3">
         <img src="https://images.unsplash.com/photo-1607799279861-4dd421887fb3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
     </div>
       @endif
      <article class="my-3 fs-5">
          {!! $news->content!!}
      </article>
    </div>
  </div>
</div>

@endsection


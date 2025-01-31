<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News Portal | Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

  <style>
    trix-toolbar [data-trix-button-group="file-tools"]{
      display: none;
    }
  </style>

<link rel="stylesheet" href="sweetalert2.min.css">

  </head>
  <body>
    
@include('dashboard.layouts.header')

<div class="container-fluid">
  <div class="row">
    @include('dashboard.layouts.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      @yield('container')
    </main>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="/js/dashboard.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  @if (session()->has('create'))
  Swal.fire({
  icon: "success",
  title: "Created successfully.",
  showConfirmButton: false,
  timer: 1500
});
  @endif

  @if (session()->has('update'))
  Swal.fire({
  icon: "success",
  title: "Updated successfully.",
  showConfirmButton: false,
  timer: 1500
});
  @endif

  function remove(button) {
    Swal.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  cancelButtonColor: "#d33",
  confirmButtonColor: "#3dc97d",
  confirmButtonText: "Yes, delete it!"
}).then((result) => {
  if (result.isConfirmed) {
    button.parentElement.submit();
  }
});
  }
  @if (session()->has('delete'))
  Swal.fire({
      title: "Deleted!",
      text: "Deleted successfully.",
      icon: "success"
    });
    @endif

</script>
  </body>
</html>

@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome To Dashboard, {{ auth()->user()->username }}</h1>
    </div>
    
    <main>
<div class="container py-4">

    <div class="p-5 mb-4 bg-light border rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Hello {{ auth()->user()->username }}, want to see the user list?</h1>
        <p class="col-md-8 fs-4">Click the button bellow to go to the user list</p>
        <a href="/dashboard/users" class="btn btn-outline-dark" type="button">User List</a>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Wanted to go to the homepage?</h2>
          <p>Click the button bellow to go to the homepage</p>
          <a href="/" class="btn btn-outline-light" type="button">Homepage</a>
        </div>
      </div>
    </div>

</div>
<footer class="mt-5 text-muted border-top">
  &copy; 2022
  By Rakhsha
</footer>
</main>
@endsection
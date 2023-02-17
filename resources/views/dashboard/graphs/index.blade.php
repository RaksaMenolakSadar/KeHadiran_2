@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Welcome To Graph, {{ auth()->user()->username }}</h1>
</div>

<main>
  <div id="chart">
    
  </div>
  <footer class="mt-5 text-muted border-top">
    &copy; 2022
    By Rakhsha
  </footer>
</main>
@endsection
@extends('dashboard.layouts.main')

@section('container')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Welcome To Graph, {{ auth()->user()->username }}</h1>
</div>

<main>
  <div id="chart">
    
  </div>
  <footer class="mt-5 text-muted border-top">
    &copy; 2023
    By Rakhsha
  </footer>

  <?php
  $harian = array();
  $jumlah = array();

  foreach($users as $user) {
    array_push($harian, $user->hari);
    array_push($jumlah, $user->total);
  }

  ?>
  <script>
    var categories = <?php echo json_encode($harian) ?>;
    var label = <?php echo json_encode($jumlah) ?>;
  </script>
</main>
@endsection
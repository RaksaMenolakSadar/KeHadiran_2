@extends('layouts.main')

@push('title')
Presensi
@endpush

@section('container')
<h2 id="clock">
    
</h2>
<h1>Halaman Presensi</h1>
<div class="content">
    <div class="container-fluid">

    <div class="card">
        <div class="card-body">
        <span id="hours"></span>:<span id="minutes"></span>:<span id="seconds"></span>
        <div class="btn btn-primary">tes</div>
        </div>
    </div>
    </div>
</div>
<script src="{{ asset('js/jam.js') }}"></script>
@endsection
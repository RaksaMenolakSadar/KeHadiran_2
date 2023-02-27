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
    <span id="hours"></span>.<span id="minutes"></span>.<span id="seconds"></span>
    </div>
</div>
<script src="{{ asset('js/jam.js') }}"></script>
@endsection
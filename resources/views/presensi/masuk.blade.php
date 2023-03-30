@extends('layouts.main')

@push('title')
Presensi
@endpush

@section('container')

@if(session()->has('selesai'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('selesai') }}
    </div>
@endif

<h2 id="clock">
    
</h2>
<h1>Halaman Presensi</h1>

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="/presensi/masuk" method="post">
                    @csrf
                    <span id="hours"></span>:<span id="minutes"></span>:<span id="seconds"></span>
                    <div class="mb-3">Mapel
                        <select name="mapel" class="form-select" aria-label="Default select example">
                            <option value="MTK">MTK</option>
                            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                            <option value="PPKn">PPKn</option>
                            <option value="Agama">Agama</option>
                            <option value="Bahasa Daerah">Bahasa Daerah</option>
                            <option value="IPS">IPS</option>
                            <option value="IPA">IPA</option>
                            <option value="Sejarah">Sejarah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary">masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/jam.js') }}"></script>
@endsection
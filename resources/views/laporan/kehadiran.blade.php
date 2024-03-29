@extends('layouts.main')

@push('title')
Kehadiran
@endpush

@section('container')
<h1>Kehadiran</h1>

<div class="table-responsive col0lg-8">
    <table class="table table-striped table-sm">
        <thead class="table-light border-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jam Masuk</th>
                <th>Mapel</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach($presensi as $absen)
        <tbody>
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $absen->user->nama }}</td>
                <td>{{ $absen->kelas }}</td>
                <td>{{ $absen->jam }}</td>
                <td>{{ $absen->mapel }}</td>
                <td>
                    <form action="/laporan/kehadiran/{{ $absen->id }}" method="post">
                        @method('delete')
                        @csrf
                    <button class="btn btn-outline-danger" onclick="return confirm('are you sure {{ auth()->user()->username }}?')">Hapus</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

@endsection
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
                <th >No</th>
                <th >Nama</th>
                <th >Kelas</th>
                <th >Jam Masuk</th>
                <th >Action</th>
            </tr>
        </thead>

        <tbody>
            
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="btn btn-outline-success">Edit</button>
                    </td>
                </tr>
            
        </tbody>
    </table>
</div>

@endsection
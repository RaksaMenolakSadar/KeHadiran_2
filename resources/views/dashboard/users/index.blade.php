@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Welcome to user list, {{ auth()->user()->username }}</h1>
</div>

@if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="table-responsive col-lg-8">
  <a href="/dashboard/users/create" class="btn btn-outline-primary mb-2"><span data-feather="user-plus"></span> Add new user</a>
  <a href="/dashboard" class="btn btn-outline-success mb-2"><span data-feather="home"></span> Back to dashboard</a>
    <table class="table table-striped table-sm">
      <thead class="table-light border-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Name</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Action</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($users as $user)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td>
            <a href="/dashboard/users/{{ $user->id }}/edit" class="btn btn-outline-success"><span data-feather="edit"></span></a>
            <form action="/dashboard/users/{{ $user->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
                <button class="btn btn-outline-danger" onclick="return confirm('are you sure {{ auth()->user()->username }}?')"><span data-feather="user-x"></span></button>
            </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>

@endsection
@extends ('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add A New User</h1>
</div>

<div class="col-lg-5">
    <form method="post" action="/dashboard/users">
    @csrf
        <div class="mb-3">Kelas
            <select name="kelas" class="form-select" aria-label="Default select example">
                <option value="RPL">RPL</option>
                <option value="TKJ">TKJ</option>
                <option value="OTKP">OTKP</option>
                <option value="Guru">Guru</option>
            </select>
        </div>
        <div class="mb-3">Role
            <select name="role" class="form-select" aria-label="Default select example">
                @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="nama">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <a href="/dashboard/users" class="btn btn-warning"><- Return to list</a>
        
        <button type="submit" class="btn btn-primary ">Add User</button>
    </form>
</div>

@endsection
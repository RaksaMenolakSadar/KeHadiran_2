@extends ('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit User</h1>
</div>

<div class="col-lg-5">

    <form method="post" action="/dashboard/users/{{ $user->id }}">
        @method('put')
            @csrf
                <div class="mb-3">Kelas
                    <select name="kelas" class="form-select" aria-label="Default select example">
                        <option value="RPL">RPL</option>
                        <option value="TKJ">TKJ</option>
                        <option value="OTKP">OTKP</option>
                        <option value="Guru">Guru</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            <a href="/dashboard/users" class="btn btn-outline-warning"><- Return to list</a>
        <button type="submit" class="btn btn-outline-primary">Edit User</button>
    </form>
</div>


@endsection
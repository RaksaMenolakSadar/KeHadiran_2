<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Style -->
    <link rel="stylesheet" href="/css/style.css">
</head>
    <body style="display: flex; justify-content: center; align-items: center; min-height: 100vh;">
        <div class="card mb-9" style="max-width: 700px; padding: 50px;">
            <div class="row g-0">
                <div class="col-md-4" style="display: flex; justify-content:end; margin-right: 50px;">
                    <img src="img/logo-new.png" class="img-fluid rounded-start">
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <h5>
                            silahkan login
                        </h5>
                        <p class="card-text">silahkan masukkan credential anda</p>
                            <form action="/login" method="post" style="display: flex; flex-direction: column; gap: 20px;">
                                @csrf
                                    <div class="form-floating">
                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                                        <label for="email">Email</label>
                                            @error('email')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" name="password" class="form-control rounded-top" id="password" placeholder="Password" required>
                                        <label for="password">Password</label>
                                    </div>
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>




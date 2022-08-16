@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-5">
    
    <main class="form-registration w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>
      <form action="/register" method="post">
        @csrf
    
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Rakhsha Nabil" value="{{ old ('name') }}">
          <label for="name">Name</label>
        </div>
        <div class="form-floating">
          <input type="text" name="username" class="form-control" id="username" placeholder="Rakhsha_Menolak_Ireng_123" value="{{ old ('username') }}">
          <label for="username">Username</label>
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="email" placeholder="rakhshagamtenk@gmail.com" value="{{ old ('email') }}">
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
          <label for="password">Password</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
      </form>
      <small class="d-block text-center mt-2">
        Already Registered? <a href="/login" class="login">Login now!</a>
      </small>
    </main>
  </div>
</div>


@endsection
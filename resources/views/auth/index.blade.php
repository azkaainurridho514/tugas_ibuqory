@extends('auth.layout.main')

@section('container')
    
<div class="login-box" style="margin-top: -60px">
    <div class="login-logo">
      <a href="/"><b>Log-In</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Silahkan login terlebih dahulu</p>
  
        @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ session('loginError') }}
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

        <form action="/login" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </form>
        <p class="mb-0 col-lg-12  d-flex justify-content-center">
         <small>don't have an account? <a href="/register">Register </a> </small>
        </p>
      </div>
      <!-- /.login-card-body -->
        </div>
    </div>
@endsection
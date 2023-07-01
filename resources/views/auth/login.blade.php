@extends('layouts.app')

@section('content')
<div class="login-main-left">
    <div class="text-center mb-5 login-main-left-header pt-4">
       <img src="{{ asset('img/favicon.png') }}" class="img-fluid" alt="LOGO">
       <h5 class="mt-3 mb-3">Welcome to VIDEO</h5>
       <p>It is a long established fact that a reader <br> will be distracted by the readable.</p>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
       <div class="form-group">
          <label>Email</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
       <div class="form-group">
          <label>Password</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
       </div>
       <div class="mt-4">
          <div class="row">
             <div class="col-12">
                <button type="submit" class="btn btn-outline-primary btn-block btn-lg">Sign In</button>
             </div>
          </div>
       </div>
    </form>
    <div class="text-center mt-3">
       <p class="light-gray">Don’t have an account? <a href="{{ route('register') }}">Sign Up</a></p>
       <p class="light-gray">Forgot Your Password? <a href="{{ route('password.request') }}">Reset Password</a></p>
    </div>
</div>
@endsection

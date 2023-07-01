@extends('layouts.app')

@section('content')
<div class="login-main-left">
    <div class="text-center mb-5 login-main-left-header pt-4">
       <img src="{{ asset('img/favicon.png') }}" class="img-fluid" alt="LOGO">
       <h5 class="mt-3 mb-3">Welcome to VIDEO</h5>
       <p>Register New Account</p>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
       <div class="form-group">
          <label>Name</label>
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
       <div class="form-group">
          <label>Email Address</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
       <div class="form-group">
          <label>Password</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
       <div class="form-group">
          <label>Confirm Password</label>
          <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
        </div>

       <div class="mt-4">
          <div class="row">
             <div class="col-12">
                <button type="submit" class="btn btn-outline-primary btn-block btn-lg">Register</button>
             </div>
          </div>
       </div>
    </form>
    <div class="text-center mt-3">
       <p class="light-gray">Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
    </div>
 </div>

@endsection

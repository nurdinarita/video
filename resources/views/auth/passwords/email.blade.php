@extends('layouts.app')

@section('content')
<div class="login-main-left">
    <div class="text-center mb-5 login-main-left-header pt-4">
       <img src="{{ asset('img/favicon.png') }}" class="img-fluid" alt="LOGO">
       <h5 class="mt-3 mb-3">Welcome to VIDEO</h5>
       <p>Reset Password</p>
    </div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
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
              <div class="mt-4">
                <div class="row">
                   <div class="col-12">
                      <button type="submit" class="btn btn-outline-primary btn-block btn-lg">Send Password Reset Link</button>
                   </div>
                </div>
             </div>
        </form>
        <div class="text-center mt-3">
            <p class="light-gray">Already have an account?<a href="{{ route('login') }}">Sign in</a></p>
         </div>
    </div>
</div>
@endsection

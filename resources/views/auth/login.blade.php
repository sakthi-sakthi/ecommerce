@extends('layouts.app')
<style>
    .btn-login {
    font-size: 0.9rem;
    letter-spacing: 0.05rem;
    padding: 0.75rem 1rem;
}
h2{
    text-align:center;
    letter-spacing:2px;
    font-weight:bolder;
}
span{
    color:red;
}
</style>

@section('content')
<div class="container">
    
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h2><b>{{ __('Login') }}</b></h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="form-floating mb-3">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
                <label for="floatingInput">Email address <span>*</span></label>
              </div>
              <div class="form-floating mb-3">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
                <label for="floatingPassword">Password <span>*</span></label>
              </div>
              <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} required>

                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-danger btn-login text-uppercase fw-bold" type="submit">Login</button>
                  @if (Route::has('password.request'))
                  @endif
              </div>
              <!-- <center>
              <a class="btn btn-link" href="{{ route('password.request') }}" style="text-decoration:none;">
                        {{ __('Forgot Your Password?') }}
                 </a>
                 </center> -->
            </form>
            <center>
            <a href="{{ route('register') }}" style="text-decoration:none;"><b>Don't Have an Account ?</b></a>
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


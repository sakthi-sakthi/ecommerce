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
            <h2><b>{{ __('Register') }}</b></h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
              <div class="form-floating mb-3">
              <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
              @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="floatingInput">Username<span>*</span></label>
              </div>
              <div class="form-floating mb-3">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="floatingInput">Email<span>*</span></label>
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
              <div class="form-floating mb-3">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <label for="floatingPassword">Confirm Password <span>*</span></label>
              </div>
                 <div class="d-grid">
                <button class="btn btn-success btn-login text-uppercase fw-bold" type="submit">Register</button>
              </div>
            </form>
            <center>
            <a href="{{ route('login') }}" style="text-decoration:none;"><b>Already Have an Account ?</b></a>
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

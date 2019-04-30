@extends('layouts.auth')

@section('content')

<div class="limiter">
  <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
    <div class="wrap-login100">
      <form class="login100-form validate-form" action="{{ route('login') }}" method="POST">
        @csrf
        <span class="login100-form-logo">
          <i class="zmdi zmdi-landscape"></i>
        </span>

        <span class="login100-form-title p-b-34 p-t-27">
          Log in
        </span>

        <div class="wrap-input100 validate-input" data-validate = "Enter username">
          <input class="input100" type="text" id="username" name="username" placeholder="Username" required>
          <span class="focus-input100" data-placeholder="&#xf207;"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Enter password">
          <input class="input100" type="password" id="password" name="password" placeholder="Password" required>
          <span class="focus-input100" data-placeholder="&#xf191;"></span>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Login
          </button>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection

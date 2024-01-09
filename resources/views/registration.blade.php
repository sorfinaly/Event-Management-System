<<<<<<< Updated upstream
@extends('master.layoutLoginSignup')
=======
@extends('master.layoutLoginSignUp')
@section('title','Sign Up')
@section('content')

<div class="wrapper">
    <div class="imageSignUp">
      <img src="assets/img/registration.png" id="regis" alt="welcome image">
    </div>
    <div class="formSignUp">
        <div class="mt-5">
            @if ($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-danger">{{$session('error')}}</div>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-sucess">{{$session('success')}}</div>
            @endif

        </div>
      <form action="{{route('registration.post')}}" method="POST">
        @csrf
        <img src="assets/img/iium-logo.png" alt="IIUM Logo" class="center">
        <h2>Create Account</h2>
        <h5>Sign up now for more excitement!</h5>

        <div class="input-box">
            <input type="text" placeholder="Full Name" name="name" required>
          </div>

          <div class="input-box">
            <input type="email" placeholder="Email" name="email" required>
          </div>

        <div class="input-box">
          <input type="password" placeholder="Password" name="password" required>
        </div>

        <div class="remember-forgot">
          <label><input type="checkbox"> Keep me logged in</label>
          <a href="#">Forgot password?</a>
        </div>

        <button type="submit" class="btn">Sign Up</button>

        <div class="register-link">
          <p>Already registered? <a href="login">Login</a></p>
        </div>
      </form>
    </div>
  </div>




@endsection
>>>>>>> Stashed changes

@extends('master.layoutLoginSignUp')
@section('title','Sign Up')
@section('content')

{{-- <div class="wrapper">
    <div class="row">
        <div class="col-md-5">
            <img src="assets/img/login.png" id="regis" alt="welcome image">
        </div>
        <div class="col-md-8">
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
</div> --}}

<div class="container-fluid">
    <div class="row">
      <div class="col-6 d-flex align-items-center">
        <img src="assets/img/login.png" alt="welcome image" class="img-fluid">
        {{-- <img src="your-image.jpg" alt="Image" class="img-fluid"> --}}
      </div>

      <div class="col-6">
        <div class="container row">
            {{-- <div class="mt-5"> --}}
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
            {{-- </div> --}}
            <form action="{{route('registration.post')}}" method="POST">
                @csrf
                <img src="assets/img/iium-logo.png" alt="IIUM Logo" class="img-fluid">
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
    </div>
</div>

@endsection

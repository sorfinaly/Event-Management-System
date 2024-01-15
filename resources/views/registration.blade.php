@extends('master.layoutLoginSignUp')
@section('title','Sign Up')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-6 d-flex align-items-center">
            <div class="row center">
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
                <form action="{{route('registration.post')}}" method="POST" class="justify-content-center">
                    @csrf
                    <img src="assets/img/iium-logo.png" alt="IIUM Logo" class="mx-auto d-block" style="width: 50%;">
                    <h2 class="row justify-content-center">Create Account</h2>
                    <h5 class="row justify-content-center">Sign up now for more excitement!</h5>

                    <div class="input-box">
                        <input type="text" placeholder="Full Name" name="name" required>
                    </div>

                    <div class="input-box">
                        <input type="email" placeholder="Email" name="email" required>
                    </div>

                    <div class="input-box">
                        <input type="password" placeholder="Password" name="password" required>
                    </div>

                    <div style="padding-bottom: 15px;padding-top: 15px;">
                        <button type="submit" class="btn" id="primaryBtn">Sign Up</button>
                    </div>

                    <div class="register-link">
                    <p>Already registered? <a href="login">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-6 d-flex align-items-center">
            <img src="assets/img/registration.png" style="width: 100%;" alt="welcome image" class="mx-auto d-block">
        </div>
    </div>
</div>

@endsection

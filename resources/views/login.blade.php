@extends('master.layoutLoginSignup')
@section('title','Login')
@section('content')

<div class="wrapper">
    <div class="image">
        <img src="assets/img/login.png" alt="welcome image">
        </div>
    <form action="">
        <img src="assets/img/iium-logo.png" alt="IIUM Logo" class="center">
        <h1>Welcome Back!</h1><br>
        <h6>Unlock the door and let the magic begin</h6>

        <div class="input-box">
            <input type="text" placeholder="Email" required>
            <i class='bx bxs-envelope' ></i>
        </div>

        <div class="input-box">
            <input type="password" placeholder="Password" required>
            <i class='bx bxs-lock-alt'></i>
        </div>

        <div class="remember-forgot">
            <label><input type="checkbox"> Remember me</label>
            <a href="#">Forgot password?</a>
        </div>

        <button type="submit" class="btn">Login</button>

        <div class="register-link">
        <p>Don't have an account? <a href="#">Register</a></p>
        </div>
    </form>
</div>


@endsection

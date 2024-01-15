@extends('master.layoutLoginSignup')
@section('content')

<main>
    <div class="wrapp">
        <div class="mt-5">
            @if ($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

        </div>
        <h5 class="card-title text-center">Forgot Password</h5>
        <form action="{{route('reset.password.post')}}" method="POST">
            @csrf
            <p>We will send a link to your email, use that to reset password.</p>
            <input type="text" name="token" hidden value="{{$token}}">
            <label for="email">Email address</label>
            <input type="email" class="inputs" id="email" name="email" placeholder="Enter your email" required>

            <label for="password">New Password</label>
            <input type="password" class="inputs" id="password" name="newpass" placeholder="Enter new password" required>

            <label for="password">Confirm Pasword</label>
            <input type="password" class="inputs" id="password" name="confirmpass" placeholder="Confirm your password" required>

            <button type="submit" class="btn btn-primary btn-block">Reset Password</button>

        </form>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</main>
@endsection

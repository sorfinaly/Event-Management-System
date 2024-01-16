@extends('master.layout')
@section('title','Profile')
@section('content')

<div class="background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- User Profile Info and Settings -->
                    <div class="card mb-4">
                        <h5 class="texts text-left fw-bold">Profile Settings</h5>
                        <div class="card-body d-flex">

                            <!-- User Profile Info -->
                            <div class="d-flex flex-column align-items-center text-center md-5">
                                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                <span class="font-weight-bold">{{ $user->role }}</span>
                                <!-- Add the file input here -->
                                <span><input type="file" name="profile_picture" id="profile_picture" class = "alignment"></span>
                            </div>

                            <!-- Profile Settings -->
                            <div class="info">
                                @if (isset($success))
                                        <div class="alert alert-success">
                                            {{ $success }}
                                        </div>
                                    @endif

                                    @if (isset($error))
                                        <div class="alert alert-danger">
                                            {{ $error }}
                                        </div>
                                    @endif

                                    @if (isset($errors) && count($errors) > 0)
                                        <div class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                            {{ $error }}
                                            @endforeach
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('changeProfile') }}">
                                        @csrf
                                        <input type="text" class="form-control" id="currentName" name="currentName" value="{{$user->name}}">
                                        <input type="text" class="form-control" id="currentEmail" name="currentEmail" value="{{$user->email}}">
                                        <input type="text" class="form-control" id="currentPhone" name="currentPhone" placeholder="Place Your Phone Number Here" value="{{$user->phone}}">
                                        <div class="container mt-3">
                                            <button type="submit" class="button-profileupdate mt-6">SAVE</button>
                                        </div>
                                    </form>
                            </div>
                        </div>

                    </div>


                <!-- Change Password -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-left">Change Password</h5>

                            @if (isset($success))
                            <div class="alert alert-success">
                                {{ $success }}
                            </div>
                            @endif

                            @if (isset($error))
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                            @endif

                            @if (isset($errors) && count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                {{ $error }}
                                @endforeach
                            </div>
                            @endif

                        <form method="POST" action="{{ route('changePassword') }}">
                            @csrf
                            <div class="form-group">
                                <input type="password" class="form-control" id="currentPassword" name="currentPassword" placeholder="Current password" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="newPassword_confirmation" name="newPassword_confirmation" placeholder="Confirm New Password">
                            </div>
                            <button type="submit" class="button-profileupdate mt-6">CHANGE PASSWORD</button>
                        </form>
                    </div>
                </div>

                <!-- Delete Account -->
                <div class="card mb-4">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-left">Delete Account</h5>
                        <p class="card-text">Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</p>
                        <form>
                            <button type="submit" class="button-delete text-right">DELETE ACCOUNT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</div>

@endsection

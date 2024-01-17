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
                                <img class="rounded-circle mt-5" width="150px" src="{{ asset($user->profile_photo_path) ?? 'mahito.png' }}">

                                <span class="font-weight-bold">{{ $user->role }}</span>
                                <form method="POST" action="{{ route('changeProfile') }}" enctype="multipart/form-data">
                                <!-- Add the file input here -->
                                <span><input type="file" name="profile_photo" id="profile_photo" class = "alignment"></span>
                            </div>

                            <!-- Profile Settings -->
                            <div class="info">
                                @if (isset($profileSuccess))
                                        <div class="alert alert-success">
                                            {{ $profileSuccess }}
                                        </div>
                                    @endif

                                    @if (isset($profileErrors))
                                        <div class="alert alert-danger">
                                            {{ $profileErrors }}
                                        </div>
                                    @endif

                                    @if (isset($profileErrors) && count($profileErrors) > 0)
                                        <div class="alert alert-danger">
                                            @foreach ($profileErrors->all() as $profileErrors)
                                            {{ $profileErrors }}
                                            @endforeach
                                        </div>
                                    @endif


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

                            @if (isset($passwordSuccess))
                            <div class="alert alert-success">
                                {{ $passwordSuccess }}
                            </div>
                            @endif

                            @if (isset($currentPasswordError))
                            <div class="alert alert-danger">
                                {{ $currentPasswordError }}
                            </div>
                        @endif

                        @if (isset($passwordErrors) && $passwordErrors->has('newPassword'))
                        <div class="alert alert-danger">
                            {{ $passwordErrors->first('newPassword') }}
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
                        <form action="{{route('delete.account.confirm')}}">
                        <h5 class="card-title text-left">Delete Account</h5>
                        <p class="card-text">Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</p>
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

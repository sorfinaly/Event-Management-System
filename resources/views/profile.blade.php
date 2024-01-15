@extends('master.layout')
@section('title','Profile')
@section('content')

<div class = "background">

    <div class="container mt-5">
        <div class="row">
          <div class="col-md-4">
            <!-- Profile Information -->
            <div class="card">
              <div class="card-body">
                <img class="profile" src="{{ $user->profile_photo_path ?? 'assets/img/default.png' }}" alt="Profile picture">

                <h5 class="card-title">Profile Information</h5>
                <p class="card-text">Name:{{ $user->name }}</p>
                <p class="card-text">Email: {{ $user->email }}</p>
                <p class="card-text">Phone: {{ $user->phone }}</p>
              </div>
            </div>
          </div>

          <div class="col-md-8">
            <!-- 2-Factor Authentication -->
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title">Two-Factor Authentication</h5>
                <p class="card-text">Enable or disable two-factor authentication.</p>
                <form>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="enable2FA" name="enable2FA">
                    <label class="form-check-label" for="enable2FA">Enable Two-Factor Authentication</label>
                  </div>
                  <button type="submit" class="btn btn-primary mt-2">Save Changes</button>
                </form>
              </div>
            </div>

            <!-- Change Password -->
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Change Password</h5>

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
                    <label for="currentPassword">Current Password</label>
                    <input type="password" class="form-control" id="currentPassword" name="currentPassword" required>
                    </div>
                    <div class="form-group">
                    <label for="newPassword">New Password</label>
                    <input type="password" class="form-control" id="newPassword" name="newPassword" required>
                    </div>
                    <div class="form-group">
                        <label for="newPassword_confirmation">Confirm New Password</label>
                        <input type="password" class="form-control" id="newPassword_confirmation" name="newPassword_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </form>
                </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Bootstrap JS and Popper.js, if needed -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


@endsection

@extends('master.layout')
@section('title','Confrim Delete')
@section('content')

<div class="background">
    <div class="container">
        <div class="card mb-4">
            <div class="card-body d-flex flex-column">
                <form method="POST" action="{{route('delete.account')}}">
                @csrf
                @method('DELETE')
                <h5>Confirm Account Deletion</h5>
                <p class="card-text">Are you sure you want to delete your account?</p>
                <p class="card-text">Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</p>
                <button type="submit" class="button-confirm-delete ">DELETE ACCOUNT</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

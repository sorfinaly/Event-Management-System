@extends('master.layout')
@section('content')

<div class = "background">

    <h2>Be One Of The Team!</h2>

    <div class="form-background">

        <form action="addfeecommittee" method="post" style= "padding-bottom: 50px" role="form" enctype="multipart/form-data">
        @csrf
            <div class="form-group d-flex justify-content-between mb-3">
                <label for="matric_id" class="w-25 font-weight-bold form-control-lg">Matric ID :</label>
                <input type="text" name="matric_id" class="form-control" id="matric_id" placeholder="Enter your matric ID" required>
            </div>

            <div class="form-group d-flex justify-content-between mb-3">
                <label for="full_name" class="w-25 font-weight-bold form-control-lg">Full Name :</label>
                <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Enter your full name" required>
            </div>

            <div class="form-group d-flex justify-content-between mb-3">
                <label for="email" class="w-25 font-weight-bold form-control-lg">Email :</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group d-flex justify-content-between mb-3">
                <label for="position" class="w-25 font-weight-bold form-control-lg">Position :</label>
                <select type="text" name="position" class="form-select" id="position" required>
                    <option value="" disabled selected>Select your position</option>
                    <option>Catering</option>
                    <option>Publication Promotion</option>
                    <option>Preparation Technical</option>
                    <option>Special Task</option>
                    <option>Sponshorship</option>
                    <option>Public Relation</option>
                </select>
            </div>

            <div class="form-group d-flex justify-content-between mb-3">
                <label for="phone_no" class="w-25 font-weight-bold form-control-lg">Phone No :</label>
                <input type="text" name="phone_no" class="form-control" id="phone_no" placeholder="Enter your phone number" required>
            </div>

            {{-- <div style="display: inline-block;">
                <label for="payment_proof" class="w-25 font-weight-bold form-control-lg">Payment Proof :</label>
                <div class="form-group" style="background-color: #ffffff; width: 100%; padding: 10px; margin-left: 250px; border-radius: 5px; display: inline-block;">
                    <input type="file" name="payment_proof" class="form-control-file" id="payment_proof">
                </div>
            </div> --}}

            {{-- <label for="payment_proof" class="w-25 font-weight-bold form-control-lg">Payment Proof :</label>
            <div class="form-group" style="background-color: #ffffff; width: 500px; padding: 10px; margin-left: 250px; border-radius: 5px;">
                <input type="file" name="payment_proof" class="form-control-file" id="payment_proof">
            </div> --}}


            <div class="d-flex justify-content-between align-items-center pb-4">
                <button onclick="window.location.href='/feecommitteelist'"class="btn btn-lg d-flex align-items-center" style="background-color: #2A6562; color: white;">
                    <i class="bi bi-arrow-left me-2"></i> Back
                </button>

                <button type="submit" onclick="window.location.href='/formcommitteefee'" class="btn btn-lg d-flex align-items-center" style="background-color: #2A6562; color: white;">
                    Submit <i class="bi bi-check me-2"></i>
                </button>
            </div>
        </form>
    </div>
</div>

@endsection

@extends('master.layout')
@section('content')

<div class = "background">

    <h2>Come Join Us!</h2>

    <div class="form-background">

        <form action="addfreeparticipant" method="post" style= "padding-bottom: 50px" role="form" enctype="multipart/form-data">
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
                <label for="kuliyyah" class="w-25 font-weight-bold form-control-lg">Kuliyyah :</label>
                <select type="text" name="kuliyyah" class="form-select" id="kuliyyah" required>
                    <option value="" disabled selected>Select your kuliyyah</option>
                    <option>KOED</option>
                    <option>KICT</option>
                    <option>KOE</option>
                    <option>KAED</option>
                    <option>KENMS</option>
                    <option>AIKOL</option>
                    <option>KOM</option>
                    <option>KOP</option>
                    <option>KOD</option>
                    <option>KOS</option>
                    <option>KAHS</option>
                    <option>KON</option>
                    <option>KIRKHS</option>
                </select>
            </div>

            <div class="form-group d-flex justify-content-between mb-3">
                <label for="phone_no" class="w-25 font-weight-bold form-control-lg">Phone No :</label>
                <input type="text" name="phone_no" class="form-control" id="phone_no" placeholder="Enter your phone number" required>
            </div>

            <div class="d-flex justify-content-between align-items-center pb-4">
                <button onclick="window.location.href='/freeparticipantslist'"class="btn btn-lg d-flex align-items-center" style="background-color: #2A6562; color: white;">
                    <i class="bi bi-arrow-left me-2"></i> Back
                </button>

                <button type="submit" onclick="window.location.href='/formparticipantfree'" class="btn btn-lg d-flex align-items-center" style="background-color: #2A6562; color: white;">
                    Submit <i class="bi bi-check me-2"></i>
                </button>
            </div>
        </form>
    </div>
</div>

@endsection

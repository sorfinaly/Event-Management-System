@extends('master.layout')
@section('content')

<div class = "background">

<h2>Come Join Us!</h2>

    <div class="form-background">

        <form style= "padding-bottom: 50px">
            <div class="form-group d-flex justify-content-between mb-3">
            <label for="exampleFormControlInput1" class="w-25 font-weight-bold form-control-lg">Email address</label>
            <input type="email" class="form-control " id="exampleFormControlInput1" placeholder="Enter your email address">
            </div>

            <div class="form-group d-flex justify-content-between mb-3">
                <label for="matricId" class="w-25 font-weight-bold form-control-lg">Matric ID</label>
                <input type="number" class="form-control" id="matricId" placeholder="Enter your matric ID">
            </div>

            <div class="form-group d-flex justify-content-between mb-3">
                <label for="fullName" class="w-25 font-weight-bold form-control-lg">Full name</label>
                <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
            </div>

            <div class="form-group d-flex justify-content-between mb-3">
                <label for="kulliyyah" class="w-25 font-weight-bold form-control-lg">Kulliyyah :</label>
                <select class="form-control " id="kulliyyah">
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
                <label for="phoneNo" class="w-25 font-weight-bold form-control-lg">Phone number</label>
                <input type="tel" class="form-control" id="phoneNo" placeholder="Enter your phone number">
            </div>




            {{-- </div> #use for event details
            <div class="form-group d-flex justify-content-between form-control-lg">
            <label for="exampleFormControlTextarea1" class="w-25 font-weight-bold">Example textarea</label>
            <textarea class="form-control " id="exampleFormControlTextarea1" rows="3"></textarea>
            </div> --}}
        </form>


        <div class="d-flex justify-content-between align-items-center pb-4">
            <button class="btn btn-lg d-flex align-items-center" style="background-color: #2A6562; color: white;">
              <i class="bi bi-arrow-left me-2"></i> Back
            </button>
            <form>
              </form>
            <button class="btn btn-lg d-flex align-items-center" style="background-color: #2A6562; color: white;">
              Submit <i class="bi bi-check me-2"></i>
            </button>
          </div>




     </div>
</div>

@endsection


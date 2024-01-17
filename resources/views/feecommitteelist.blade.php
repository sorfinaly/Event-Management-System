@extends('master.layout')
@section('content')

<div class = "background">

<h2>List Of Committee</h2>

    <div class="form-background">

        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">Matric ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Position</th>
                <th scope="col">Phone No</th>
              </tr>
            </thead>
            <tbody>

            @foreach ($feecommittees as $feecommittee)
             <tr>
                <td>{{ $feecommittee->matric_id }}</td>
                <td>{{ $feecommittee->full_name }}</td>
                <td>{{ $feecommittee->email }}</td>
                <td>{{ $feecommittee->position }}</td>
                <td>{{ $feecommittee->phone_no }}</td>
             </tr>
            @endforeach

              {{-- <tr>
                <td>2111362</td>
                <td>Shafiqah Ghazali</td>
                <td>cqaghazali88@gmail.com</td>
                <td>KICT</td>
                <td>0132624696</td>
              </tr>
              <tr>
                <td>2112100</td>
                <td>Ainul Mardhiah</td>
                <td>ainulmrdh@gmail.com</td>
                <td>KICT</td>
                <td>0136059225</td>
              </tr>
              <tr>
                <td>21117850</td>
                <td>Azza Batrisyia</td>
                <td>azzabat87@gmail.com</td>
                <td>KICT</td>
                <td>0112848148</td>
              </tr> --}}
            </tbody>
          </table>

        <div class="d-flex justify-content-between align-items-center pb-4">
            <button onclick="window.location.href='/eventdetails'"class="btn btn-lg d-flex align-items-center" style="background-color: #2A6562; color: white;">
              <i class="bi bi-arrow-left me-2"></i> Back
            </button>
            <form>
              </form>
            <button onclick="window.location.href='/formcommitteefee'" class="btn btn-lg d-flex align-items-center" style="background-color: #2A6562; color: white;">
              Add New Committee <i class="bi bi-check me-2"></i>
            </button>
          </div>

     </div>
</div>

@endsection

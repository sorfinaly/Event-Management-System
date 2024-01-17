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
                <th scope="col">Kuliyyah</th>
                <th scope="col">Phone No</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($freecommittee as $freecommitee)
                    <tr>
                        <td>{{ $freecommittee->matric_id }}</td>
                        <td>{{ $freecommittee->full_name }}</td>
                        <td>{{ $freecommittee->email }}</td>
                        <td>{{ $freecommittee->kuliyyah }}</td>
                        <td>{{ $freecommittee->phone_no }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

      <div class="d-flex justify-content-between align-items-center pb-4">
          <button onclick="window.location.href='/eventdetails'"class="btn btn-lg d-flex align-items-center" style="background-color: #2A6562; color: white;">
            <i class="bi bi-arrow-left me-2"></i> Back
          </button>
          <form>
            </form>
          <button onclick="window.location.href='/formparticipantfree'" class="btn btn-lg d-flex align-items-center" style="background-color: #2A6562; color: white;">
            Add New Committee <i class="bi bi-check me-2"></i>
          </button>
        </div>

   </div>
</div>

@endsection

@extends('master.layout')

@section('content')
   <div class="background">
      <h2>{{ $event->event_name }}</h2>
      <div class="form-background">
         <h2>{{ $event->event_name }}</h2>
         <p>Event Date: {{ $event->event_date }}</p>
         <!-- Display other event details -->
      </div>
   </div>
@endsection

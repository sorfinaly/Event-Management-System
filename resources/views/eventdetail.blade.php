@extends('master.layout')

@section('content')


<div class = "background">
      <h2><a href="{{ route('eventdetail', ['id' => $event->id]) }}">{{ $event->event_name }}</a></h2>

      <div class="form-background">
        @php
                        // Ensure $event->event_date is a Carbon instance
                        $eventDate = \Carbon\Carbon::parse($event->event_date);

                        if ($event->priced_event == 'paid') {
                            $pricingInfo = 'RM '.$event->fee;
                        } else {
                            $pricingInfo = 'Free';
                        }
                    @endphp


            <div class="form-row"  style="justify-content: center; display: flex; align-items: center;">
                <div class="form-group col-md-6">
                    <img src="{{ asset('storage/' . $event->event_img) }}" class="img-fluid" alt="{{ $event->event_name }}">
                </div>

                <div class="form-group col-md-6" style="background-color:white; border-radius:30px;" >
                    <div style="padding-top:60px; padding-left:40px; padding-bottom:40px;"><label for="priced-event">Date: <span>{{ $eventDate->format('d-m-Y') }}</span></label></div>
                    <div style="padding-left:40px; padding-bottom:10px;"><label for="priced-event">Time: <span>{{ $event->start_time }} - {{ $event->end_time }}</span></label></div>
                    <div style="padding-left:40px; padding-top:30px;"><label for="priced-event">Price: <span>{{ $pricingInfo }}</span></label></div>
                    <div style="padding-left:40px; padding-top:30px; padding-bottom:30px;"><label for="priced-event">Contact: <span>{{ $event->event_email }}</span></label></div>
                </div>

            </div>

            {{-- <div class="form-row"  style="margin-bottom: 20px;"> --}}

            <div style="background-color:white ; margin-top:10px; border-radius:30px; padding-top:5px; padding-left:20px; padding-bottom:5px;">
                <div style="margin-top:20px; padding-bottom:10px; padding-left:20px;" ><label style="font-weight: bold;">Details</label></div>
                <div><p style="padding:20px;">{{ $event->event_description}}</p></div>
            </div>

            <div class="d-flex justify-content-between align-items-center pb-4">
                <button onclick="window.location.href='/homepage'" class="btn btn-lg d-flex align-items-center" style="background-color: #2A6562; color: white;">
                    <i class="bi bi-arrow-left me-2"></i> Back
                </button>

                <div class="d-flex justify-content-center align-items-center pb-4" style="margin-top:25px;">
                    <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure you want to delete this event?')" type="submit" id="submit" class="btn btn-lg d-flex align-items-center" style="background-color: #ff0000; color: white;">
                            Delete Event
                        </button>
                    </form>
                </div>

                <div class="d-flex justify-content-center align-items-center pb-4">
                    @if ($event->priced_event == 'free')
                    <button onclick="window.location.href='/freeparticipantslist'" class="btn btn-lg d-flex align-items-center" style="background-color: #2A6562; color: white;">
                        Join as participant <i class="bi bi-check me-2"></i>
                    </button>
                    @else
                    <button onclick="window.location.href='/feeparticipantslist'" class="btn btn-lg d-flex align-items-center" style="background-color: #2A6562; color: white;">
                        Join as participant <i class="bi bi-check me-2"></i>
                    </button>
                    @endif
                </div>
            </div>

         </div>
      </div>
</div>

@endsection

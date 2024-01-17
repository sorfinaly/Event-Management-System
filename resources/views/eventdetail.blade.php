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



            <div class="form-row"  style="margin-bottom: 20px;">
                <div class="form-group col-md-6">
                    <img src="{{ asset('storage/' . $event->event_img) }}" class="img-fluid" alt="{{ $event->event_name }}">
                </div>

                <div class="form-group col-md-6" style="background-color:white; border-radius:30px;" >
                    <div style="padding-top:60px; padding-left:40px; padding-bottom:40px;"><label for="priced-event">Date: <span>{{ $eventDate->format('d-m-Y') }}</span></label></div>
                    <div style="padding-left:40px; padding-bottom:10px;"><label for="priced-event">Time: <span>{{ $event->start_time }} - {{ $event->end_time }}</span></label></div>
                    <div style="padding-left:40px; padding-top:30px;"><label for="priced-event">Price: <span>{{ $pricingInfo }}</span></label></div>
                </div>

            </div>

            <div style="background-color:white ; border-radius:30px; padding-top:5px; padding-left:20px; padding-bottom:5px;">
                <div style="margin-top:40px; padding-bottom:10px; padding-left:20px;" ><label style="font-weight: bold;">Details</label></div>
                <p style="padding:20px;">{{ $event->event_description}}</p>
            </div>


      </div>
</div>
@endsection

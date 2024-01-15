


@extends('master.layout')
@section('content')

<style>
    /* Custom CSS for createevent.blade.php */

    /* Increase font size of labels */
    label {
        font-size: 15px; /* Adjust the font size as needed */
    }
</style>


<div class = "background">

<h2>Let's Create Event in IIUM!</h2>

    <div class="form-background">

        <form method="post" action="/createevent" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="event-name">Event Name</label>
                    <input type="text" class="form-control" id="event-name" name="event_name" placeholder="Enter event name">
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="priced-event">Priced Event</label>
                    <select id="priced-event" class="form-control" name="priced_event">
                        <option value="free">Free</option>
                        <option value="paid">Paid</option>
                    </select>
                </div>
                <div class="form-group col-md-6" id="fee-container" style="display: none;">
                    <label for="fee">Fee (RM):</label>
                    <input type="number" class="form-control" id="fee" name="fee">
                </div>
            </div>



            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="event-date">Event Date</label>
                <input type="date" class="form-control" id="event-date" name='event_date'>
              </div>

                <div  class="form-group col-md-6">
                    <label for="location">Location</label>
                    <input type="text"  class="form-control" id="location" placeholder="Enter location" name="location">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 ">
                    <label for="start-time">Start Time</label>
                    <input type="time" class="form-control" id="start-time" name="start_time">
                </div>

                <div class="form-group col-md-6  ">
                    <label for="end-time">End Time</label>
                    <input type="time"  class="form-control" id="end-time" name='end_time'>
                </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="event-category">Event Category</label>
                <select id="event-category" class="form-control" name='event_category'>
                    <option value="academic">Academic</option>
                    <option value="cultural">Cultural</option>
                    <option value="sports">Sports</option>
                    <option value="career">Career Development</option>
                    <option value="social">Social</option>
                    <option value="charity">Charity/Community Service</option>
                    <option value="science">Science and Research</option>
                    <option value="technology">Technology</option>
                    <option value="arts">Arts and Music</option>
                    <option value="workshop">Workshops and Seminars</option>
                    <option value="health">Health and Wellness</option>
                  </select>
              </div>
              <div class="form-group col-md-6">
                <label for="event-format">Event Format</label>
                <select id="event-format" class="form-control" name='event_format'>
                    <option value="conference">Conference</option>
                    <option value="workshop">Workshop</option>
                    <option value="seminar">Seminar</option>
                    <option value="lecture">Lecture</option>
                    <option value="panelDiscussion">Panel Discussion</option>
                    <option value="symposium">Symposium</option>
                    <option value="presentation">Presentation</option>
                    <option value="competition">Competition</option>
                    <option value="training">Training</option>
                    <option value="exhibition">Exhibition</option>
                    <option value="performance">Performance</option>
                    <option value="socialGathering">Social Gathering</option>
                    <option value="hackathon">Hackathon</option>
                    <option value="fundraiser">Fundraiser</option>
                  </select>
              </div>
            </div>

            <div class="form-group">
                <label for="event-description">Event Description</label>
                <textarea class="form-control" id="event-description" rows="3" name='event_description'></textarea>
            </div>
            <div class="form-group" style="margin-bottom: 40px; margin-top: 30px;text-align: center;">
                <div style="display: flex; flex-direction: column; align-items: center; border: 4px dashed #000; padding: 50px;">
                    <div style="padding: 50px;">
                        <p class="text-center">Drag and drop an image<br>Drag and drop or select an image.</p>
                        <input type="file" class="form-control-file" id="img" name='event_img' style="margin-top: 10px; margin-left:100px;">
                    </div>
                </div>
            </div>


            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
        </form>




     </div>
</div>
<script>
   document.addEventListener('DOMContentLoaded', function () {
    // Get the elements
    var pricedEventSelect = document.getElementById('priced-event');
    var feeContainer = document.getElementById('fee-container');
    var feeInput = document.getElementById('fee');

    // Add event listener to pricedEventSelect
    pricedEventSelect.addEventListener('change', function () {
        // Toggle visibility of the fee input based on selected option
        if (pricedEventSelect.value === 'paid') {
            feeContainer.style.display = 'block';
        } else {
            feeContainer.style.display = 'none';
            feeInput.value = ''; // Reset fee input when switching to 'free'
        }
    });
});

</script>

@endsection


@extends('master.layout')
@section('content')


<div class = "background">

<h2>Come Join Us!</h2>

    <div class="form-background">

        <form method="POST" action="{{ route('createevent.store') }}">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="event-name">Event Name</label>
                <input type="text" class="form-control" id="event-name" placeholder="Enter event name">
                </div>
                <div class="form-group col-md-6">
                    <label for="priced-event">Priced Event</label>
                    <select id="priced-event" class="form-control">
                    <option value="free">Free</option>
                    <option value="paid">Paid</option>
                    </select>
                </div>
            </div>

            <div class="form-group" id="fee-container" style="display: none;">
              <label for="fee">Fee (RM):</label>
              <input type="number" class="form-control" id="fee">
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="event-date">Event Date</label>
                <input type="date" class="form-control" id="event-date">
              </div>

                <div  class="form-group col-md-6">
                    <label for="location">Location</label>
                    <input type="text"  class="form-control" id="location" placeholder="Enter location">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 ">
                    <label for="start-time">Start Time</label>
                    <input type="time" class="form-control" id="start-time">
                </div>

                <div class="form-group col-md-6  ">
                    <label for="end-time">End Time</label>
                    <input type="time"  class="form-control" id="end-time">
                </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="event-category">Event Category</label>
                <select id="event-category" class="form-control">
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
                <select id="event-format" class="form-control">
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
                <textarea class="form-control" id="event-description" rows="3"></textarea>
            </div>
            <div class="form-group d-flex" style = "margin-bottom:40px;">
                <div style="margin-top: 10px; display: center-align; justify-content: space-between; align-items: center; border: 4px dashed #000; padding: 50px;">
                    <div style="padding: 50px; ">
                        <p class="text-center">Drag and drop a file<br>
                           Drag and drop or select an image or pdf file.</p>
                        <div style="margin-left: 120px; margin-right: auto;"><input type="file" class="form-control-file" id="receipt"></div>
                    </div>
                </div ">
            </div>

            <button type="submit" id = "submit" class="btn btn-primary">Submit</button>
        </form>




     </div>
</div>

@endsection


@extends('master.layout')
@section('content')


<div class = "background">

<h2>Come Join Us!</h2>

    <div class="form-background">

        <form>
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
                  </select>
              </div>
              <div class="form-group col-md-6">
                <label for="event-format">Event Format</label>
                <select id="event-format" class="form-control">
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

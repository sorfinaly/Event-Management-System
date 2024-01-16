@extends('master.layout')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2 style="font-size: 90px">Centralized Event System <span>in IIUM</span></h2>
          <div class="d-flex justify-content-center justify-content-lg-start" style="margin-left:90px;">
            <a href="/" class="btn-get-started">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/homepage.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

        </div>
      </div>

    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto float-right">
        <div class="card mb-2" style="border-radius: 10em; background: linear-gradient(to right, #168276, #168276);">
            <div class="card-body p-2">
                <form  id="searchForm" action="{{ route('search') }}" method="GET">
                    @csrf
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control form-control-sm rounded bg-transparent text-white" id="search" placeholder="Search Event" aria-label="Search Event" aria-describedby="basic-addon2" style="height: 35px;" />
                    <span class="input-group-text border-0" id="basic-addon2">
                        <button class="search" onclick="performSearch()" style="font-size: 15px;"> <i class="fa fa-search" style="font-size: 25px; color:#e79494"></i> </button>
                    </span>
                </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        function performSearch() {
            // Get the search input value
            const searchTerm = document.getElementById('search').value;

            // Perform the search logic, e.g., redirect to a search route with the search term
            window.location.href = `/search?query=${searchTerm}`;
        }
    </script>



      <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact-mf">
                            <div id="contact" class="box-shadow-full">
                                <h5 class="title-left"> List of Event (temporary table)</h5>
                                <div class="row">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Event Name</th>
                                                    <th scope="col">Priced Event</th>
                                                    <th scope="col">Fee</th>
                                                    <th scope="col">Event Date</th>
                                                    <th scope="col">Location</th>
                                                    <th scope="col">Start Time</th>
                                                    <th scope="col">End Time</th>
                                                    <th scope="col">Event Category</th>
                                                    <th scope="col">Event Format</th>
                                                    <th scope="col">Event Description</th>
                                                    <th scope="col">Event Img</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($events as $event)
                                                    <tr>
                                                        <td>{{ $event->event_name }}</td>
                                                        <td>{{ $event->priced_event }}</td>
                                                        <td>{{ $event->fee }}</td>
                                                        <td>{{ $event->event_date }}</td>
                                                        <td>{{ $event->location }}</td>
                                                        <td>{{ $event->start_time }}</td>
                                                        <td>{{ $event->end_time }}</td>
                                                        <td>{{ $event->event_category }}</td>
                                                        <td>{{ $event->event_format }}</td>
                                                        <td>{{ $event->event_description }}</td>
                                                        <td>{{ $event->event_img }}</td>
                                                    </tr>

                                                    @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>


 <section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2 style="text-align: center;">EVENT IN IIUM</h2>
            <p>Your one-stop platform for seamless event management. Click on specific event to join as a committee member to help shape memorable experiences or to participate in diverse events. </p>
        </div>
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
            <div>
                <ul class="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-this-month">This Month</li>
                    <li data-filter=".filter-this-year">This Year</li>
                    <li data-filter=".filter-past">Past</li>
                </ul><!-- End Portfolio Filters -->
            </div>
            <div class="row gy-4 portfolio-container">
                @foreach ($events as $index => $event)
                    @php
                        // Ensure $event->event_date is a Carbon instance
                        $eventDate = \Carbon\Carbon::parse($event->event_date);
                        $today = \Carbon\Carbon::now();

                        if ($eventDate->isSameDay($today) ) {
                            $filterClass = 'filter-this-month';
                        } elseif ($eventDate->isSameMonth($today) && $eventDate->isPast()) {
                            $filterClass = 'filter-past';
                        } elseif ($eventDate->isCurrentMonth()) {
                            $filterClass = 'filter-this-month';
                        }
                        elseif ($eventDate->isCurrentYear()) {
                            $filterClass = 'filter-this-year';
                        } else {
                            $filterClass = 'filter-past';
                        }

                        if ($event->priced_event == 'paid') {
                            $pricingInfo = 'RM '.$event->fee;
                        } else {
                            $pricingInfo = 'Free';
                        }
                    @endphp
                    <div class="col-xl-4 col-md-6 portfolio-item {{ $filterClass }}">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('storage/' . $event->event_img) }}" data-gallery="portfolio-gallery-app" class="glightbox">
                                <img src="{{ asset('storage/' . $event->event_img) }}" class="img-fluid" alt="{{ $event->event_name }}">
                            </a>
                            <div class="portfolio-info">
                                <h4 style="color:#168276">{{ $event->event_name }}</h4>
                                <p><span style="font-weight: bold">Date: </span>{{ $eventDate->format('d-m-Y') }}</p>
                                <p><span style="font-weight: bold">Time: </span>{{ $event->start_time }} - {{ $event->end_time }}</p>
                                <p><span style="font-weight: bold">Pricing: </span>{{ $pricingInfo }}</p><br>
                                <p>{{ $event->event_description }}</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->
                @endforeach
            </div><!-- End Portfolio Container -->
        </div>
    </div>
</section><!-- End Portfolio Section -->




  @endsection

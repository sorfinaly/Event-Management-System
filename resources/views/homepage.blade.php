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
            <div class="input-group input-group-sm"> <input type="text" class="form-control form-control-sm rounded bg-transparent text-white" id="search" placeholder="Search Event" aria-label="Search Event" aria-describedby="basic-addon2" style="height: 45px;" /> <span class="input-group-text border-0" id="basic-addon2">
                <button class="search" style="font-size: 18px;"> <i class="fa fa-search" style="font-size: 24px; color:#e79494"></i> </button>
              </span>
            </div>
          </div>
        </div>
      </div>

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



<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-header " >
        <h2 style="text-align: center;">EVENT IN IIUM</h2>
        <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
      </div>
      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
        <div>
          <ul class="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">This Month</li>
            <li data-filter=".filter-product">This Year</li>
            <li data-filter=".filter-branding">Past</li>
          </ul><!-- End Portfolio Filters -->
        </div>
        <div class="row gy-4 portfolio-container">

          @foreach ($events as $index => $event)
            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{ asset('storage/' . $event->event_img) }}" data-gallery="portfolio-gallery-app" class="glightbox">
                  <img src="{{ asset('storage/' . $event->event_img) }}" class="img-fluid" alt="{{ $event->event_name }}">
                </a>
                <div class="portfolio-info">
                  {{-- <h4><a href="{{ route('event.details', ['id' => $event->id]) }}" title="More Details">{{ $event->event_name }}</a></h4> --}}
                  <h4>{{ $event->event_name }}</h4>
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

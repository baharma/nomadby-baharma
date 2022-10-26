@extends('front-end.layout.app')
@section('content')


 <!-- header -->
 <header class="text-center">
    <h1>Explore The <span>Beautiful Word</span>

      <br>
      As Only For <span> One Click</span>
    </h1>
    <p>
      Lets Make your experien moment never <br> forget went you see more
    </p>
    <a href="#" class="btn btn-get-stated px-4 mt-4">
      Get Started
    </a>
  </header>
  <!-- end header -->

  <main>
    <!-- stats -->
    <div class="container">
      <section class="section-stats row justify-content-center" id="stats">
        <div class="col-3 col-md-2 stats-detail">
          <h2>20k</h2>
          <p>Member</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>12k</h2>
          <p>Country</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>4k</h2>
          <p>Hotels</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>80</h2>
          <p>Partner</p>
        </div>
      </section>
    </div>
    <section class="section-popular" id="popular">
      <div class="container">
        <div class="row">
          <div class="col text-center section-popular-heading">
            <h2>Wisata Popular</h2>
            <p>Something that you never try <br>
              before in this world
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- end stats -->

    <!-- popular content -->
    <section class="section-popular-content" id="popularContent">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="
              background-image: url('{{('nomads-desaint-main/img/kota-denpasar-header.jpg')}}');">
              <div class="travel-country">
                Indonesia
              </div>
              <div class="travel-location">
                Denpasar, Renon
              </div>
              <div class="travel-button mt-auto">
                <a href="#" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="
              background-image: url('{{asset('nomads-desaint-main/img/Kuta_Beach.jpg')}}');">
              <div class="travel-country">
                Indonesia
              </div>
              <div class="travel-location">
                Kuta, Pantai Kuta
              </div>
              <div class="travel-button mt-auto">
                <a href="#" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="
              background-image: url('{{asset('nomads-desaint-main/img/nusadua.jpg')}}');">
              <div class="travel-country">
                Indonesia
              </div>
              <div class="travel-location">
                Nusa Dua, Pantai Nusa Dua
              </div>
              <div class="travel-button mt-auto">
                <a href="#" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>

          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="
              background-image: url('{{asset('nomads-desaint-main/img/pura-ulun-danu-bratan-temple-bali-indonesia_30824-288.jpg')}}');">
              <div class="travel-country">
                Indonesia
              </div>
              <div class="travel-location">
                Bedugul, danau Beratan
              </div>
              <div class="travel-button mt-auto">
                <a href="#" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- End popular content -->


    <!-- networt -->
    <section class="section-networks">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Our Networks</h2>
            <p>
              Companies are trusted us
              <br>
              more than just a trip
            </p>
          </div>
          <div class="col-md-8 text-center">
            <img src="{{asset('nomads-desaint-main/img/logo.png')}}" alt="" class="img-partner">
            <img src="{{asset('nomads-desaint-main/img/Visa_Logo.png')}}" alt="" class="img-partner">
            <img src="{{asset('nomads-desaint-main/img/58428d79a6515b1e0ad75ab2.png')}}" alt="" class="img-partner">
          </div>
        </div>
      </div>
    </section>

    <section class="section-testimonial-heading" id="testimonianialHeading">
      <div class="container">
        <div class="row">
          <div class=" text-center">
            <h2>They Are Loving Us</h2>
            <p>
              Moments Were giving them
              <br>
              the best experience
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-testimonial-content" id="testimonialContent">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="https://picsum.photos/200"  alt="User" class="md-4 rounded-circle">
                <h3 class="md-4">Angga Riscky</h3>
                <p class="testimonial">
                  "Thas was good!! that make me more holiday live then ever my step is fun"
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">
                trip to Ubut
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="https://picsum.photos/200"  alt="User" class="md-4 rounded-circle">
                <h3 class="md-4">Angga Riscky</h3>
                <p class="testimonial">
                  "Thas was good!! that make me more holiday live then ever my step is fun"
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">
                trip to Ubut
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="https://picsum.photos/200"  alt="User" class="md-4 rounded-circle">
                <h3 class="md-4">Angga Riscky</h3>
                <p class="testimonial">
                  "Thas was good!! that make me more holiday live then ever my step is fun"
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">
                trip to Ubut
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
              I Need Help
            </a>
            <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
              Get Started
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection
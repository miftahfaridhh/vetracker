@extends('layouts.master')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animated fadeInDown">Welcome to <span>VeTracker</span></h2>
            <p class="animated fadeInUp">Platform untuk mendeteksi kendaraan anda dengan menggunakan VeTracker Devices, selalu dapatkan lokasi kendaraan anda secara realtime.</p>
            <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animated fadeInDown">VeTracker Devices</h2>
            <p class="animated fadeInUp">Adalah produk dari VeTracker yang berupa sebuah piranti yang diletakkan dikendaraan anda, data lokasi anda bisa dilihat pada VeTracker Location</p>
            <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animated fadeInDown">VeTracker Location</h2>
            <p class="animated fadeInUp">Adalah produk dari VeTracker yang berupa halaman website yang dapat memberikan update lokasi kendaraan anda secara realtime.</p>
            <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
          </div>
        </div>
      </div>

    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
          <a href="https://www.youtube.com/watch?v=6AqMNT8e7tI" class="glightbox play-btn mb-4"></a>
        </div>

        <div class="col-xl-5 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
          <h3>VeTracker</h3>
          <p>Sistem veTracker memiliki tujuan untuk memberikan kenyamanan kepada user untuk mendapat lokasi dari kendaraan pribada user. Hal ini dicapai dengan memunggunakan beberapa sistem.</p>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-fingerprint"></i></div>
            <h4 class="title"><a href="">Sistem yang Handal</a></h4>
            <p class="description">Sistem veTracker menggunakan server Antares yang dapat mengirimkan data lokasi kepada user secara realtime.</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-gift"></i></div>
            <h4 class="title"><a href="">Sistem yang Aman</a></h4>
            <p class="description">Sistem veTracker menggunakan sistem akun dimana hanya user yang memiliki identitas akun yang dapat melacak kendaraan.</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-atom"></i></div>
            <h4 class="title"><a href="">Sistem yang Nyaman</a></h4>
            <p class="description">Website veTracker memiliki UI yang mudah untuk dinavigasi oleh user.</p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container-fluid">

      <div class="section-title">
        <h2>Services</h2>
        <h3>Check our <span>Services</span></h3>
      </div>

      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="row">
            <div class="col-lg-6 col-md-6 icon-box">
              <div class="icon"><i class="ri-stack-line"></i></div>
              <h4 class="title"><a href="">VeTracker Devices</a></h4>
              <p class="description">Adalah produk dari VeTracker yang berupa sebuah piranti yang diletakkan dikendaraan anda, data lokasi anda bisa dilihat pada VeTracker Location.</p>
            </div>
            <div class="col-lg-6 col-md-6 icon-box">
              <div class="icon"><i class="ri-fingerprint-line"></i></div>
              <h4 class="title"><a href="">VeTracker Location</a></h4>
              <p class="description">Adalah produk dari VeTracker yang berupa halaman website yang dapat memberikan update lokasi kendaraan anda secara realtime.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->

</main><!-- End #main -->

@stop
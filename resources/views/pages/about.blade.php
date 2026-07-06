@extends('layouts.app')

@section('content')
    
<section>
    <div class=" shadow-lg d-flex py-5" style="background-image: -webkit-image-set(
                                                url('{{ asset('imgs/avif/partner-sf.avif') }}') type('image/avif') 1x,
                                                url('{{ asset('imgs/partner-sf.jpg') }}') type('image/jpeg') 1x
                                                );
                                                background-size: cover; background-repeat: no-repeat; background-position: center; min-height: 320px;">
        
</section>

<!-- ---------------Contact section----------------- -->
<section id="mySection" loading="lazy py-5" class=" shadow-lg d-flex shadow py-2">
  <div class="container my-5 pt-5">
    <div class="row g-5 d-flex">
      <!-- Intro & Info -->
      <div class="col-md-6 mx-auto my-5">
        <h2 class="fw-bold text-success display-5">Get in Touch</h2>
        <p class="text-muted fs-5">We’d love to hear from you. Whether you’re planning your big day or just want to send flowers that say something special, our team is here to help.</p>

        <ul class="list-unstyled mt-4 text-dark">
          <li class="mb-2">
            <i class="bi bi-geo-alt-fill text-success me-2"></i>
            7 Wrightson Way,
            Pukekohe,
            Auckland, NZ
          </li>
          <li class="mb-2">
            <i class="bi bi-telephone-fill text-success me-2"></i>
            <a href="tel:+6400000000" class="text-decoration-none text-dark">09-238 2235</a>
          </li>
          <li>
            <i class="bi bi-envelope-fill text-success me-2"></i>
            <a href="mailto:hello@designerflower.com" class="text-decoration-none text-dark">designerflowers@xtra.co.nz</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="shadow-lg d-flex" id="promo-section">
    <p class="m-auto text-white text-bold fs-5 py-2"></p>
</section>

<section loading="lazy" class="div-with-background shadow-lg d-flex shadow py-2">
  <div class="container py-5 my-5">
    <div class="row align-items-center g-5">
      <!-- Text Content -->
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-secondary" data-aos="fade-right" data-aos-delay="400">Proud to be Pukekohe Local</h1>
        <p class="lead text-muted mt-3" data-aos="fade-right" data-aos-delay="200">
          At <strong>Designer Flower NZ</strong>, we believe flowers are more than decoration — they're a statement of love, celebration, and style.
        </p>
        <p class="fs-5 text-dark" data-aos="fade-right" data-aos-delay="400">
          From elegant wedding arrangements to thoughtful floral gifts for any occasion, our expert florists craft stunning bouquets with care and creativity.
        </p>
        <a href="tel:+1234567890" class="call-second btn-primarybtn position-relative call-btn btn button-intro px-4 py-2 mt-3">
        <span class="default-text px-3 fs-4">Call Now</span>
        <span class="hover-text px-3 fs-4">09-238 2235</span>
      </a>
      </div>

      <!-- Optional Image -->
      <div class="col-lg-6 text-center">
        <img src="{{ asset('imgs/avif/main-img-staff.avif') }}" alt="Florist at work" class="img-fluid rounded shadow" style="max-height: 450px;">
      </div>
    </div>
  </div>
</section>


<section class="py-5 bg-light" id="location">
  <div class="container pb-5">
    <div class="text-center mb-4">
      <h2 class="fw-bold text-dark display-5 pt-5">Our Location</h2>
      <hr class="w-25 mx-auto">
      <p class="text-muted fs-5">Visit our shop or plan your event consultation in person</p>
    </div>

    <div class="ratio ratio-16x9 shadow-lg rounded pb-4 w-75 mx-auto">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2842.4487237447665!2d174.9107489755662!3d-37.21009489977895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d12aaecb1b83221%3A0x33903bcc01003f40!2s7%20Wrightson%20Way%2C%20Pukekohe%202120!5e1!3m2!1sen!2snz!4v1747187606313!5m2!1sen!2snz" 
        width="600" 
        height="450" 
        style="border:0; border-radius: 0.5rem;"
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>


<section class="shadow-lg py-5 shadow"
    style="background-color: #58A1A7;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: bottom;
    padding-top: 50px;">
    
    <div class="container my-5 py-5">
        <h2 class="text-center pt-5 text-white fw-bold display-3" style="font-family: Allura;">
            Ready to Bloom Your Floral Vision?
        </h2>
        <p class="text-center pt-5 text-white fw-bold fs-3 ">
            Let us craft bespoke you a floral design that will bring your wedding, event, or everyday moment to life with natural beauty and artistic flair.
        </p>
        <div class="d-flex my-4 pb-5 w-100 h-100">
            <a href="#contact" class="mt-3 px-3 py-2 btn m-auto btn-light">Call Now <i class="fas ms-3 me-1  fa-phone-alt phone-ring"></i> </a></a>
        </div>
    </div>
</section>

<div class="d-none d-md-block">
      <img src="{{ asset('imgs/about-flower.png') }}"
           class="img-fluid mx-auto"
           alt="flower bunch pink"
           height="507"
           width="400"

           style="width: 18%; left: 0%; top: 200%; height: auto; object-fit: cover; position: absolute; z-index: 10 !important; opacity:0.9;">

       <img src="{{ asset('imgs/about-flower.png') }}"
           class="img-fluid mx-auto"
           alt="flower bunch pink"
           height="507"
           width="400"
           style="width: 20%; right: 0%; top: 330%; height: auto; object-fit: cover; position: absolute; z-index: 10 !important; opacity:0.95; transform: rotate(180deg);">
       
</div>

@endsection
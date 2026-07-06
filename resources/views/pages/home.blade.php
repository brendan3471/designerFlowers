@extends('layouts.app')

@section('content')
    <!-- ---------------Main intro section----------------- -->
<section class="shadow-lg d-flex" id="main-intro">
  <div class="row w-100">
    <div class="intro-section-text w-75 m-auto align-center col-12 col-md-12">
      <h1 class="text-white text-center text-shadow display-2 mb-5 main-intro-text"> Bringing Your Special Moments to Life in Pukekohe</h1>
      
      <div class="d-flex w-100">
         <a href="tel:+1234567890" class="align-center call-first mx-auto position-relative call-second d-block call-btn btn btn-light main-p-text px-4 py-2 mt-3">
        <span class="default-text px-3 fs-4">Call Now</span>
        <span class="hover-text px-3 fs-4">09-238 2235</span>
      </a>
      </div>
      <div class=" d-inline-block p-5">
          <img src="{{ asset('imgs/intro-side.PNG') }}"
               class="img-fluid mx-auto end-0"
               alt="flower bunch pink"
               height="1024"
               width="1024"
               data-aos="fade-left" 
               data-aos-delay="2200"
               style="width: 25%; top: 80%; height: auto; object-fit: cover; position: absolute; transform: rotate(315deg);">
           
            <img src="{{ asset('imgs/intro-side.PNG') }}"
               class="img-fluid mx-auto start-0"
               alt="flower bunch pink"
               height="1024"
               width="1024"
               data-aos="fade-right" 
               data-aos-delay="2200"
               style="width: 25%; top: 80%; height: auto; object-fit: cover; position: absolute; transform: rotate(45deg);">
        </div>
    </div>
  </div>
</section>


<!-- ---------------Intro section----------------- -->
<section id="mySection" loading="lazy" class="div-with-background shadow-lg d-flex shadow py-2">
  <div class="container py-5 my-5">
    <div class="row align-items-center g-5">
      <!-- Text Content -->
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-secondary" data-aos="fade-right" data-aos-delay="400">Beautiful Blooms, Thoughtfully Designed</h1>
        <p class="lead text-muted mt-3" data-aos="fade-right" data-aos-delay="600">
          At <strong>Designer Flower NZ</strong>, we believe flowers are more than decoration — they're a statement of love, celebration, and style.
        </p>
        <p class="fs-5 text-dark">
          From elegant wedding arrangements to thoughtful floral gifts for any occasion, our expert florists craft stunning bouquets with care and creativity.
        </p>
        <a href="tel:+1234567890" class="call-second btn-primarybtn position-relative call-btn btn button-intro px-4 py-2 mt-3">
        <span class="default-text px-3 fs-4">Call Now</span>
        <span class="hover-text px-3 fs-4">09-238 2235</span>
      </a>
      </div>

      <!-- Optional Image -->
      <div class="col-lg-6 text-center">
        <img src="{{ asset('imgs/avif/main-img-flower.avif') }}" alt="Florist at work" class="img-fluid rounded shadow" style="max-height: 450px;">
      </div>
    </div>
  </div>
</section>

<section class="shadow-lg d-flex" id="promo-section">
    <p class="m-auto text-white text-bold fs-5 py-2">Example Promotional text 20% off!</p>
</section>

<section class="py-5 bg-light" id="promotions">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold display-5 text-success">Seasonal Promotions</h2>
      <p class="text-muted fs-5">Brighten someone's day with fresh floral deals</p>
    </div>

    <div class="row g-4">
      <!-- Promotion 1 -->
      <div class="col-md-4">
        <div class="card shadow-sm h-100 border-0" data-aos="fade-up" data-aos-delay="200">
          <img src="{{ asset('imgs/avif/promo-img1.avif') }}" class="card-img-top" alt="Spring Bouquets">
          <div class="card-body text-center">
            <h5 class="card-title text-success fw-bold">Spring Bouquets - 20% Off</h5>
            <p class="card-text w-75 mx-auto">Celebrate the season with colorful blooms. Limited time only!</p>
            <a href="#shop" class="btn button-promo text-white fw-bold">Shop Now</a>
          </div>
        </div>
      </div>

      <!-- Promotion 2 -->
      <div class="col-md-4">
        <div class="card shadow-sm h-100 border-0" data-aos="fade-up" data-aos-delay="400">
          <img src="{{ asset('imgs/avif/promo-img2.avif') }}" class="card-img-top" alt="Mother's Day Special">
          <div class="card-body text-center">
            <h5 class="card-title text-success fw-bold">Mother’s Day Special</h5>
            <p class="card-text w-75 mx-auto">Surprise Mom with a hand-tied arrangement and free delivery!</p>
            <a href="#shop" class="btn button-promo text-white fw-bold">View Offer</a>
          </div>
        </div>
      </div>

      <!-- Promotion 3 -->
      <div class="col-md-4">
        <div class="card shadow-sm h-100 border-0" data-aos="fade-up" data-aos-delay="600">
          <img src="{{ asset('imgs/avif/promo-img3.avif') }}" class="card-img-top" alt="Weekly Flower Deals">
          <div class="card-body text-center">
            <h5 class="card-title text-success fw-bold">Weekly Flower Deals</h5>
            <p class="card-text w-75 mx-auto">Check back every week for new surprise discounts!</p>
            <a href="#shop" class="btn button-promo text-white fw-bold">Explore Deals</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-white" id="partner-silver-fern">
  <div class="container my-5">
    <div class="row align-items-center g-5">
      <!-- Text Content -->
      <div class="col-md-6">
        <h2 class="fw-bold text-dark" data-aos="fade-right" data-aos-delay="600">In Collaboration with Silver Fern Marquees</h2>
        <p class="text-muted fs-5" data-aos="fade-right" data-aos-delay="800">
          At <strong>Designer Flower</strong>, we’re proud to be the Floral provider of <strong>Silver Fern Marquees</strong>, experts in premium marquee hire for weddings, garden parties, and corporate events across the region.
        </p>
        <a href="https://silverfernmarquees.com" target="_blank" class="btn btn-dark px-4 py-2">Visit Silver Fern Marquees</a>
      </div>

      <!-- Logo / Image -->
      <div class="col-md-6 text-center">
        <a href="https://silverfernmarquees.com" target="_blank">
          <img src="{{ asset('imgs/Logo.jpg') }}" alt="Silver Fern Marquees Logo" class="img-fluid" style="max-height: 160px;">
        </a>
      </div>
    </div>
  </div>
</section>

<section>
    <div class=" shadow-lg d-flex py-5" style="background-image: -webkit-image-set(
                                                url('{{ asset('imgs/avif/partner-sf.avif') }}') type('image/avif') 1x,
                                                url('{{ asset('imgs/partner-sf.jpg') }}') type('image/jpeg') 1x
                                                );
                                                background-size: cover; background-repeat: no-repeat; background-position: center; min-height: 320px;">
        <div class="w-100 d-flex m-auto " style="opacity: 0.9;">
            <a class="btn btn-light fw-bold m-auto d-block" type="button" style="width: 240px;" role="button" href="">View Gallery</a>
        </div>

</section>



<section class="shadow-lg d-flex bg-light py-5">
  <div class="container my-5">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-success display-5">What Our Clients Say</h2>
      <p class="text-muted fs-5">Kind words from our happy couples and thoughtful gift-givers</p>
    </div>

    <div class="row g-4">
      <!-- Testimonial 1 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body">
            <p class="text-muted fst-italic">“Designer Flower created the most breathtaking floral arrangements for our wedding — exactly what I dreamed of and more.”</p>
            <h6 class="fw-bold text-success mb-0">– Olivia & James</h6>
          </div>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body">
            <p class="text-muted fst-italic">“The team was so thoughtful and talented — my mother loved the custom bouquet I had delivered for her birthday.”</p>
            <h6 class="fw-bold text-success mb-0">– Sarah M.</h6>
          </div>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body">
            <p class="text-muted fst-italic">“Professional, kind, and absolutely brilliant at what they do. The flowers were fresh, unique, and styled to perfection.”</p>
            <h6 class="fw-bold text-success mb-0">– Marcus T.</h6>
          </div>
        </div>
      </div>
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


@endsection
<!DOCTYPE HTML>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="description" content="{{ $page->description }}">
  <meta name="keywords" content="{{ $page->keywords }}">
  <meta name="author" content="Designer Flowers">
  <meta http-equiv="content-type" content="width=device-width, initial-scale=1, text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ $page->title }}</title>

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url('/') }}">
  <meta property="og:title" content="{{ $page->title }}">
  <meta property="og:description" content="{{ $page->description }}">
  <meta property="og:image" content="{{ asset('imgs/designer-flowers.jpg') }}">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="{{ url('/') }}">
  <meta name="twitter:title" content="{{ $page->title }}">
  <meta name="twitter:description" content="{{ $page->description }}">
  <meta name="twitter:image" content="{{ asset('imgs/designer-flowers.jpg') }}">

  @vite(['resources/js/app.js'])

<!-- Favicon -->
<link rel="icon" href="{{ asset('imgs/logo-2.png') }}" type="image/png">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- SEO Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Website",
  "name": "{{ $page->title }}",
  "url": "{{ url()->current() }}",
  "logo": "{{ asset('imgs/logo-2.png') }}"
}
</script>

</head>
<body>
  <div id="main">

    <div class="text-center logo-div">

      <!-- Navigation Bar -->
      <nav class="navbar navbar-expand-md justify-content-center sticky-top">
        <a class="" href="{{ url('/') }}" aria-label="MCL Web Solutions Logo link to home page">
          <img src="{{ asset('imgs/logo-1.png') }}"
             class="main-logo-image w-50 h-auto px-5"
             alt="Desinger flowers text logo"
             height="500"
             width="1536">
        </a>

        <button class="navbar-toggler border-0 m-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation">
          <i class="fas fa-bars fa-lg text-dark toggler-icon"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-center w-75" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link d-block px-3 main-intro-text" href="{{ route('page.show', ['slug' => 'home']) }}">Home</a>
            </li>

            <!-- Desktop Dropdown -->
            <li class="nav-item dropdown d-none d-md-block" style="z-index: 10;">
              <a class="nav-link dropdown-toggle d-block px-3  main-intro-text" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu shadow top-1">
                <a class="dropdown-item main-intro-text" href="{{ route('page.show', ['slug' => 'home']) }}">Home</a>
                <a class="dropdown-item main-intro-text" href="{{ route('page.show', ['slug' => 'about']) }}">About</a>
              </div>
            </li>

            <!-- Mobile Dropdown -->
            <li class="nav-item dropdown d-md-none">
              <a class="nav-link main-intro-text" data-bs-toggle="collapse" href="#mobileContactMenu" role="button" aria-expanded="false" aria-controls="mobileContactMenu">
                Services
              </a>
              <div class="collapse" id="mobileContactMenu">
                <a class="nav-link main-intro-text" href="{{ route('page.show', ['slug' => 'home']) }}">Home</a>
                <a class="nav-link main-intro-text" href="{{ route('page.show', ['slug' => 'about']) }}">About</a>
              </div>
            </li>


            <li class="nav-item">
              <a class="nav-link d-block px-3 text-nowrap main-intro-text" href="{{ route('page.show', ['slug' => 'about']) }}">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>


    </div>
    <div>
          <img src="{{ asset('imgs/rose.png') }}"
               class="img-fluid mx-auto top-0 start-0"
               alt="flower bunch roses"
               height="391"
               width="600"
               data-aos="fade-left" 
               data-aos-delay="2200"
               style="width: 15%; height: auto; opacity: 0.9; object-fit: cover; position: absolute; z-index: 1024 !important;">
           
    </div>
    <main>
      
    <!-- Loading Screen -->
    <div id="loading-screen">
        <div class="spinner"></div>
    </div>

    <div id="page-content" style="opacity: 0;">
        @yield('content')
    </div>
</main>

<div id="footer" class="pt-5">
    <footer class="pt-5">
        <!-- Top Row -->
        <div class=" pt-5 mt-5">
          <div class="row px-4 mx-auto w-100">
              <div class="col-12 col-md-5 col-lg-5 mx-auto" id="footer-top">
                  <a class="footer-logo" href="{{ route('page.show', ['slug' => 'home']) }}" aria-label="Desinger Flowers text Logo link to home page">
                    <div class="d-flex mx-auto">
                      <img src="{{ asset('imgs/logo-2.png') }}"
                          class="align-top mx-auto w-75 h-auto"
                          alt="Designer Flowers text logo"
                          loading="lazy"
                          height="600"
                          width="1024">
                    </div>
                  </a>


                  <div class="d-none d-md-block start-0 position-absolute p-3 bg-light shadow d-flex justify-content-center" style="border-top-right-radius: 10px; bottom: 8.5%">
                    <a class="ps-5 ms-5 me-3" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0" href="https://www.facebook.com/SilverFernMarquees" aria-label="Facebook">
                      <i class="bi bi-facebook h4" id="facebook-icon"></i>
                    </a>
                    <a class="mx-3" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0" href="https://www.linkedin.com/company/SilverFernMarquees" aria-label="LinkedIn">
                      <i class="bi bi-linkedin h4" id="linkin-icon"></i>
                    </a>
                    <a class="mx-3" data-aos="fade-up" data-aos-delay="400" data-aos-offset="0" href="#" aria-label="Designer Flowers link to instagram page">
                      <i class="bi bi-instagram h4" id="instagram-icon"></i>
                    </a>
                  </div>



                  <hr class="d-block d-md-none p-4">
              </div>

              <!-- Quick Links - Small Screen -->
              <div class="col-12 col-md-4 col-lg-4 mx-auto d-md-none footer-middle">
                  <div class="mx-auto w-75">
                      <button class="btn btn-outline-dark w-100 mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#quickLinksCollapse">
                          Quick Links
                      </button>
                      <div class="collapse" id="quickLinksCollapse">
                          <ul class="list-unstyled text-center g-2">
                              <li><a class="d-block list-inline-item" href="{{ route('page.show', ['slug' => 'home']) }}">Home</a></li>
                              <li><a class="d-block list-inline-item" href="{{ route('page.show', ['slug' => 'about']) }}">Portfolio</a></li>

                          </ul>
                      </div>
                  </div>
              </div>

              <!-- Quick Links - Medium+ Screens -->
              <div class="col-12 col-md-3 col-lg-3 mx-auto footer-middle d-none d-md-flex">
                <div class="mx-auto w-75">
                  <div class="mx-auto pb-2">
                    <p class="text-center text-md-start mx-auto fs-2">Quick Links</p>
                  </div>
                  <div class="text-center text-md-start d-inline mx-auto">
                    <ul class="list-inline">
                      <li><hr class="w-75"></li>
                      <li><a href="{{ route('page.show', ['slug' => 'home']) }}" class="fw-bold w-100 mb-2">
                        Home<i class="fas fa-chevron-right ms-2"></i>
                        </a></li>

                      <li><hr class="w-75"></li>
                      <li><a  href="{{ route('page.show', ['slug' => 'home']) }}" class="fw-bold w-100 mb-2">
                        Contact Us<i class="fas fa-chevron-right ms-2"></i>
                      </a>

                      <li><hr class="w-75"></li>
                      <li><a href="" class="fw-bold w-100 mb-2"
                        data-bs-toggle="collapse" data-bs-target="#article-page-collapse" aria-expanded="false"
                        aria-controls="article-page-collapse">
                        Services<i class="fas fa-chevron-down ms-2"></i>
                    </a>
                      <li>
                        <div class="collapse" id="article-page-collapse">
                          <ul>
                            <li><a class="d-block list-inline-item" href="{{ route('page.show', ['slug' => 'home']) }}">Home</a></li>
                            <li><a class="d-block list-inline-item" href="{{ route('page.show', ['slug' => 'about']) }}">Portfolio</a></li>
    
                          </ul>
                        </div>
                      </li>      
                      <li><hr class="w-75"></li>
                    </ul>
                  </div>
                </div>
              </div>
              
              <hr class="d-block d-md-none p-4 mt-5">

              <!-- Contact Info - Small Screens -->
              <div class="col-12 col-md-4 col-lg-4 mx-auto d-md-none">
                  <div class="mx-auto text-center pb-4 w-75">
                      <button class="btn btn-outline-dark w-100 mb-2" data-bs-toggle="collapse" data-bs-target="#contactCollapse">
                          Contact Us
                      </button>
                      <div class="collapse" id="contactCollapse">
                          <div class="row mb-2 mt-3">
                              <i class="bi bi-telephone col-3 text-center text-primary"></i>
                              <p class="col-9 text-start">Phone:<br>021-996-820</p>
                          </div>
                          <div class="row mb-2">
                              <i class="bi bi-envelope-at col-3 text-center text-primary"></i>
                              <p class="text-start col-9"><span style=" word-break: break-word; overflow-wrap: break-word;" class="text-break">Email:<br>admin@mclellandcontractinglimited.co.nz</span></p>
                          </div>
                          <div class="row mb-2">
                              <i class="bi bi-geo-alt col-3 text-center text-primary"></i>
                              <p class="col-9 text-start">Tauranga, Bay of Plenty</p>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Contact Info - Medium+ Screens -->
              <div class="col-12 col-md-4 col-lg-4 mb-5 mx-auto d-none d-md-block">
                  <div class="pb-4">
                      <p class="fs-2">Contact Us</p>
                      <div class="row mb-2">
                          <i class="bi bi-telephone col-3 text-center contact-icon"></i>
                          <p class="col-9">Phone:<br>09-238 2235</p>
                      </div>
                      <div class="row mb-2">
                          <i class="bi bi-envelope-at col-3 text-center contact-icon"></i>
                          <p class="col-9"><span style=" word-break: break-word; overflow-wrap: break-word;">Email:<br>designerflowers@xtra.co.nz</span></p>
                      </div>
                      <div class="row mb-2">
                          <i class="bi bi-geo-alt col-3 text-center contact-icon"></i>
                          <p class="col-9">7 Wrightson Way  (in the showroom of Silverfern Event & Wedding Hire),<br>Pukekohe,
                          <br>Auckland, NZ</p>
                      </div>
                  </div>
              </div>
          </div>
        </div>

        <div class=" d-inline-block p-5">
          <img src="{{ asset('imgs/flower-footer-1.png') }}"
               class="img-fluid mx-auto"
               alt="flower bunch pink"
               height="1024"
               width="1024"
               data-aos="fade-left" 
               data-aos-delay="200"
               style="width: 20%; left: 40%; bottom: 80%; height: auto; object-fit: cover; position: absolute;">
           
            <img src="{{ asset('imgs/flower-footer-3.png') }}"
               class="img-fluid mx-auto"
               alt="flower bunch pink"
               height="1024"
               width="1024"
               style="width: 10%; right: 94%; bottom: 5%; height: auto; object-fit: cover; position: absolute; transform: rotate(45deg); z-index:10;">
           
            </div>

        <!-- Bottom Row -->
        <div class="row mx-auto footer-bottom align-bottom-center">
            <div class="col d-flex py-2">
                <p class="text-center m-auto">
                    &copy; 2025 SilverFern Marquees |
                    <a href="{{ route('page.show', ['slug' => 'home']) }}">Privacy Statement</a> |
                    <a href="https://mclwebsolutions.com/index.html">Website by MCL Web Solutions</a>
                </p>
            </div>
        </div>
    </footer>

  



</div>


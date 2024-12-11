<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Aditiya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <style>
    .portfolio-item img, .service-item img {
      width: 100%;
      height: 300px; /* Fixed height for all images */
      object-fit: cover; /* Ensures images cover the area without distortion */
    }
  </style>
</head>

<body class="index-page overflow-x-hidden">

  <header id="header" class="header d-flex flex-column justify-content-center">

    <i class="header-toggle d-xl-none bi bi-list"></i>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i><span>About</span></a></li>
        <li><a href="#portfolio"><i class="bi bi-images navicon"></i><span>Certificate</span></a></li>
        <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i><span>Project</span></a></li>
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i><span>Contact</span></a></li>
        
        <!-- Conditional Login/Logout Link -->
        @auth
        <li>
          <a href="#" id="logout-link">
            <i class="bi bi-box-arrow-right navicon"></i><span>Logout</span>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
        @else
        <li>
          <a href="#" id="login-link">
            <i class="bi bi-box-arrow-in-right navicon"></i><span>Login</span>
          </a>
        </li>
        @endauth
      </ul>
    </nav>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <img src="assets/img/hero-bg.jpg" alt="">

      <div class="container" data-aos="zoom-out">
        <div class="row justify-content-center">
        
          <div class="col-lg-9">
            <h2></h2>
            <p>I'm <span class="typed" data-typed-items="">Aditiya Fathurrahman</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
            <div class="social-links">
              <a href="#"><i class="bi bi-twitter-x"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
       
      </div>

    </section><!-- /Hero Section -->

    <section id="about" class="about section">
      @if($about)
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
          <h2>About</h2>
          <p>{{$about->deskripsi}}</p>
      </div><!-- End Section Title -->
  
      <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4 justify-content-center">
              <div class="col-lg-4">
                  <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-8 content">
                  <h2>{{$about->judul}}</h2>
                  <p class="fst-italic py-3">
                      {{$about->deskripsi2}}
                  </p>
                  <div class="row">
                      <div class="col-lg-6">
                          <ul>
                              <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$about->tanggal_lahir}}</span></li>
                              <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$about->city}}</span></li>
                              <li><i class="bi bi-chevron-right"></i> <strong>Language:</strong> <span>{{$about->language}}</span></li>
                          </ul>
                      </div>
                      <div class="col-lg-6">
                          <ul>
                              <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$about->umur}}</span></li>
                              <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{$about->freelance}}</span></li>
                              <li><i class="bi bi-chevron-right"></i> <strong>Educational Background:</strong> <span>{{$about->educational_background}}</span></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      @endif
  </section>

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
      </div>

    </section><!-- /Stats Section -->
    <section id="portfolio" class="portfolio section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Certificate</h2>
        <p>Certificates I've Earned</p>
      </div>
  
      <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($certificates as $certificate)
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset('storage/' . $certificate->image) }}" class="img-fluid" alt="{{$certificate->name}}">
              <div class="portfolio-info">
                <h4>{{$certificate->name}}</h4>
                <p>{{$certificate->description}}</p>
                <a href="{{ asset('storage/' . $certificate->image) }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ asset('storage/' . $certificate->file) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
  
    <section id="services" class="services section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Projects</h2>
        <p>All my project</p>
      </div>

      <div class="container">
        <div class="row gy-4">
          @foreach ($projects as $project)
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative h-28">
              <a href="{{$project->link}}" class="stretched-link">
                <h3>{{$project->name}}</h3>
              </a>
              <img src="{{ asset('storage/' . $project->image) }}"  alt="{{$project->name}}">
              <div class="service-item-content">

                <p>{{$project->description}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    {{-- <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kata Kata</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section --> --}}

    <section id="contact" class="contact section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
              <h2>Contact me</h2>
              <p>you can contact me</p>
            </div><!-- End Section Title -->
      <div class="container" data-aos="fade" data-aos-delay="100">
          <div class="row gy-4">
              <!-- Bagian info kontak tetap sama -->
              <div class="col-lg-4">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                      <h3>Address</h3>
                      <p>{{$contacts->address ?? 'Not provided'}}</p>
                  </div>
              </div>
              
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone flex-shrink-0"></i>
                  <div>
                      <h3>Call Us</h3>
                      <p>{{$contacts->whatsapp ?? 'Not available'}}</p>
                  </div>
              </div>
              
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                      <h3>Email Us</h3>
                      <p>{{$contacts->gmail ?? 'No email'}}</p>
                  </div>
              </div>
            </div>
              <div class="col-lg-8">
                  <!-- Formulir Kontak -->
                  @if(session('success'))
                      <div class="alert alert-success">
                          {{ session('success') }}
                      </div>
                  @endif
  
                  @if(session('error'))
                      <div class="alert alert-danger">
                          {{ session('error') }}
                      </div>
                  @endif
  
                  <form action="{{ route('send.email') }}" method="POST" class="php-email-form">
                      @csrf
                      <div class="row">
                          <div class="col-md-12 form-group">
                              <input type="email" name="email" class="form-control" 
                                     placeholder="Your Email" 
                                     required 
                                     value="{{ old('email') }}">
                              @error('email')
                                  <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group">
                          <textarea name="message" class="form-control" 
                                    rows="5" 
                                    placeholder="Message" 
                                    required>{{ old('message') }}</textarea>
                          @error('message')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="text-center">
                          <button type="submit">Send Message</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </section>
  </main>

  <footer id="footer" class="footer position-relative light-background">
    <div class="container">
      <h3 class="sitename">Aditiya Fathurrahman</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-skype"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="container">
        <div class="copyright">
          <span>Copyright</span> <strong class="px-1 sitename">Aditiya Fathurrahman</strong> <span>All Rights Reserved</span>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    // Authentication Handler
document.addEventListener('DOMContentLoaded', function() {
    const loginLink = document.getElementById('login-link');
    const logoutLink = document.getElementById('logout-link');

    // Login Click Handler
    if (loginLink) {
        loginLink.addEventListener('click', function(e) {
            e.preventDefault();
            // Redirect to login page or open login modal
            window.location.href = "{{ route('login') }}";
        });
    }

    // Logout Click Handler
    if (logoutLink) {
        logoutLink.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Confirm logout
            Swal.fire({
                title: 'Are you sure you want to log out?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, logout'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit logout form
                    document.getElementById('logout-form').submit();
                }
            });
        });
    }
});
  </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OnePage Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS')}} File -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage - v2.2.2
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Tracking Covid</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="{{asset('frontend/assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="login">Login</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Tracking Covid</h1>
          <h2>By Creative Team</h2>
        </div>
      </div>
      <div class="text-center">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>

      <div class="row icon-boxes">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="ri-stack-line"></i></div>
            <h4 class="title"><a href="">Positif</a></h4>
            <p class="description">{{$positif}} </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="ri-palette-line"></i></div>
            <h4 class="title"><a href="">Sembuh</a></h4>
            <p class="description">{{$sembuh}}</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="ri-command-line"></i></div>
            <h4 class="title"><a href="">Meninggal</a></h4>
            <p class="description">{{$meninggal}}</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="ri-fingerprint-line"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. </p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row justify-content-end">

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">65</span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">85</span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">12</span>
              <p>Years of experience</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">15</span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= About Video Section ======= -->

    <!-- End About Video Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Testimonials Section ======= -->
    
    <!-- End Testimonials Section -->

    <!-- ======= Services Section ======= -->
    
    <!-- End Sevices Section -->

    <!-- ======= Cta Section ======= -->
    
    <!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="300">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('frontend/assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{asset('frontend/assets/img/portfolio/portfolio-1.jpg')}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('frontend/assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{asset('frontend/assets/img/portfolio/portfolio-2.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('frontend/assets/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{asset('frontend/assets/img/portfolio/portfolio-3.jpg')}}" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('frontend/assets/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{asset('frontend/assets/img/portfolio/portfolio-4.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('frontend/assets/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{asset('frontend/assets/img/portfolio/portfolio-5.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('frontend/assets/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{asset('frontend/assets/img/portfolio/portfolio-6.jpg')}}" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('frontend/assets/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{asset('frontend/assets/img/portfolio/portfolio-7.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('frontend/assets/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{asset('frontend/assets/img/portfolio/portfolio-8.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('frontend/assets/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{asset('frontend/assets/img/portfolio/portfolio-9.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('frontend/assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('frontend/assets/img/team/team-2.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('frontend/assets/img/team/team-3.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('frontend/assets/img/team/team-4.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>OnePage</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>OnePage</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>


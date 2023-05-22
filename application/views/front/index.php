<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/front/images/favicon.png" type="">

  <title> Kazi </title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="<?php echo base_url();?>assets/front/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>assets/front/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo base_url();?>assets/back/css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="<?php echo base_url();?>assets/front/images/about001.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="<?php echo site_url('welcome/index');?>">
            <span>
              Kazi
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('welcome/index');?>">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('welcome/about');?>"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('welcome/service');?>">Services</a>
              </li>
              <li>
                 <a href="<?php echo site_url('user/login');?>">LOGIN</a>
                </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="container">
          <div class="carousel_btn_box">
            <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
              <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      We Provide <br>
                      Temporary Jobs
                    </h1>
                    <p>
                      Make finding a job easier with the tap of a finger.<br>
                      Do not look too hard.<br>
                      Visit Kazi to access a variety of services right on your phone.
                     </p>
                    <div class="btn-box">
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="<?php echo base_url();?>assets/front/images/farmer.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      Connecting Kenyans<br>
                      With opportunities
                    </h1>
                    <p>
                      We provide a range of services from training workers to connecting employers to trained experts. 
                      There are job opportunities for all.
                    </p>
                    <div class="btn-box">
                    
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="<?php echo base_url();?>assets/front/images/work.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      For Any Job<br>
                      We've Got A Guy
                    </h1>
                    <p>
                      Find hundreds of service providers in the area you’re in.<br>
                      With your location on, Kazi will connect you to service providers near you.
                    </p>
                    <div class="btn-box">
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="<?php echo base_url();?>assets/front/images/painter.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Services
        </h2>
      </div>
      <div class="service_container">
        <div class="row">
          <div class="col-md-4">
            <div class="box b1">
              <div class="img-box">
                <img src="<?php echo base_url();?>assets/front/images/s1.png" alt="" class="" />
              </div>
              <div class="detail-box">
                <h5>
                  Cleaning Services
                </h5>
                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box b2">
              <div class="img-box">
                <img src="<?php echo base_url();?>assets/front/images/s2.png" alt="" class="" />
              </div>
              <div class="detail-box">
                <h5>
                  Carpenters
                </h5>
             </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box b3">
              <div class="img-box">
                <img src="<?php echo base_url();?>assets/front/images/s3.png" alt="" class="" />
              </div>
              <div class="detail-box">
                <h5>
                  Plumbers
                </h5>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="box b4">
              <div class="img-box">
                <img src="<?php echo base_url();?>assets/front/images/s2.png" alt="" class="" />
              </div>
              <div class="detail-box">
                <h5>
                  Part-time Farmers
                </h5>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box b5">
              <div class="img-box">
                <img src="<?php echo base_url();?>assets/front/images/s2.png" alt="" class="" />
              </div>
              <div class="detail-box">
                <h5>
                  Househelps
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- about section -->

  <section class="about_section about_section1">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="<?php echo base_url();?>assets/front/images/about001.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              Kazi offers a comprehensive, easy-to-use staffing platform that helps you connect with the workers you need.
              Kazi’s platform also provides you with insights into your jobs and the roster of workers showing up.
              With Kazi, you can create job request templates for future use and favorite workers that you would like to invite back for future opportunities. 
              Kazi helps finding hard workers easy.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- why section -->

  <section class="why_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Why Choose Us
        </h2>
      </div>
      <div class="why_container">
        <div class="row">
          <div class="col-md-4">
            <div class="box b1">
              <div class="detail-box">
                <h5>
                  Free Pricing
                </h5>
                <p>
                 It allows many kenyans to get job opportunities for as little as nothing. 
                 Employers connect to their workers for free.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box b2">
              <div class="detail-box">
                <h5>
                  Convenience
                </h5>
                <p>
                  Find hundreds of service providers in the area you’re in.
                  With your location on, Kazi will connect you to service providers near you.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box b3">
              <div class="detail-box">
                <h5>
                  Training and Expertise
                </h5>
                <p>
                  Kazi workers are locally available, talented workers that tackle jobs in many different industries,
                  and are ready to hit the ground running.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end why section -->

  <!-- about section -->

  <section class="about_section about_section2">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                How It Works
              </h2>
            </div>
            <p>
              Kazi works off a smart notification algorithm. 
              That basically means that we use data to notify the best available workers in your area.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <video width="100%"   controls>
            <source src="<?php echo base_url();?>assets/front/videos/video2.mp4" type="video/mp4">

            Your browser does not support the video tag.
          </video>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          What Our Clients Say
        </h2>
      </div>
      <div class="client_container">
        <div class="carousel-wrap ">
          <div class="owl-carousel">
            <div class="item">
              <div class="box">
                
                <div class="detail-box">
                  <h5>
                    Teta Karenzi
                  </h5>
                  <h6>
                    Cleaner
                  </h6>
                  <p>
                    Pros
                    Very good team work and work life balance
                    Cons
                    None so far for the year and a half i have been there
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                
                <div class="detail-box">
                  <h5>
                    Billy Kinyanjui
                  </h5>
                  <h6>
                    Gardener
                  </h6>
                  <p>
                    Great for inbetween jobs. 
                    It’s fast and easy plus you get paid pretty fast. 
                    It’s great for someone who likes their own work schedule.
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                
                <div class="detail-box">
                  <h5>
                    Keith Kariuki
                  </h5>
                  <h6>
                    Construction Worker
                  </h6>
                  <p>
                    It’s an easy way of earning money fast every friendly with there employees I loved working with 
                    them they try an help you get to where you want to be in a work place
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                
                <div class="detail-box">
                  <h5>
                    Rose Muna
                  </h5>
                  <h6>
                    Electrician
                  </h6>
                  <p>
                    You get too choose when you want to work..so that makes it very convenient...
                    no interviews just fill out the info on the app and they run a simple background check...
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->



  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-3 info-col">
          <div class="info_detail">
            <h4>
              Newsletter
            </h4>
            <form action="">
              <input type="text" placeholder="Enter Your Email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
            <div class="info_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-6  info-col">
          <div class="map_container">
            <div class="map">
              <div id="">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.625258880083!2d36.8357919!3d-1.2250903000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f162fbf637579%3A0x5ea8fb6b8c37e9f5!2zMcKwMTMnMjYuOSJTIDM2wrA1MCcwMy4yIkU!5e0!3m2!1sen!2ske!4v1644573128772!5m2!1sen!2ske" 
                  width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 info-col">
          <div class="info_contact">
            <h4>
              Contact Info
            </h4>
            <div class="contact_link_box">
              <p>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </p>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +254700449883
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  cynthiandirangu@gmail.com
                </span>
              </a>
              <p>
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <span>
                  Mon-Sat: 09.00 am - 06.00 pm
                </span>
              </p>
              <p>
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <span>
                  Sunday: closed
                </span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By Kazi
        
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="<?php echo base_url();?>assets/front/js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="<?php echo base_url();?>assets/front/js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script src="<?php echo base_url();?>assets/front/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>
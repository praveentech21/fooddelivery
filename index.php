<?php
 $conn = new mysqli("localhost", "root", "", "fooddelivery");
 if(!isset($conn)) echo "Database Not Connected"; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Insure - Insurance HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="bhavani/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="bhavani/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bhavani/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="bhavani/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div
      class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block"
    >
      <div class="row gx-0 align-items-center">
        <div class="col-lg-7 px-5 text-start">
          <div class="h-100 d-inline-flex align-items-center me-4">
            <small class="fa fa-phone-alt me-2"></small>
            <small>+91 9052727402</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center me-4">
            <small class="far fa-envelope-open me-2"></small>
            <small>ravikumar_csd@srkrec.edu.in</small>
          </div>
          <!-- <div class="h-100 d-inline-flex align-items-center me-4">
            <small class="far fa-clock me-2"></small>
            <small>Mon - Fri : 09 AM - 09 PM</small>
          </div> -->
        </div>
        <div class="col-lg-5 px-5 text-end">
          <div class="h-100 d-inline-flex align-items-center">
            <a class="text-white-50 ms-4" href=""
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a class="text-white-50 ms-4" href=""
              ><i class="fab fa-twitter"></i
            ></a>
            <a class="text-white-50 ms-4" href=""
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <a class="text-white-50 ms-4" href=""
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5"
    >
      <a href="index.php" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
          <img
            class="img-fluid me-3"
            src="bhavani/img/icon/icon-02-primary.png"
            alt=""
          />Insure
        </h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
          <a href="index.php" class="nav-item nav-link active">Home</a>
          <a href="index.php#about" class="nav-item nav-link">About Us</a>
          <a href="index.php#services" class="nav-item nav-link">Our Services</a>
          <a href="index.php#contact us" class="nav-item nav-link"
            >Contact Us</a>
        </div>
      </div>
      <a href="login.php" class="btn btn-primary px-3 d-none d-lg-block">Login</a>
      <a href="sigin.php" class="btn btn-primary px-3 d-none d-lg-block">Singin</a>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
          <img class="w-100" src="bhavani/img/carousel-2.png" alt="Image" />
          <div class="carousel-caption">
            <div class="container">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <h1 class="display-3 text-dark mb-4 animated slideInDown">
                    Home-to-Home Delivery
                  </h1>
                  <p class="fs-5 text-body mb-5">
                    "Home-to-Home Delivery: Share the love and taste of
                    homemade dishes effortlessly between homes, connecting
                    hearts through every delicious bite."
                  </p>
                  <a href="pickup.php" class="btn btn-primary py-3 px-5"
                    >Share Food</a>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
       
         
            <img class="w-100" src="bhavani/img/12.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <h1 class="display-3 text-dark mb-4 animated slideInDown">
                      Home-to-Home Delivery
                    </h1>
                    <p class="fs-5 text-body mb-5">
                      "Home-to-Home Delivery: Share the love and taste of
                      homemade dishes effortlessly between homes, connecting
                      hearts through every delicious bite."
                    </p>
                    <a href="donate.php" class="btn btn-primary py-3 px-5"
                      >Donate Food</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
       
         
            <img class="w-100" src="bhavani/img/carousel-1.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                   


                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="position-relative overflow-hidden rounded ps-5 pt-5 h-100" style="min-height: 400px">
              <img class="position-absolute w-100 h-100" src="bhavani/img/logos.png" alt="" style="object-fit: cover" />
              <div class="position-absolute top-0 start-0 rounded pe-3 pb-3" style="width: 0px; height: 0px; background: url('bhavani/img/logos.png') no-repeat center center; background-size: cover;">
                <!-- Content of the position-absolute div goes here if needed -->
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100">
              <h1 class="display-6 mb-5">
                We are your trusted partner, committed to safeguarding every aspect of your food
              </h1>
              <p class="fs-5 text-primary mb-4">
                We are passionate about revolutionizing your delivery experience. With a seamless and user-friendly web application, we bring your favorite meals by your dear ones to your doorstep, and also the utmost safety and efficiency. Our commitment extends beyond just delivering food delivery practices. Explore a world of culinary delights with the confidence that your satisfaction and well-being are at the heart of what we do."
              </p>
              <div class="border-top mt-4 pt-4">
                <div class="d-flex align-items-center">
                  <!-- Additional content goes here if needed -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
          <h1 class="display-6 mb-5" id="services">Our Services</h1>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                  <img
                    class="img-fluid"
                    src="bhavani/img/icon-10-light.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Pick Up</h4>
              </div>
              <p class="mb-4">
                We pick your order and deliver to the particular area
              </p>
              <a class="btn btn-light px-3" href="delivery.php">Book Now</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                  <img
                    class="img-fluid"
                    src="bhavani/img/icon-01-light.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Donate</h4>
              </div>
              <p class="mb-4">
                We help you to donate your food to needy people
              </p>
              <a class="btn btn-light px-3" href="delivery.php">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Appointment Start -->
    <div
      class="container-fluid appointment my-5 py-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
            <h1 class="display-6 text-white mb-5">Future Plan</h1>
            <div class="bg-white rounded p-3">
              <div class="d-flex align-items-center bg-primary rounded p-3">
                <h5 class="text-white mb-0">Lunch Box</h5>
              </div>
            </div>
            <br>
            <br>
            <a href="lunchbox/">
            <p class="text-white mb-5">
              Introducing the LunchBox service, addressing the common challenge
              faced by office-goers and schoolchildren who crave hot meals but
              struggle with the logistics of carrying lunch boxes. We offer a
              solution by picking up your freshly prepared lunch box from your
              home and ensuring it's delivered punctually, guaranteeing you a
              warm and delicious meal, hassle-free. Say goodbye to lunchtime
              predicaments and embrace the convenience of enjoying a hot and
              satisfying lunch wherever you are.
            </p>
            <br>
            <br>
            <p class="text-white mb-5">
              Unlock the convenience of a Lunch Box Delivery service that transcends the ordinary. Embrace the simplicity of our user-friendly ordering process, and we'll ensure your customized lunch box arrives promptly, offering a hassle-free solution for your daily dining needs. Whether you're at the office or home,
               our Lunch Box Delivery brings culinary variety and quality right to your doorstep, transforming lunchtime into a moment of indulgence and satisfaction. Experience the ease and joy of a curated lunch box journey .
            </p></a>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="bg-white rounded p-5">
              <img class="img-fluid" src="bhavani/img/2.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Appointment End -->

    <?php include 'fotter.php'; ?>


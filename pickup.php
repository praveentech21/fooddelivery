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
      <a href="donate.php" class="btn btn-primary px-3 d-none d-lg-block">Donate Food</a>
    </nav>
    <!-- Navbar End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
            <h1 class="display-6 mb-5">
              Pickup Point
            </h1>
            <p class="mb-4">
              If you want to share your handmade dishes to your dearones,we can deliver them easily now
              <a href="https://htmlcodex.com/contact-form"></a>.
            </p>
            <form>
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                    />
                    <label for="text">Pickup point</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      placeholder="Your Email"
                    />
                    <label for="text">Destination</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control"
                      id="subject"
                      placeholder="Subject"
                    />
                    <label for="  Your Mobile">Your Mobile</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea
                      class="form-control"
                      placeholder="Leave a message here"
                      id="message"
                      style="height: 100px"
                    ></textarea>
                    <label for="Another person mobile">Address</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary py-3 px-5" type="submit">
                    place order
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div
            class="col-lg-6 wow fadeIn"
            data-wow-delay="0.5s"
            style="min-height: 210px"
          >
          <div class="position-relative rounded overflow-hidden h-100">
          <div id="pickup" style="height:400px; width: 800px;" class="my-3"></div>
            <p>Pick Up Location</p>
            <div id="drop" style="height:400px; width: 800px;" class="my-3"></div>
            <p>Drop Location</p>
          </div>
      </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

    <?php include "fotter.php" ?>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAea24UwU5sUreEizrJiCfzcUfsls9NZ_8&callback=initMap"
                        type="text/javascript"></script>

                        <script>
                    let pickup, drop;
                    function initMap() {
                      pickup = new google.maps.Map(document.getElementById("pickup"), {
                            center: { lat: 16.5449, lng: 81.5212 },
                            zoom: 8,
                            scrollwheel: true,
                        });

                        drop = new google.maps.Map(document.getElementById("drop"), {
                            center: { lat: 22.397, lng: 81.5212 },
                            zoom: 8,
                            scrollwheel: true,
                        });

                        const uluru = { lat: -34.397, lng: 150.644 };
                        let marker = new google.maps.Marker({
                            position: uluru,
                            map: pickup,
                            draggable: true
                        });

                        const uluru1 = { lat: -34.397, lng: 150.644 };
                        let marker1 = new google.maps.Marker({
                            position: uluru,
                            map: drop,
                            draggable: true
                        });

                        google.maps.event.addListener(marker,'position_changed',
                            function (){
                                let lat = marker.position.lat()
                                let lng = marker.position.lng()
                                $('#lat').val(lat)
                                $('#lng').val(lng)
                            })

                            google.maps.event.addListener(marker,'position_changed',
                            function (){
                                let lat = marker.position.lat()
                                let lng = marker.position.lng()
                                $('#lat').val(lat)
                                $('#lng').val(lng)
                            })
 

                        google.maps.event.addListener(pickup,'click',
                        function (event){
                            pos = event.latLng
                            marker.setPosition(pos)
                        })

                        google.maps.event.addListener(map,'click',
                        function (event){
                            pos = event.latLng
                            marker.setPosition(pos)
                        })


                        
                    }
                </script>

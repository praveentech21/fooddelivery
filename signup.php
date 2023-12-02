<?php
include "connect.php";
session_start();

if (isset($_POST["signup"])) {
  // $username = $_POST["mobile"];
  $name = $_POST["name"];
  $mobile = $_POST["mobile"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  if ($password != $cpassword) {
    echo "<script>alert('Password does not match')</script>";
    header("Location: delivery.php");
  }
  $sql = "INSERT INTO users (`name`, `mobile` , `password`) VALUES ('$name','$mobile', '$password')";

  if ($conn->query($sql) === TRUE) {
    header("Location: delivery.html");
      
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}


?>

<!DOCTYPE html>

<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="Bhavani/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Register Basic </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="Bhavani/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="bhavani/css/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="bhavani/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="bhavani/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="Bhavani/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="bhavani/css/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="bhavani/css/page-auth.css" />
    <!-- Helpers -->
    <script src="helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="config.js"></script>
  </head>

  <body>
    <!-- Content -->
    <body>
      <!-- Content --> <style>
      body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
      }
  
      .logo-container {
        width: 40px;
        height: 42px;
      }
  
      .logo-container img {
        width: 100%;
        height: 100%;
      }
    </style>
    <style>
      .container-xxl {
        max-width: 1140px; /* Set your desired width */
        margin-right: auto;
        margin-left: auto;
      }
    </style>
    
                  <div class="container-xxl">
                    <div class="authentication-wrapper authentication-basic container-p-y">
                      <div class="authentication-inner">
                        <!-- Register -->
                        <div class="card">
                          <div class="card-body">
                            <!-- Logo -->
                            <div class="app-brand justify-content-center">
                              <a href="index.html" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                  <div class="logo-container">
                                    <img src="bhavani/img/logo.png" alt="Logo">
                                  </div>
                                </span>
                                <span class="app-brand-text demo text-body fw-bolder" style="font-size: 24px;">Instant Delivery</span>
                              </a>
                            </div>




                
              <!-- /Logo -->
              <h4 class="mb-2">Experience starts here</h4>
              <p class="mb-4">Make your delivery easy and fun!</p>

              <form id="formAuthentication" class="mb-3" action="#" method="POST">

                <div class="mb-3">
                  <label for="name" class="form-label">name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" />
                </div>
                <div class="mb-3">
                  <label for="mobile" class="form-label">Mobile no</label>
                  <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Enter your number" />
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                  </div>
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="cpassword">Confirm Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="cpassword"
                      class="form-control"
                      name="cpassword"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="Confirm password"
                    />
                  </div>
                </div>
                <button class="btn btn-primary d-grid w-100" name="signup" type="submit">Sign up</button>
              </form>

              <p class="text-center">
                <span>Already have an account?</span>
                <a href="login.php">
                  <span>Sign in instead</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    

    <!-- Core JS -->
    <!-- build:js vendor/js/core.js -->
    <script src="Bhavani/vendor/libs/jquery/jquery.js"></script>
    <script src="Bhavani/vendor/libs/popper/popper.js"></script>
    <script src="Bhavani/vendor/js/bootstrap.js"></script>
    <script src="Bhavani/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="Bhavani/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="Bhavani/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>

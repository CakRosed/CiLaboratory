<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Mts Nurus Sa'adah</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo get_template_directory(dirname(__FILE__), 'css/bootstrap.min.css'); ?>" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo get_template_directory(dirname(__FILE__), 'css/mdb.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo get_template_directory(dirname(__FILE__), 'css/mdb.lite.min.css'); ?>" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <script src="<?php echo get_template_directory(dirname(__FILE__), 'js/jquery-3.3.1.min.js'); ?>"></script>

  <style>

      html,
      body,
      header,
      .view {
        height: 100vh;
      }

      @media (max-width: 740px) {
        html,
        body,
        header,
        .view {
          height: 180vh;
        }
      }

      @media (min-width: 800px) and (max-width: 850px) {
        html,
        body,
        header,
        .view  {
          height: 180vh;
        }
      }

      .intro-2 {
          background: url("<?php echo get_template_directory(dirname(__FILE__), 'img/13.jpg'); ?>")no-repeat center center;
          background-size: cover;
      }
      .top-nav-collapse {
        background:-webkit-linear-gradient(50deg,rgba(32,150,255,.9),rgba(5,255,163,.9))!important;
        background:-o-linear-gradient(50deg,rgba(32,150,255,.9),rgba(5,255,163,.9))!important;
        background:linear-gradient(40deg,rgba(32,150,255,.9),rgba(5,255,163,.9))!important;
          
      }
      .navbar:not(.top-nav-collapse) {
          background: transparent !important;
      }
      @media (max-width: 768px) {
          .navbar:not(.top-nav-collapse) {
            background:-webkit-linear-gradient(50deg,rgba(32,150,255,.9),rgba(5,255,163,.9))!important;
            background:-o-linear-gradient(50deg,rgba(32,150,255,.9),rgba(5,255,163,.9))!important;
            background:linear-gradient(40deg,rgba(32,150,255,.9),rgba(5,255,163,.9))!important;
          }
          #halawla{
            padding-top: 10%;
          }
          .card {
            margin-bottom: 30px;
          }
      }
      @media (min-width: 800px) and (max-width: 850px) {
          .navbar:not(.top-nav-collapse) {
              background: #3f51b5!important;
          }
          #halawla{
            padding-top: 10%;
          }
          .card {
            margin-bottom: 30px;
          }
      }

      .card {
          background-color: rgba(229, 228, 255, 0.2);
      }
      .md-form label {
          color: #ffffff;
      }`
      h6 {
          line-height: 1.7;
      }
      

      .card {
          margin-top: 20%;
          /*margin-bottom: -45px;*/

      }

      .md-form input[type=text]:focus:not([readonly]),
      .md-form input[type=password]:focus:not([readonly]) {
          border-bottom: 1px solid #8EDEF8;
          box-shadow: 0 1px 0 0 #8EDEF8;
      }
      .md-form input[type=text]:focus:not([readonly])+label,
      .md-form input[type=password]:focus:not([readonly])+label {
          color: #8EDEF8;
      }

      .md-form .form-control {
          color: #fff;
      }
      

  </style>
</head>

<body>
  <!-- Start your project here-->
    <!--Main Navigation-->
    <header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top  scrolling-navbar">

      <div class="container">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="<?php echo base_url('#'); ?>">Nurus Sa'adah</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Links -->
          <ul class="navbar-nav mr-auto smooth-scroll">
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('#intro'); ?>">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('#best-features'); ?>">Features</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('#examples'); ?>">Examples</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('#gallery'); ?>">Gallery</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('#contact'); ?>">Contact</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="#">Siakad</a>
              </li>

          </ul>
          <!-- Links -->

          <!-- <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form> -->
        </div>
        <!-- Collapsible content -->

      </div>

    </nav>
    <!--/.Navbar-->

      <!--Intro Section-->
      <section class="view intro-2">
        <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
          <div class="container">
              <div class="row" id="halawla">
                <!-- Gird colum -->
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 mx-auto mt-lg-5">

                      <!--Form with header-->
                      <form action="<?php echo set_url('login'); ?>" method="post">
                      <div class="card wow fadeIn" data-wow-delay="0.3s">
                          <div class="card-body">

                              <!--Header-->
                              <div class="form-header purple-gradient">
                                  <h3><i class="fa fa-user mt-2 mb-2"></i> Log in:</h3>
                              </div>

                              <!--Body-->
                              <div class="md-form my-4">
                                  <i class="fa fa-user prefix white-text"></i>
                                  <input type="text" id="username" name="username" class="form-control">
                                  <label for="username">User ID</label>
                              </div>

                              <div class="md-form mb-4">
                                  <i class="fa fa-lock prefix white-text"></i>
                                  <input type="password" id="password" name="password" class="form-control">
                                  <label for="password">Password</label>
                              </div>

                              <div class="text-center mb-4">
                                  <button class="btn purple-gradient btn-lg">Log in</button>
                                  <!-- <hr class="blue-grey lighten-4 w-50"> -->
                              </div>
                              
                              <!-- Material unchecked -->
                              <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                <label class="custom-control-label white-text" for="remember">Biarkan saya tetap login</label>
                              </div>
                          </div>
                      </div>
                      </form>
                      <!--/Form with header-->

                </div>
                <!-- /Gird colum -->

                <!-- Grid column -->
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 mx-auto mt-lg-5 white-text">

                    <!-- Grid row -->
                    <div class="row mb-3">
              
                      <!-- Grid column -->
                      <div class="col-1">
                        <i class="fas fa-share fa-lg white-text"></i>
                      </div>
                      <!-- Grid column -->
              
                      <!-- Grid column -->
                      <div class="col-xl-10 col-md-11 col-10">
                        <h5 class="font-weight-bold mb-3">Username</h5>
                        <p class="white-text">
                          <span class="aqua-gradient-rgba rounded p-1">SISWA</span> menggunakan NISN<br class="mb-1">
                          <span class="aqua-gradient-rgba rounded p-1">GURU</span> menggunakan NUPTK<br class="mb-1">
                          <span class="aqua-gradient-rgba rounded p-1">ADMIN/BENDAHARA/DSB</span> menggunakan USERNAME
                        </p>
                      </div>
                      <!-- Grid column -->
              
                    </div>
                    <!-- Grid row -->
              
                    <!-- Grid row -->
                    <div class="row mb-3">
              
                      <!-- Grid column -->
                      <div class="col-1">
                        <i class="fas fa-share fa-lg white-text"></i>
                      </div>
                      <!-- Grid column -->
              
                      <!-- Grid column -->
                      <div class="col-xl-10 col-md-11 col-10">
                        <h5 class="font-weight-bold mb-3">Password</h5>
                        <p class="white-text">Segera ganti <span class="rounded peach-gradient-rgba p-1 text-uppercase mb-1">password default</span> dari admin demi keamanan akun anda</p>
                      </div>
                      <!-- Grid column -->
              
                    </div>
                    <!-- Grid row -->
              
                    <!--Grid row-->
                    <div class="row">
              
                      <!-- Grid column -->
                      <div class="col-1">
                        <i class="fas fa-share fa-lg white-text"></i>
                      </div>
                      <!-- Grid column -->
              
                      <!-- Grid column -->
                      <div class="col-xl-10 col-md-11 col-10">
                        <h5 class="font-weight-bold">Error Akun</h5>
                        <p class="white-text mb-0">Jika terjadi <span class="text-uppercase purple-gradient-rgba rounded p-1">masalah</span> pada akun anda silahkan hubungi kontak admin</p>
                        <p></p><span class="white-text rounded p-1 blue-gradient-rgba text-uppercase"><i class="fas fa-phone-square"></i> WA</span> +62 89584266260 <br class="mb-1">
                        <span class="white-text rounded p-1 blue-gradient-rgba text-uppercase"><i class="fas fa-sms"></i> SMS/TLP</span> +62 584266260<br class="mb-1">
                        <span class="white-text rounded p-1 blue-gradient-rgba text-uppercase"><i class="fas fa-blender-phone"></i> TLP SEKOLAH</span> (031)584266260 hanya bisa dihubungi pada jam sekolah
                        </p>
                      </div>
                      <!-- Grid column -->
  
              </div>
          
            
            
              </div>
            </div>
          </div>
      </section>
    </header>
    


  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo get_template_directory(dirname(__FILE__), 'js/popper.min.js'); ?>"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo get_template_directory(dirname(__FILE__), 'js/bootstrap.min.js'); ?>"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo get_template_directory(dirname(__FILE__), 'js/mdb.js'); ?>"></script>
  <!-- Google Maps -->
  <script src="https://maps.google.com/maps/api/js"></script>
  <!-- Google map setting -->
  <script>
    function regular_map(){
      var var_location = new google.maps.LatLng(-7.4964837,112.628466);
      
      var var_mapoptions = {
        center : var_location,
        zoom : 17
      };

      var var_map = new google.maps.Map(document.getElementById("map-container"),
      var_mapoptions);

      var var_marker = new google.maps.Marker({
        position : var_location,
        map : var_map,
        title: "MTS Nurus Sa'adah"
      });
    }

    // initialize maps
    google.maps.event.addDomListener(window, 'load', regular_map);
  </script>

  
  <script>
    $('.carousel').carousel({
      interval: 2000,
    });
  </script>

</body>

</html>

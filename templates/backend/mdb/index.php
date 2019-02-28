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
  <link href="<?php echo get_template_directory(dirname(__FILE__), 'css/'); ?>bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo get_template_directory(dirname(__FILE__), 'css/'); ?>mdb.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory(dirname(__FILE__), 'css/'); ?>mdb.lite.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo get_template_directory(dirname(__FILE__), 'css/'); ?>style.css" rel="stylesheet">
  <script src="<?php echo get_template_directory(dirname(__FILE__), 'js/'); ?>jquery-3.3.1.min.js"></script>
</head>

<body>
  <!-- Start your project here-->
    <!--Main Navigation-->
    <header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">

        <div class="container">
  
          <!-- Navbar brand -->
          <a class="navbar-brand" href="#">Nurus Sa'adah</a>
  
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
                    <a class="nav-link" href="#intro">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#best-features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#examples">Examples</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('admin/login'); ?>">Siakad</a>
                </li>

            </ul>
            <!-- Links -->
  
            <form class="form-inline">
              <div class="md-form my-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
              </div>
            </form>
          </div>
          <!-- Collapsible content -->
  
        </div>
  
    </nav>
    <!--/.Navbar-->
      <!--Mask-->
      <div id="intro" class="view">

        <div class="mask rgba-indigo-light">
          <div class="container-fluid d-flex align-items-center justify-content-center h-100">
            <div class="row d-flex justify-content-center text-center">
              <div class="col-md-10">
                <!-- Heading -->
                <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">Nurus Sa'adah</h2>
                <!-- <h2 class="display-4 font-weight-bold white-text pt-5 mb-2"><span class="light-green-text white py-1 px-2">Nurus</span><span class="green accent-2 py-1 px-2">Sa'adah</span></h2> -->
      
                <!-- Divider -->
                <hr class="hr-light">
      
                <!-- Description -->
                <h4 class="white-text my-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti consequuntur.</h4>
                <button type="button" class="btn aqua-gradient-rgba">Read more <i class="fas fa-quran"></i></button>    
              </div>
            </div>
          </div>
  
        </div>
        
      </div>
      <!--/.Mask-->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">
      <div class="container">

        <!-- Section: best-feature -->
        <section id="best-features" class="text-center">
          <!-- Heading -->
          <h2 class="mb-5 font-weight-bold text-center">Best Features</h2>
          
          <!-- Gird row -->
          <div class="row d-flex justify-content-center text-center mb-4">
            <div class="col-md-8">

              <!-- Description -->
              <p class="grey-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum aperiam, laudantium, distinctio voluptate natus error esse repudiandae quibusdam adipisci, ea ex commodi cupiditate consequatur totam doloribus ipsa maxime? Quos, alias!</p>            

            </div>
          </div>
          <!-- /Gird row -->
          <div class="row">

            <!-- Gird column -->
            <div class="col-md-4 mb-5">
              <i class="far fa-address-book fa-4x orange-text"></i>
              <h4 class="my-4 font weight-bold">Experience</h4>
              <p class="grey-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt eligendi necessitatibus natus. Vitae, incidunt inventore, quasi architecto labore eos molestias dolorum corrupti mollitia vel molestiae non eaque sunt harum quod?</p>
            </div>
            <!-- /Gird column -->
            
            <!-- Gird column -->
            <div class="col-md-4 mb-5">
              <i class="fas fa-heart fa-4x orange-text"></i>
              <h4 class="my-4 font weight-bold">Heppiness</h4>
              <p class="grey-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt eligendi necessitatibus natus. Vitae, incidunt inventore, quasi architecto labore eos molestias dolorum corrupti mollitia vel molestiae non eaque sunt harum quod?</p>
            </div>
            <!-- /Gird column -->
            
            <!-- Gird column -->
            <div class="col-md-4 mb-5">
              <i class="fas fa-bicycle fa-4x orange-text"></i>
              <h4 class="my-4 font weight-bold">Adventure</h4>
              <p class="grey-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt eligendi necessitatibus natus. Vitae, incidunt inventore, quasi architecto labore eos molestias dolorum corrupti mollitia vel molestiae non eaque sunt harum quod?</p>
            </div>
            <!-- /Gird column -->

          </div>
          <!-- Gird row -->

          <!-- /Gird row -->
        </section>
        <!-- /Section: best-feature -->
        <hr class="my-5">

        <!-- Section: examples -->
        <section id="examples" class="text-center">

          <!-- Heading -->
          <h2 class="mb-5 font-weight-bold text-center">Our Activity</h2>

          <!-- Gird row -->
          <div class="row">
            
            <!-- Gird column -->
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="view overlay z-depth-1-half">
                <img src="<?php echo get_template_directory(dirname(__FILE__), 'img/6.jpg'); ?>" class="img-fluid" alt="">
                <a href="">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <h4 class="my-4"><strong>Heading</strong></h4>
              <p class="grey-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id labore sed quisquam suscipit inventore quos exercitationem similique sunt quibusdam impedit neque aut, ea earum possimus ipsum maiores officiis quae! Hic!</p>
            </div>
            <!-- /Gird column -->
            
            <!-- Gird column -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="view overlay z-depth-1-half">
                <img src="<?php echo get_template_directory(dirname(__FILE__), 'img/7.jpg'); ?>" class="img-fluid" alt="">
                <a href="">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <h4 class="my-4"><strong>Heading</strong></h4>
              <p class="grey-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id labore sed quisquam suscipit inventore quos exercitationem similique sunt quibusdam impedit neque aut, ea earum possimus ipsum maiores officiis quae! Hic!</p>
            </div>
            <!-- /Gird column -->
            
            <!-- Gird column -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="view overlay z-depth-1-half">
                <img src="<?php echo get_template_directory(dirname(__FILE__), 'img/8.jpg'); ?>" class="img-fluid" alt="">
                <a href="">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <h4 class="my-4"><strong>Heading</strong></h4>
              <p class="grey-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id labore sed quisquam suscipit inventore quos exercitationem similique sunt quibusdam impedit neque aut, ea earum possimus ipsum maiores officiis quae! Hic!</p>
            </div>
            <!-- /Gird column -->

          </div>
          <!-- /Gird row -->
         
          <!-- Gird row -->
          <div class="row">
            
            <!-- Gird column -->
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="view overlay z-depth-1-half">
                <img src="<?php echo get_template_directory(dirname(__FILE__), 'img/9.jpg'); ?>" class="img-fluid" alt="">
                <a href="">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <h4 class="my-4"><strong>Heading</strong></h4>
              <p class="grey-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id labore sed quisquam suscipit inventore quos exercitationem similique sunt quibusdam impedit neque aut, ea earum possimus ipsum maiores officiis quae! Hic!</p>
            </div>
            <!-- /Gird column -->
            
            <!-- Gird column -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="view overlay z-depth-1-half">
                <img src="<?php echo get_template_directory(dirname(__FILE__), 'img/10.jpg'); ?>" class="img-fluid" alt="">
                <a href="">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <h4 class="my-4"><strong>Heading</strong></h4>
              <p class="grey-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id labore sed quisquam suscipit inventore quos exercitationem similique sunt quibusdam impedit neque aut, ea earum possimus ipsum maiores officiis quae! Hic!</p>
            </div>
            <!-- /Gird column -->
            
            <!-- Gird column -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="view overlay z-depth-1-half">
                <img src="<?php echo get_template_directory(dirname(__FILE__), 'img/12.jpg'); ?>" class="img-fluid" alt="">
                <a href="">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <h4 class="my-4"><strong>Heading</strong></h4>
              <p class="grey-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id labore sed quisquam suscipit inventore quos exercitationem similique sunt quibusdam impedit neque aut, ea earum possimus ipsum maiores officiis quae! Hic!</p>
            </div>
            <!-- /Gird column -->

          </div>
          <!-- /Gird row -->
          
        
        </section>
        <!-- /Section: examples -->
        <hr class="my-5">
        
        <!-- Section: Gallery -->
        <section id="gallery">

          <!-- Heading -->
          <h2 class="mb-5 font-weight-bold text-center">Gallery Heading</h2>

          <!-- Gird row -->
          <div class="row">

            <!-- Gird column -->
            <div class="col-md-6 mb-4">
              
              <!-- Carousel Wrapper -->
              <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- indicator -->
                <ol class="carousel-indicators">
                  <li data-target="carousel-example-1z" data-slide="0" class="active"></li>
                  <li data-target="carousel-example-1z" data-slide="1"></li>
                  <li data-target="carousel-example-1z" data-slide="2"></li>
                </ol>
                <!-- /indicator -->
                <!-- Slide -->
                <div class="carousel-inner" role="listbox">
                  
                  <!-- First slide -->
                  <div class="carousel-item active">
                    <img src="<?php echo get_template_directory(dirname(__FILE__), 'img/13.jpg'); ?>" alt="" class="d-block w-100">
                  </div>
                  <!-- /First slide -->
                  
                  <!-- Second slide -->
                  <div class="carousel-item">
                    <img src="<?php echo get_template_directory(dirname(__FILE__), 'img/14.jpg'); ?>" alt="" class="d-block w-100">
                  </div>
                  <!-- /Second slide -->
                  
                  <!-- Fouth slide -->
                  <div class="carousel-item">
                    <img src="<?php echo get_template_directory(dirname(__FILE__), 'img/15.jpg'); ?>" alt="" class="d-block w-100">
                  </div>
                  <!-- /Fouth slide -->
                  
                  <!-- Controls -->
                  <a href="#carousel-example-1z" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  </a>
                  <a href="#carousel-example-1z" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  </a>
                  <!-- /Controls -->
                </div>
                <!-- /Slide -->
              </div>
              
              <!-- /Carousel Wrapper -->

            </div>
            <!-- /Gird column -->
            
            <!-- Gird column -->
            <div class="col-md-6">
              <!-- Excerpt -->
              <a href="" class="treal-text">
                <h6 class="pb-1"><i class="fas fa-heart"></i><strong>Lifestyle</strong></h6>  
              </a>
              <h4 class="mb-3"><strong>This title of the news</strong></h4>
              <p>Lorem ipsum dolor sit  eos dolor quam. Saepe quos eius nemo in voluptates totam, quas dicta. Maiores iste eum doloribus libero, facere ea!</p>
              <p>Lorem ipsum dolor sit  eos dolor quam. Saepe quos eius nemo in voluptates totam, quas dicta. Maiores iste eum doloribus libero, facere ea!</p>
              <p><a href=""><strong>Jessica Clark</strong></a> 26/08/2019</p>
              <a href="" class="btn btn-primary btn-md">Read more..</a>
              <!-- /Excerpt -->
            </div>
            <!-- /Gird column -->

          </div>
          <!-- /Gird row -->

        <hr class="my-5">
        
        </section>
        <!-- /Section: Gallery -->
        
         

        <!-- Section: contact -->
        <section id="contact">

           <!-- Heading -->
           <h2 class="mb-5 font-weight-bold text-center">Contact Us</h2>

           <!-- Gird row -->
           <div class="row">
             
             <!-- Gird column -->
             <div class="col-lg-5 col-md-12">
               <!-- Form contact -->
               <form action="post" class="p-5 grey-text">
                 <div class="md-form form-sm"><i class="fas fa-user prefix"></i>
                   <input type="text" class="form-control form-control-sm" id="form3">
                   <label for="form3">Your name</label>
                 </div>
                 <div class="md-form form-sm"><i class="fas fa-envelope prefix"></i>
                   <input type="text" class="form-control form-control-sm" id="form4">
                   <label for="form4">Your email</label>
                 </div>
                 <div class="md-form form-sm"><i class="fas fa-tag prefix"></i>
                   <input type="text" class="form-control form-control-sm" id="form5">
                   <label for="form5">Your subject</label>
                 </div>
                 <div class="md-form form-sm"><i class="fas fa-pencil prefix"></i>
                   <textarea type="text" class="md-textarea form-control form-control-sm" id="form6"></textarea>
                   <label for="form6">Your message</label>
                 </div>
                 <div class="text-center mt-4">
                   <button class="btn btn-primary">Send <i class="far fa-paper-planeml-1"></i></button>
                 </div>
               </form>
               <!-- /Form contact -->
             </div>
             <!-- /Gird column -->
             
             <!-- Gird column -->
             <div class="col-lg-7 col-md-12">
               <!-- <div id="map-container" class="z-depth-1-half map-container mb-5" style="height:400px;"></div> -->
               <div id="map-container" class="z-depth-1-half map-container" style="height: 500px">
                  <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                    style="border:0" allowfullscreen></iframe>
                </div>
                <!-- <div id="map-container" class="z-depth-1-half map-container-6" style="height: 400px">
                  <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" style="border:0" allowfullscreen></iframe>
                </div> -->
              </div>
             <!-- /Gird column -->
 
           </div>
           <!-- /Gird row -->

        </section>
        <!-- /Section: examples -->


      </div>
    </main>
    <!--Main layout-->

    <!-- Footer -->
  <footer class="page-footer font-small teal darken-4 mt-5">
    
    <!-- Social button -->
    <div class="teal accent-4 mb-4 z-depth-1-half">
      <div class="container">
        <!-- Gird row -->
        <div class="row py-3 d-flex align-items-center">
          
          <!-- First Column -->
          <div class="col-lg-5 col-md-6 col-sm12 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0 white-text"><strong>CARI KAMI DI SOSIAL MEDIA TERKAIT</strong></h6>
          </div>
          <!-- /First Column -->

          <!-- Second Column -->
          <div class="col-lg-7 col-md-6 col-sm-12 text-center text-md-right">
            <!--Facebook-->
            <a class="fb-ic ml-0">
                <i class="fab fa-facebook-f white-text mr-4"> </i>
            </a>
            <!--Twitter-->
            <a class="tw-ic">
                <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <!--Google +-->
            <a class="gplus-ic">
                <i class="fab fa-google-plus-g white-text mr-4"> </i>
            </a>
            <!--Linkedin-->
            <a class="li-ic">
                <i class="fab fa-linkedin-in white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
                <i class="fab fa-instagram white-text mr-lg-4"> </i>
            </a>
          </div>
          <!-- /Second Column -->

        </div>
        <!-- /Gird row -->
      </div>
    </div>
    <!-- /Social button -->
    
    <!-- Footer links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Gird row -->
      <div class="row my-3">

        <!-- First column -->
        <div class="col-lg-4 col-md-4 col-sm-12 mt-md-0 mt-2 pl-5">
          <!-- Content -->
          <h5 class="text-uppercase"><strong>MTS Nurus Sa'adah</strong></h5>
          
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width:60px;">
          
          <p>membimbing generasi muda dalam pencapaian mutu IQ, EQ & SQ dalam penempuhan hidup pada akhir zaman</p>
          <!-- /Content -->
        </div>
        <!-- /First column -->

        <hr class="clearfix w-100 d-md-none pb-3">
      
        <!-- Second column -->
        <div class="col-lg-4 col-md-4 mb-md-0 mb-3 px-4">
            <!-- links -->
            <h5 class="text-uppercase"><strong>Hubungi kami</strong></h5>

            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width:60px;">
            
            <table>
              <tr>
                <td><i class="fas fa-building mr-2"></i></td>
                <td class="text-left"><a href="">Mlaten, Wonomlati, Krembung, Kabupaten Sidoarjo, Jawa Timur 61275</a></td>
              </tr>
              <tr>
                <td><i class="fas fa-envelope mr-2"></i></td>
                <td class="text-left"><a href="">nurus.sadah@gmail.com</a></td>
              </tr>
              <tr>
                <td><i class="fas fa-phone mr-2"></i></td>
                <td class="text-left"><a href="">(031) 88580137</a></td>
              </tr>
              <tr>
                <td><i class="fas fa-fax mr-2"></i></td>
                <td class="text-left"><a href="">09876898 98</a></td>
              </tr>
            </table>
            <!-- /links -->
        </div>
        <!-- /Second column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Third column -->
        <div class="col-lg-4 col-md4 col-sm-12">
          <h5 class="uppercase">KERJASAMA</h5>

          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width:60px;">

        </div>
        <!-- /Third column -->

      </div>
      <!-- /Gird row -->

    </div>
    <!-- /Footer links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 ProjectBY:
      <a href="">LEHO_dev.com</a>
    </div>
    <!-- /Copyright -->
  </footer>
  <!-- Footer -->
  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo get_template_directory(dirname(__FILE__), 'js/'); ?>popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo get_template_directory(dirname(__FILE__), 'js/'); ?>bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo get_template_directory(dirname(__FILE__), 'js/'); ?>mdb.js"></script>
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

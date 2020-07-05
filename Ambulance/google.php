<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Workies</title>

    <!-- CSS -->
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Ionicons -->
    <link href="fonts/ionicons/css/ionicons.min.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="css/animate.min.css" rel="stylesheet">
    <!--Magnific Popup -->
    <link href="css/magnific-popup.css" rel="stylesheet">
    <!--Tagsinput CSS -->
    <link href="css/tagsinput.css" rel="stylesheet">    
    <!-- Style.css -->
    <link href="css/style.css" rel="stylesheet">
    <title>Gmap</title>
  </head>
  <body>
    
    <!-- Header -->
    <header class="header">
      <div class="container clearfix">
        <div class="header-inner flex space-between items-center">
          <div class="left">
            <div class="logo"><a href="index-2.html"><img src="images/logo.png" alt="JobPress" class="img-responsive"></a></div>  
          </div> <!-- end .left -->       
          <div class="right flex space-between no-column items-center">
            <div class="navigation">
              <nav class="main-nav">
                <ul class="list-unstyled">
                  <li class="active"><a href="index-2.html">Home</a></li>
                  
                                    <li><a href="candidate-dashboard.html">Profile</a></li>
                  <li class="menu-item-has-children">
                    <a href="candidates-listing.html">Candidates</a>
                    <ul>
                      <li><a href="candidates-listing.html">Browse Candidates</a></li>
                      <li><a href="companies-listing.html">Browse Companies</a></li>
                      <li><a href="jobs-listing.html">Jobs Listing</a></li>
                      <li><a href="job-details.html">Job Details</a></li>
                      <li><a href="categories.html">Job Categories</a></li>
                      <li><a href="post-resume-form.html">Post a Resume</a></li>
                       
                    </ul>                 
                  </li>
                  <li class="menu-item-has-children">
                    <a href="companies-listing.html">Companies</a>
                    <ul>
                      <li><a href="companies-listing.html">Browse Companies</a></li>
                      <li><a href="post-job-form.html">Post a job</a></li>
                      <li><a href="employer-dashboard.html">Employer Dashboard</a></li>
                    </ul>
                  </li>
                                    <li><a href="about.html">About</a></li>
                  <!--<li class="menu-item-has-children">
                    <a href="blog-standard.html">Blog</a>
                    <ul>
                      <li><a href="blog-standard.html">Blog Standard</a></li>
                      <li><a href="blog-grid-full-width.html">Blog Grid Full Width</a></li>
                      <li><a href="blog-masonry-full-width.html">Blog Masonry Full Width</a></li>
                      <li><a href="blog-list.html">Blog List</a></li>
                      <li><a href="blog-single-fullwidth-image.html">Blog Single Image</a></li>
                      <li><a href="blog-single-fullwidth-video.html">Blog Single Video</a></li>
                      <li><a href="blog-single-with-sidebar.html">Blog Single Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="#0">Pages</a>
                    <ul>
                      <li><a href="help.html">Help Tabs</a></li>
                      <li><a href="contact-us-full-width.html">Contact Us</a></li>
                      <li><a href="pricing-plans.html">Pricing plans</a></li>
                    </ul>
                  </li>-->
                </ul>
              </nav> <!-- end .main-nav -->
              <a href="#" class="responsive-menu-open"><i class="ion-navicon"></i></a>
            </div> <!-- end .navigation -->
            <div class="button-group-merged flex no-column">
              <a href="post-job-form.html" class="button">Post a Job</a>
              <a href="#register" class="button" data-toggle="modal" data-target=".bs-modal-sm">Sign Up</a>
            </div> <!-- end .button-group-merged -->
          </div> <!-- end .right -->
        </div> <!-- end .header-inner -->
      </div> <!-- end .container -->
    </header> <!-- end .header -->

    <!-- Responsive Menu -->
    <div class="responsive-menu">
      <a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
      <nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
    </div> <!-- end .responsive-menu -->

    <!-- Login/Signup Popup -->
      <div class="modal fade bs-modal-sm" aria-hidden="true" aria-labelledby="myTabContent"  id="login-signup-popup" role="dialog" tabindex="-1">
          <div class="modal-dialog modal-sm login-signup-modal">
              <div class="modal-content">
                  <div class="popup-tabs">
                      <ul class="nav nav-tabs" id="myTab">
                          <li class=""><a data-toggle="tab" href="#login">login</a></li>
                          <li class="active"><a data-toggle="tab" href="#register">Register</a></li>
                      </ul>
                  </div> <!-- end .popup-tabs -->
                  <div class="modal-body">
                      <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade" id="login">
                              <form class="login-form">

                  <div class="form-group">
                      <label for="InputEmail1">Your Email *</label>
                      <input type="email" class="form-control" id="InputEmail1" placeholder="Enter your email">
                  </div>

                  <div class="form-group">
                      <label for="InputPassword1">Password *</label>
                      <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                  </div>

                  <div class="checkbox flex space-between">
                    <div>
                      <input id="sigin-checkbox" type="checkbox">
                      <label for="sigin-checkbox">Remember me</label>
                    </div>
                      <a href="#0">Lost password?</a>
                  </div> <!-- end .checkbox -->

                  <button type="button" class="button" data-dismiss="modal">Login</button>
                  
                  <p class="text-center divider-text small"><span>or login using</span></p>
                  
                  <div class="social-buttons">
                    <ul class="list-unstyled flex space-between">
                      <li class="twitter-btn"><a href="#0"><i class="ion-social-twitter"></i></a></li>
                      <li class="fb-btn"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                      <li class="g-plus-btn"><a href="#0"><i class="ion-social-googleplus"></i></a></li>
                    </ul>
                  </div> <!-- end .social-buttons -->

                              </form> <!-- end .login-form -->
                          </div> <!-- end login-tab-content -->

                          <div class="tab-pane fade active in" id="register">
                              <form class="signup-form">
                                    <div class="form-group">
                      <label for="InputEmail1">Candidate/Company Name *</label>
                      <input type="email" class="form-control" id="InputEmail2" placeholder="Enter your Candidate/Company Name">
                  </div>
                  <div class="form-group">
                      <label for="InputEmail1">Your Email *</label>
                      <input type="email" class="form-control" id="InputEmail2" placeholder="Enter your email">
                  </div>

                  <div class="form-group">
                      <label for="InputPassword1">Password *</label>
                      <input type="password" class="form-control" id="InputPassword2" placeholder="Password">
                  </div>

                  <div class="form-group">
                      <label for="InputPassword2">Confirm Password *</label>
                      <input type="password" class="form-control" id="InputPassword3" placeholder="Password">
                  </div>

                  <div class="form-group">
                      <label for="select1">Register as:</label>
                      <div class="select-wrapper">
                          <select class="form-control" id="select1">
                            <option>Candidate</option>
                            <option>Company</option>
                        </select>
                      </div> <!-- end .select-wrapper -->                   
                  </div>

                  <div class="checkbox">
                    <input id="signup-checkbox" type="checkbox">
                    <label for="signup-checkbox">I agree with the Terms of Use</label>
                  </div> <!-- end .checkbox -->

                  <button type="button" class="button" data-dismiss="modal">Sign Up</button>
                  
                  <p class="text-center divider-text small"><span>or login using</span></p>
                  
                  <div class="social-buttons">
                    <ul class="list-unstyled flex space-between">
                      <li class="twitter-btn"><a href="#0"><i class="ion-social-twitter"></i></a></li>
                      <li class="fb-btn"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                      <li class="g-plus-btn"><a href="#0"><i class="ion-social-googleplus"></i></a></li>
                    </ul>
                  </div> <!-- end .social-buttons -->

                              </form> <!-- end .signup-form -->
                          </div> <!-- end signup-tab-content -->
                      </div> <!-- end .mytabcontent -->
                  </div> <!-- end .modal-body -->
              </div> <!-- end .modal-content -->
          </div> <!-- end .modal-dialog -->
      </div> <!-- end .modal -->
    
    
    <label for="locationinput">Location:</label >
    <input type="text" id="locationinput" value="<?php 
$r=$_GET['location'];
echo $r;
 ?>"><br><br>
    <button type="button" onclick="geocode()" name="button">Submit</button><center>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtxzsodpa_6Zg75XnnJHod-zc-xhpohdE&callback=initMap"defer></script>
    <center><div id="map" style="height:400px; width:60%;"></div><br>



    <script>
      var map;
      var marker;
      var latc = 20;
      var lngc = 78;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat:latc, lng:lngc},
          zoom: 4
        });
      }

      function geocode() {
        var xhttp;
        var locationinput = document.getElementById("locationinput").value;
        xhttp = new XMLHttpRequest();

        var addone = 'https://maps.googleapis.com/maps/api/geocode/json?address=';
        var addtwo = '&key=AIzaSyAtxzsodpa_6Zg75XnnJHod-zc-xhpohdE';
        var addfinal = addone+locationinput+addtwo;

        xhttp.onreadystatechange = function() {
          if(this.readyState == 4 && this.status == 200){
          var obj = JSON.parse(this.responseText);
          var lato = obj.results[0].geometry.location.lat;
          var lngo = obj.results[0].geometry.location.lng;
          addMarker(lato, lngo);
              }
          };
          xhttp.open("GET", addfinal, true);
          xhttp.send();
      }

        function addMarker(lati, lngi) {
          marker = new google.maps.Marker({position:{lat:lati, lng:lngi}, map:map});
          setCenter(lati, lngi);
        }

        function setCenter(latci, lngci) {
          latc = latci;
          lngc = lngci;
        }

    </script>

  <!-- Footer -->
    <div class="section footer transparent" style="background-image: url('images/background03.jpg');">
      <div class="container">
        <div class="top flex space-between items-center">
          <img src="images/footer-logo.png" alt="footer-logo" class="img-responsive">
          <ul class="list-unstyled footer-menu flex">
            <li><a href="privacypolicy.html">Privacy Policy</a></li>
            <li><a href="terms.html">Terms of Service</a></li>
            <li><a href="contact.html">contact us</a></li>
          </ul> <!-- end .footer-menu -->       
        </div> <!-- end .top -->
        
        
      </div> <!-- end .container -->
    </div> <!-- end .footer -->


    <!-- Scripts -->
    <!-- jQuery -->   
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- google maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy-PboZ3O_A25CcJ9eoiSrKokTnWyAmt8"></script>
    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Wow.js -->
    <script src="js/wow.min.js"></script>
    <!-- Typehead.js -->
    <script src="js/typehead.js"></script>
    <!-- Tagsinput.js -->
    <script src="js/tagsinput.js"></script>
    <!-- Bootstrap Select -->
    <script src="js/bootstrap-select.js"></script>    
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- CountTo -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Isotope -->
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <!-- Magnific-Popup -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- Scripts.js -->
    <script src="js/scripts.js"></script>

  </body>
</html>

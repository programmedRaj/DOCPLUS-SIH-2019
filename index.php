<!DOCTYPE html>
<html lang="en">

<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Doc+</title>
<link rel="icon" type="image/png" href="images/favicon1.png"/>
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
		<link rel="stylesheet" href="css/slider.css" type="text/css">
    

 <style>

    .counter
    {
        background-color: #eaecf0;
        text-align: center;
    }
    .employees,.customer,.design,.order
    {
        margin-top: 70px;
        margin-bottom: 70px;
    }
    .counter-count
    {
        font-size: 18px;
        background-color: #00b3e7;
        border-radius: 50%;
        position: relative;
        color: #ffffff;
        text-align: center;
        line-height: 92px;
        width: 92px;
        height: 92px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
        display: inline-block;
    }

    .employee-p,.customer-p,.order-p,.design-p
    {
        font-size: 24px;
        color: #000000;
        line-height: 34px;
    }

	
	
	
	@keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}

body { margin: 0; } 
div#slider { overflow: hidden; }
div#slider figure img { width: 20%; float: left; }
div#slider figure { 
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 9s slidy infinite; 
}
	
	
	
 </style>
	</head>
	<body>

		<!-- Header -->
		<header class="header">
			<div class="container clearfix">
				<div class="header-inner flex space-between items-center">
					<div class="left">
						<div class="logo"><a href="index.php"><img src="images/splash.png" alt="JobPress" class="img-responsive"></a></div>	
					</div> <!-- end .left -->				
					<div class="right flex space-between no-column items-center">
						<div class="navigation">
							<nav class="main-nav">
								<ul class="list-unstyled">
									<li class="active"><a href="index.php">Home</a></li>
									
                                    <li><a href="loggedin.php">Profile</a></li>
									<li class="menu-item-has-children">
										<a href="#">Virtual Services</a>
										<ul>
											
											<li><a href="vdoc/index.php">Virtual Doctor</a></li>
											<li><a href="vdiet/index.php">Virtual Dietitian</a></li>
											
											 
										</ul>									
									</li>
									 <li><a href="ecommerce/">ePharma</a></li>
									<li class="menu-item-has-children">
										<a href="#">Search</a>
										<ul>
											<li><a href="search/docsearch.php">Hospitals</a></li>
											<li><a href="search/labsearch.php">Laboratories</a></li>
											<li><a href="search/medisearch.php">Medical insurance</a></li>
											
										</ul>
									</li>
                                    <li><a href="blog/blog.php">Blog</a></li>
                                    <li><a href="Ambulance/index.php"><img src="emergency.gif" width="120" height="70"/></a></li>
									<li><a href="login/login.php">Login/Sign Up</a></li>
								</ul>
							</nav> <!-- end .main-nav -->
							<a href="#" class="responsive-menu-open"><i class="ion-navicon"></i></a>
						</div> <!-- end .navigation -->
						
							
						
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
	                            <form class="login-form" method="post" action="loginaction.php">

									<div class="form-group">
									    <label for="InputEmail1">Your Email *</label>
									    <input type="email" class="form-control" id="InputEmail1" placeholder="Enter your email" name="email1">
									</div>

									<div class="form-group">
									    <label for="InputPassword1">Password *</label>
									    <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="password1">
									</div>

									<div class="checkbox flex space-between">
									
									    <a href="forgotpassword.php">Lost password?</a>
									</div> <!-- end .checkbox -->

									<button type="submit" class="button">Login</button>
									
	                            </form> <!-- end .login-form -->
	                        </div> <!-- end login-tab-content -->

	                        <div class="tab-pane fade active in" id="register">
	                            <form class="signup-form" action="register.php" method="post">
                                    <div class="form-group">
									    <label for="InputEmail1"> Name *</label>
									    <input type="text" class="form-control" id="InputEmail2" name="name" placeholder="Enter your Name"  required >
									</div>
									<div class="form-group">
									    <label for="InputEmail1">Your Email *</label>
									    <input type="email" class="form-control" id="InputEmail2" name="email" placeholder="Enter your email" required >
									</div>
									<div class="form-group">
									    <label for="InputEmail1">Contact *</label>
									    <input type="tel" class="form-control" id="InputEmail2" name="contact" placeholder="Enter number"  required >
									</div> 
									
									 <div class="form-group">
									    <label for="InputEmail1">Address*</label>
									    <input type="text" class="form-control" id="InputEmail2" name="address" placeholder="Enter your Address"  required >
									</div> 
									

									<div class="form-group">
									    <label for="InputPassword1">Password *</label>
									    <input type="password" class="form-control" id="InputPassword2" name="pwd" placeholder="Password"  required >
									</div>
									<div class="form-group">
									    <label for="InputPassword1">Confirm Password *</label>
									    <input type="password" class="form-control" id="InputPassword2" name="cnfpwd" placeholder="Confirm Password"  required >
									</div> 
								
									<div class="checkbox">
										<input id="signup-checkbox" type="checkbox" required>
										<label for="signup-checkbox">I agree with the Terms of Use</label>
									</div> <!-- end .checkbox -->

									<button type="submit" name="submit" class="button">Submit</button>
									

	                            </form> <!-- end .signup-form -->
	                        </div> <!-- end signup-tab-content -->
	                    </div> <!-- end .mytabcontent -->
	                </div> <!-- end .modal-body -->
	            </div> <!-- end .modal-content -->
	        </div> <!-- end .modal-dialog -->
	    </div> <!-- end .modal -->
		
		
		
<div id="slider">
<figure>
<img src="3.jpg" alt>
<img src="2.jpg" alt>
<img src="1.jpg" alt>
<img src="4.jpg" alt>
<img src="5.jpg" alt>

</figure>
</div>
	
<div class="section hero-section transparent" style="background-image: url('images/ffre.jpg');">
			<div class="inner">
				<div class="container">
					<div class="job-search-form">
						<h2 style="color:#191414;">Subscribe<span style="color:#191414;">To<sup style="color:#191414;"></sup></span>Our Newsletter.</h2>
						<form class="form-group-flex" action="subscribe.php" method="post">
							
							<div class="form-group">							
								<input type="email" class="form-control" id="input-field-2" placeholder=" Enter email to Subscribe ..It's free" autocomplete="off" name="emaill">
								
								<i class="icon ion-ios-book-outline"></i>
								<div class="result"></div>
							</div>
							<div align="center"><button type="submit" class="button" width="300"><i class="ion-ios-download-outline"></i></button></div>
						</form>
						
					</div> <!-- end .job-search-form -->	
				</div> <!-- end .container -->
				
			</div> <!-- end .inner -->
		</div> <!-- end .section -->		
		
		
		
		
		
<div class="counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="employees">
                    <p class="counter-count">27790</p>
                    <p class="employee-p">Hospitals</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="customer">
                    <p class="counter-count">95</p>
                    <p class="customer-p">Users</p>
                </div>
            </div>

           

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="order">
                    <p class="counter-count">52</p>
                    <p class="order-p">Orders</p>
                </div>
            </div>
        </div>
    </div>
</div>

		<!-- Footer -->
		<div class="section footer transparent" style="background-image: url('images/background03.jpg');">
			<div class="container">
				<div class="top flex space-between items-center">
					<img src="images/favicon1.png" alt="footer-logo" class="img-responsive">
					<ul class="list-unstyled footer-menu flex">
						<li><a href="privacypolicy.html">Privacy Policy</a></li>
						
						
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
		<script>
$('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 500,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
</script>

	</body>

</html>
<!DOCTYPE html>
<html lang="en">
	
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Doc+</title>

		<!-- CSS -->
		<link rel="icon" type="image/png" href="images/icons/favicon1.png"/>
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
		
		
		
		
<style type="text/css">		
		.result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
		 /* Formatting result items */
    .result p{
		width:355px;
		color:#191414;
		background:#f2f2f2;
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #191414;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #2567b2;
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
									 <li><a href="ecommerce/index.php">ePharma</a></li>
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
									
								</ul>
							</nav> <!-- end .main-nav -->
							<a href="#" class="responsive-menu-open"><i class="ion-navicon"></i></a>
						</div> <!-- end .navigation -->
						<div class="button-group-merged flex no-column">
							
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

									<button type="submit" class="button" data-dismiss="modal">Login</button>
									
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
									    <input type="password" class="form-control" id="InputPassword2" name="password" placeholder="password"  required >
									</div>
									<div class="form-group">
									    <label for="InputPassword1">Confirm Password *</label>
									    <input type="password" class="form-control" id="InputPassword2" name="password" placeholder="cpassword"  required >
									</div> 
								
									<div class="checkbox">
										<input id="signup-checkbox" type="checkbox" required>
										<label for="signup-checkbox">I agree with the Terms of Use</label>
									</div> <!-- end .checkbox -->

									<button type="submit" class="button" data-dismiss="modal">Sign Up</button>
									

	                            </form> <!-- end .signup-form -->
	                        </div> <!-- end signup-tab-content -->
	                    </div> <!-- end .mytabcontent -->
	                </div> <!-- end .modal-body -->
	            </div> <!-- end .modal-content -->
	        </div> <!-- end .modal-dialog -->
	    </div> <!-- end .modal -->

		<!-- Hero Section -->
		<div class="section hero-section transparent" style="background-image: url('images/rre.jpg');">
			<div class="inner">
				<div class="container">
					<div class="job-search-form">
						<h2 style="color:#191414;">Find Hospitals nearby you..</h2>
						<form class="form-inline flex" action="getresults.php" method="get">
							
							<div class="form-group">							
								<input type="text" class="form-control" id="input-field-2" placeholder=" Enter pincode" autocomplete="off" name="docpin">
								
								<i class="ion-ios-location-outline"></i>
								<div class="result"></div>
							</div>
							<button type="submit" class="button"><i class="ion-ios-search-strong"></i></button>
						</form>
						
					</div> <!-- end .job-search-form -->	
				</div> <!-- end .container -->
				
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

	

		<!-- Latest Jobs Section -->
		<div class="section Latest-jobs-section">
			<div class="inner">
				<div class="container">
					<div class="section-top-content flex items-center">
						<h1>Top Searches</h1>
					
					</div> <!-- end .section-top-content -->
					<div class="jobs-table">
						<div class="table-header">
							<div class="table-cells flex">
								<div class="job-title-cell"><h6>Job title / Company name</h6></div>
								<div class="job-type-cell"><h6>Type</h6></div>
								<div class="location-cell"><h6>Location</h6></div>
								<div class="expired-date-cell"><h6>Expired Date</h6></div>
								<div class="salary-cell"><h6>Salary</h6></div>					
							</div> <!-- end .table-cells -->
						</div> <!-- end .table-header -->
						<div class="table-row">
							<div class="table-cells flex no-wrap">
								<div class="cell job-title-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Company name</h6>
									</div> <!-- end .cell-label -->
									<img src="images/company-logo06.jpg" alt="company-logo" class="img-responsive">
									<div class="content">
										<h4><a href="job-details.html">Web Designer needed</a></h4>
										<p class="small">Whale creative</p>
									</div> <!-- end .content -->
								</div> <!-- end .job-title-cell -->
								<div class="cell job-type-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Type</h6>
									</div> <!-- end .cell-label -->
									<button type="button" class="button full-time">Full time</button>
								</div>
								<div class="cell location-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Location</h6>
									</div> <!-- end .cell-label -->
									<p>Cupertino<span>, CA, USA</span></p>
								</div>
								<div class="cell expired-date-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Expired date</h6>
									</div> <!-- end .cell-label -->
									<p>Nov 14th<sup>th</sup><span>, 2017</span></p>
								</div>
								<div class="cell salary-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Salary</h6>
									</div> <!-- end .cell-label -->
									<p><sup>$</sup>60<span>/hour</span></p>
								</div>
							</div> <!-- end .table-cells -->
						</div> <!-- end .table-row -->						
						
						
					
						
						</div> <!-- end .table-row -->
						
					</div> <!-- end .jobs-table -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

	

		

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
			<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.form-group input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".form-group").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
	</body>

</html>
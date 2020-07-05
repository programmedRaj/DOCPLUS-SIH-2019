<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blogs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">

	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		<br>
		<?php
		 	require 'connect.php';

			$sql = "SELECT id, name, uid, title, content FROM content";
			$stmt = $conn->prepare($sql);
			$stmt->execute();

			$blogouttitle = array();
			$blogoutcontent = array();
			$blogoutname = array();

			while($blogin = $stmt->fetch(PDO::FETCH_ASSOC))
				{
				$blogouttitle[] = $blogin['title'];
				$blogoutcontent[] = $blogin['content'];
				$blogoutname[] = $blogin['name'];
				}

			$n = $stmt->rowcount();

			for ($i=0; $i < $n ; $i++) {
				$target_file_blog = "uploads/{$blogouttitle[$i]}.jpg";
				$imageFileTypeblog = pathinfo($target_file_blog,PATHINFO_EXTENSION);

				echo			"	<div class='content-section-a'>
							<div class='container'>
									<div class='row jumbotron'>

											<div class='col-lg-5 col-sm-6'>
													<hr class='section-heading-spacer'>




													<h2 class='section-heading'>{$blogouttitle[$i]}</h2>
													<p class='lead'>
															{$blogoutcontent[$i]}
													</p>
											</div>

											<div class='col-lg-5 col-lg-offset-2 col-sm-6'>
													<img class='img-responsive img-rounded' src='uploads/{$blogouttitle[$i]}.jpg' style='max-height: 250px'>
											</div>
										
										<input type='text' placeholder='Type here...' class='form-control'><br>
										<input type='button' class='btn btn-primary' value='Comment'>
									</div>
							</div>
					</div><hr><hr>  ";


			}


			$sql = "SELECT id, uid, email, name, about FROM users";
			$stmt = $conn->prepare($sql);
			$stmt->execute();

			$bloguseruid = array();
			$bloguseremail = array();
			$blogusername = array();

			while($blogin = $stmt->fetch(PDO::FETCH_ASSOC))
				{
				$bloguseruid[] = $blogin['uid'];
				$bloguseremail[] = $blogin['email'];
				$blogusername[] = $blogin['name'];
				$blogabout[] = $blogin['about'];
				}

			$n = $stmt->rowcount();
				echo			"<div id='team' class='team'>";
				echo			"<div class='container'>";
				echo					"<div class='row'>";
				echo							"<h2 class='wow fadeInUp'>Meet our team</h2>";
				echo							"<p class='wow fadeInUp' data-wow-delay='0.4'>Lorem Ipsum passages</p>";

			for ($i=0; $i < $n ; $i++) {

				$target_file_prof = "uploads/profimage/{$blogusername[$i]}.jpg";
				$imageFileTypeprof = pathinfo($target_file_prof,PATHINFO_EXTENSION);


				echo   "<div class='col-lg-3 col-md-3 wow fadeInLeft' data-wow-delay='{$i}s'>";
				echo    "<object class='img-circle' data='uploads/profimage/{$blogusername[$i]}.jpg' type='image/jpg' style='height: 200px; width: 200px'>";
				echo   		"<img src='uploads/defaultf.jpg' class='img-circle' style='height: 200px; width: 200px'>";
				echo       "</object>";
				echo   		"<h4>{$blogusername[$i]}</h4>";
				echo   		"<b>{$blogabout[$i]}</b>";
				echo   "</div>";
		}

		echo						"</div>";
		echo        "</div>";
		echo      "</div>";
		?>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>


	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/smooth-scroll.js"></script>
  <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
<script>
$("#team2 img").tooltip();
</script>
<script>
smoothScroll.init({
speed:1500
});
</script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>

	</body>
</html>

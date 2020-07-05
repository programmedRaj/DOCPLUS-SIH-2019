<!DOCTYPE html>
<html lang="en">
<head>
	<title>V Dietitian</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon1.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter5">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" action="mail.php" method="post">
					<span class="login100-form-title p-b-25">
						<span class="lnr lnr-enter-down"></span> &nbsp; Fill in details :
					</span>
					<div class="wrap-input100 ">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-user"></span>
						</span>
							<br></div>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span></div>
						<br>
						<div class="wrap-input100 ">
							<input class="input100" type="number" name="number" placeholder="Contact Number">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
						<span class="lnr lnr-book"></span>
							</span>
								<br></div>

										<div class="wrap-input100 ">
						<input list="plan" name="plan" class="input100" placeholder="Dietary Preference" autocomplete="off"><span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-dinner"></span>
						</span>
  <datalist name="plan" id="plan" >
    <option value="Vegetarian">
    <option value="Non Vegetarian">
    <option value="Vegan">

  </datalist>
<br>
				</div>

				<div class="wrap-input100 ">
					<input class="input100" type="number" min="25" max="200" step="0.1" name="weight" placeholder="Weight in Kilograms">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<span class="lnr lnr-sort-amount-asc"></span>
					</span>
						<br></div>

				<div class="wrap-input100 ">
							<input class="input100" type="number" min="0" max="2.5" step="0.01" name="height" placeholder="Height in Metres">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<span class="lnr lnr-line-spacing"></span>
							</span>
								<br></div>




					<div class="container-login100-form-btn p-t-15">
						<button class="login100-form-btn" name="submit" type="submit">
							Submit
						</button>
					</div>



					<div class="text-center w-full p-t-15">
						<span class="txt1">

						</span>


					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

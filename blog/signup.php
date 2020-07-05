<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	  <title>Sign Up</title>
</head>

<body>
<?php
require 'connect.php';
require 'functions.php';
?>

<?php
$fname = $lname = $email = $pwd = "";
$isvalid = true;

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$fname = testinput($_POST['firstname']);
	$lname = testinput($_POST['lastname']);
	  if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			$isvalid = false;
			echo '<script>alert("Invalid Email.")</script>';
		}
		else {
			$email = testinput($_POST['email']);
			$isvalid = true;
		}

  	if($_POST["pwd"] != $_POST["cnfpwd"]){
		  echo '<script>alert("Passwords do not match.")</script>';
	   	$isvalid = false;
  	}
		else {
			$pwd = pwdhash($_POST['pwd']);
			$isvalid = true;
		}
}
?>

<div><center>
	<div class="transbox republic">
		<h2 class="display-3"><b>SignUp Here!</b></h2>
		<h2 class="text-muted">And you are good to go! <a href="index.php">Login?</a></h2>
	</div><br/>
</center>
</div>
<div class="container jumbotron">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<div class="form-group container">
			<label for="firstname">First Name:</label>
			<input type="text" name="firstname" class="form-control" style="width: 60%" required value="<?php echo $fname ?>" >
		</div>
		<div class="form-group container">
			<label for="lastname">Last Name:</label>
			<input type="text" name="lastname" class="form-control" style="width: 60%" required value="<?php echo $lname ?>" >
		</div>
		<div class="form-group container">
			<label for="email">Email:</label>
			<input type="text" name="email" class="form-control" style="width: 60%" required value="<?php echo $email ?>">
		</div>
		<div class="form-group container">
			<label for="pwd">Password:</label>
			<input type="password" name="pwd" class="form-control" style="width: 60%" required >
		</div>
		<div class="form-group container">
			<label for="cnfpwd">Confirm Password:</label>
			<input type="password" name="cnfpwd" class="form-control" style="width: 60%" required >
		</div>
		<div class="form-group container">
			<button class="btn btn-primary" name="submit" type="submit">Submit</button>
		</div>
</form>
</div>

<?php
try{
	if(isset($_POST['submit']) && $isvalid == true){

		$sql = "INSERT INTO users (firstname, lastname, email, pwd) VALUES ('$fname', '$lname', '$email', '$pwd')";
		$conn->exec($sql);

		header('location:index.php');
		echo '<script>alert("Account created successfully")</script>';
	}
}

catch(PDOException $e){
	$m = $e->getMessage();
	echo '<script>alert($m)</script>';
}

$conn = null;
?>
</body>

</html>

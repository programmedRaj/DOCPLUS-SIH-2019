<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<title>HomePage</title>
</head>
<body>
<?php
	session_start();
	require 'connect.php';
	require 'functions.php';

$uiderr = $pwderr = '';

	if(isset($_POST['login'])){
		$uidattempt = $_POST['uid'];
		$pwdattempt = $_POST['pwd'];

		$sql = "SELECT id, uid, email, name, pwd FROM users where uid = :uid";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':uid', $uidattempt);
		$stmt->execute();

		$user = $stmt->fetch(PDO::FETCH_ASSOC);

		if($user == false){
			$uiderr = 'ID not found. Please contact us for verification.';
		}
		else if($user == true && $pwdattempt != $user['pwd']){
			$pwderr = 'Incorrect Password';
		}
		else {
			$_SESSION['user_id'] = $user['id'];
			$_SESSION['logged_in'] = time();
			$_SESSION['sesemail'] = $user['email'];
			$_SESSION['sesuid'] = $user['uid'];
			$_SESSION['sesname'] = $user['name'];
			header('location:home.php');
			exit;
		}
	}
 ?>

	<div class="container">
		<h1 class="display-2 "><b>Blog</b></h1>
		<h1>Login to submit your blog.</h1>
	</div><br>

	<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<div class="form-group container">
			<label for="email">Unique ID:  <br></label><span class="text-danger"><?php echo $uiderr ?></span>
			<input type="text" name="uid" class="form-control" required style="max-width: 50%">
		</div>
		<div class="form-group container">
			<label for="pwd">Password: <br></label><span class="text-danger"><?php echo $pwderr ?></span>
			<input type="password" name="pwd" class="form-control"required style="max-width: 50%">
		</div>
		<div class="form-group container">
			<button class="btn btn-primary" name="login" type="submit">Login</button>
		</div>


	</form>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Dashboard</title>
  </head>
  <body>
    <?php session_start();
          require 'functions.php';

          if(!isset($_SESSION['user_id']) && !isset($_SESSION['logged_in'])){
            header('location:loginerr.html');
          }

          if(isset($_POST['logout'])){
            session_unset();
            session_destroy();
            header('location:index.php');
          }
    ?>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Hello, <?php echo $_SESSION['sesname']; ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="profile.php">Profile</a></li>
    </ul>
  </div>
</nav>
<div class="container">
<p><a href="post.php">Create new post?</a></p>
</div>
<div class="container">
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <input class="btn btn-primary" type="submit" name="logout" value="LogOut">
</form>
</div>


  </body>
</html>

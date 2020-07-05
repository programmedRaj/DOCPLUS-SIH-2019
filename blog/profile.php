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
    ?>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Hello, <?php echo $_SESSION['sesname']; ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li class="active"><a href="#">Profile</a></li>
    </ul>
  </div>
</nav>

<div class="container">
    <p>Name: <b><?php echo $_SESSION['sesname'];?> </b></p>
    <p>Email: <b> <?php echo $_SESSION['sesemail'];?> </b> </p><br>
</div>

<div class="container">
<form action="profilepost.php" method="post" enctype="multipart/form-data">
<div class="container">
    <label for="image">Set your profile picture: </label>
    <input class="btn btn-primary" type="file" accept="image/x-png,image/gif,image/jpeg" name="image" id="image"><br>
    <input class="btn btn-primary" type="submit" name="profupdate" value="Update"><br><br><hr>
</div>
  <input class="btn btn-primary" type="submit" name="logout" value="LogOut">
</form>
</div>

  </body>
</html>

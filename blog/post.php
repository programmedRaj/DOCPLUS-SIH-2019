<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Create Post</title>
</head>
<body>
  <?php session_start();?>

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


  <form action="upload.php" method="post"  enctype="multipart/form-data">

    <div class="container form-group">
      <label for="title">Title:</label>
      <textarea class="form-control" rows="1" name="title"></textarea>


        <label for="image">Select image to upload:</label>
        <input class="btn btn-primary" type="file" accept="image/x-png,image/gif,image/jpeg" name="image" id="image"><br>


      <label for="caption">Write your blog:</label>
      <textarea class="form-control" rows="20" name="content"></textarea>
    </div>
    <div class="container form-group">
        <input class="btn btn-primary" type="submit" value="Create Post" name="submit">
        <input class="btn btn-primary" type="submit" name="logout" value="LogOut">
    </div>
  </form>
</html>

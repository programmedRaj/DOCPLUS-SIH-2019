
<?php session_start();

error_reporting(E_ALL && ~E_NOTICE);

      require 'functions.php';
      require 'connect.php';

      if(!isset($_SESSION['user_id']) && !isset($_SESSION['logged_in'])){
        header('location:loginerr.html');
      }

      if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header('location:index.php');
      }

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uid = $_SESSION["sesuid"];
        $title = $_POST["title"];
        $name = $_SESSION["sesname"];
        $content = $_POST["content"];
      }



$imagename = $_POST['title'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {

        $uploadOk = 1;
    } else {

        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
 if ($uploadOk == 0) {
     echo "Sorry, your file was not uploaded.";
 // if everything is ok, try to upload file
 }
else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/{$imagename}.{$imageFileType}")) {
      echo "<script>";
      echo "alert('Blog Successfully Posted.')";
      echo "</script>";

      header("location:post.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

if (isset($_POST["submit"]) && $uploadOk == 1) {
  $sql = "INSERT INTO content (uid, name, title, content) VALUES ('$uid','$name', '$title', '$content')";
  $conn->exec($sql);
}

?>

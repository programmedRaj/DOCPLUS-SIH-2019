<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sharingo_register";

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
echo "<script>";
echo "alert('db error')";
echo "</script>";
}
?>

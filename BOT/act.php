<?php
include('dbconnect.php');

$servername = "localhost";
$username = "sharingo_sih";
$password = "Smartindia12345#";
$dbname = "sharingo_register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name=$_POST['name33'];
$body=$_POST['multi'];
$sytoms=$_POST['sytoms'];
$num=$_POST['num'];


$sql = "INSERT INTO store (name, body, sytoms,num) VALUES ('$name', '$body', '$sytoms','$num')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Thank You.');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<?php
$servername = "localhost";
$username = "sharingo_sih";
$password = "Smartindia12345#";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

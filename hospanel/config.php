<?php
$servername = 'localhost';
$username = 'sharingo_sih';
$password = 'Smartindia12345#';
$dbname = 'sharingo_register';

try{

    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>

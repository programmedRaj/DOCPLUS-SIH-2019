<?php

function pwdhash($data){
  $data = md5($data);
  return $data;
}


function testinput($data){
  $data = stripslashes($data);
  $data = trim($data);
  $data = htmlspecialchars($data);

  return $data;
}

function logout(){
  session_unset();
  session_destroy();
  //header('location:index.php');
}

?>

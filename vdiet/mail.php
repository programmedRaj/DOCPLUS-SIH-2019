<?php

include 'vdiet1.php';

$subject = "docplus - Follow this Diet";

$message = "


<html>
<head>
<title>DOCPLUS-vDIET </title>
</head>
<body>

<h3>Hey $name! Here's a personalised diet designed just for you: </h3><br>
<p>foreach($sample as $g)
{
	echo $g ;
  echo '<br>';
}</p>
<p>$masala</p>

<b>  </b>

<p>Thanks & Regards,<br>Team Web_Devs</p>


</body>
</html>

";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$myfromemail = "docplus@sharingofminds18.biz";
$headers .= "From: ".$myfromemail;



		@mail($email,$subject,$message,$headers);
?>

<?php

	
session_start();
include('dbconnect.php');
if(isset($_POST['email'])&&isset($_POST['password']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$checkEquery="SELECT * from register where email='$email'";
	$query1=mysqli_query($con,$checkEquery);
	if( mysqli_query($con,$checkEquery))
	{
	$numrow = mysqli_num_rows($query1);
	$enc_password = md5($password);
	

			
			$row=mysqli_fetch_assoc($query1);
			


			$db_id = $row['id'];
			 $db_email = $row['email'];
			 $db_pass=$row['password'];
			 $db_name=$row['name'];
			if($email==$db_email&&$enc_password==$db_pass)
			{
				$_SESSION['seid'] = $db_id;
				$_SESSION['seemail'] = $db_email;
				$_SESSION['sename'] = $db_name;
				$_SESSION['sepassword'] = $db_pass;
				header("location:loggedin.php");
			}else
		{
			
			?>
				<script> alert("Authentication failed !");</script>
				<script>window.location.href="index.php";</script>
			<?php
		}
	}	
}
else{
?>
<script>window.location.href="index.php";</script>
<?php
    }	
		?>

?>
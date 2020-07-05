<?php

include ("config.php");
if (isset($_POST['emaill']))
{
	$email=htmlentities($_POST['emaill']);
		$equery = "SELECT email FROM subscribers WHERE email = '$email'";
			$equery_run = mysqli_query($link, $equery);
			if(mysqli_num_rows($equery_run)==1)
				{
					 ?>
	   <script>alert("you have already subscribed to our newsletter Panel. ");</script>
	   <script>window.location.href="index.php";</script>
	   <?php
	   }
	   else
	   {
		   $query="INSERT into subscribers (email) VALUES ('$email')";
		   $query_run=mysqli_query($link, $query);
			if($query_run==1)
			{
				?>
				<script>alert("Subscribed Successfully. ");</script>
	   <script>window.location.href="index.php";</script>
				
		<?php
		}
		else
		{
		?>
			<script>alert('something went wrong');</script>	
			
		<?php
		
		}
	   }
}
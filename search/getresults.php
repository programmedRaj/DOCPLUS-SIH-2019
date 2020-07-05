<!DOCTYPE html>
<html lang="en">
	
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Doc+</title>

		<!-- CSS -->
		<link rel="icon" type="image/png" href="images/icons/favicon1.png"/>
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Ionicons -->
		<link href="fonts/ionicons/css/ionicons.min.css" rel="stylesheet">
		<!-- Owl Carousel -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.default.css" rel="stylesheet">
		<!-- Animate.css -->
		<link href="css/animate.min.css" rel="stylesheet">
		<!--Magnific Popup -->
		<link href="css/magnific-popup.css" rel="stylesheet">
		<!--Tagsinput CSS -->
		<link href="css/tagsinput.css" rel="stylesheet">		
		<!-- Style.css -->
		<link href="css/style.css" rel="stylesheet">
</head>

<ul class="fav-candidates-table-headings flex items-center no-column list-unstyled">
							        		<li class="candidate-name-cell candidate-cell"><h6>Hospital</h6></li>
							        		<li class="candidate-skills-cell candidate-cell"><h6>Address</h6></li>
							        		<li class="candidate-location-cell"><h6>Location</h6></li>	
							        	</ul> <!-- end .fav-candidates-table-headings -->

							        	
														
<?php 
include("dbc.php");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_GET["docpin"])){
	$r=$_GET['docpin'];
    // Prepare a select statement
    $sql = "SELECT * FROM hospu WHERE Pincode ='$r'";
    
    
       if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0)
		{
        
          while($row = mysqli_fetch_array($result)){
                   


				   echo "<div class='fav-candidates-wrapper'>

							        		<div class='fav-candidate flex no-wrap no-column items-center list-unstyled'>
												<div class='candidate-name-cell candidate-cell flex items-center no-column no-wrap'>		
													
													<div class='candidate-cell-inner flex items-center no-column no-wrap'>
														 
														<div class='cell-text no-column'><h3>" . $row["Hospital_Name"] . "</h3></div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div>";
					 echo "<div class='candidate-location-cell candidate-cell flex no-column no-wrap'>
													
													<div class='candidate-cell-inner flex no-column no-wrap'>
														<p>" . $row["Location"] . "</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div>";
					  echo "<div class='candidate-skills-cell candidate-cell flex no-column no-wrap'>
													
													<div class='candidate-cell-inner flex no-column no-wrap'>
									        			<button type='button' class='button button-sm grey '>" . $row["District"] . "</button>
									        			
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-skills-cell -->

												</div>
												</div>";
				 
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute " . mysqli_error($link);
        }
    }
     
    // Close statement
    











 
 
 
 
 
 
 
 
 ?>
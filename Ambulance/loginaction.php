    <?php 
	
session_start();
include('dbconnect.php');
if(isset($_POST['name'])&&isset($_POST['number']))
{
	$name=$_POST['name'];
	$number=$_POST['number'];
	$location=$_POST['location'];
	$sql = "INSERT INTO location (name, numberr,location) VALUES ('$name', '$number','$location')";
if(mysqli_query($conn , $sql)){
    echo "Records inserted successfully.";
    header("location:google.php?location=$location");
    exit();

}
 else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 





}	
		?>
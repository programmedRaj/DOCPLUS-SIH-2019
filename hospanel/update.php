<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$name = $contact = $email = $status= $appt="";
$name_err = $contact_err = $email_err = $status_err= $appt_err="";


// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];

    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    $input_status = trim($_POST["status"]);
    if(empty($input_status)){
        $status_err = "Please enter a valid status.";
    } elseif($input_status!="approved" && $input_status!="cancelled"){
        $status_err = "Please enter approved/cancelled as status.";
    }
    else{
        $status = $input_status;
    }
$input_appt = trim($_POST["appt"]);
    if(empty($input_appt)){
        $appt_err = "Please enter a valid Appointment details.";
    } else{
        $appt = $input_appt;
    }
    // Validate contact
    $input_contact = trim($_POST["contact"]);
    if(empty($input_contact)){
        $contact_err = "Please enter the contact number.";
    } else{
        $contact = $input_contact;
    }

    // Validate $email
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      $isvalid = false;
      $email_err = "Please enter a valid email id.";
    }
    else {
      $email = $_POST['email'];
    }

    // Check input errors before inserting in database
    if(empty($name_err) && empty($contact_err) && empty($status_err) && empty($appt_err)){
        // Prepare an update statement
        $sql = "UPDATE appointments SET name=:name, contact=:contact, email=:email , statuss=:status ,appt=:appt WHERE id=:id";

        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":name", $param_name);
            $stmt->bindParam(":contact", $param_contact);
            $stmt->bindParam(":email", $param_email);
            $stmt->bindParam(":id", $param_id);
            $stmt->bindParam(":status", $param_status);
			$stmt->bindParam(":appt", $param_appt);
            // Set parameters
            $param_name = $name;
            $param_contact = $contact;
            $param_email = $email;
            $param_id = $id;
            $param_status = $status;
			$param_appt = $appt;
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                ?>
                <script>
                alert('Details Updated.');
                window.location.href="index.php";
                </script>
                <?php
				$subject = "docplus - Appointment Details";

$message = "


<html>
<head>
<title>DOCPLUS-hosp_name </title>
</head>
<body>

<h3>Hey $name! doctor approved your appointment </h3><br>
<b>$appt</b>

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
				
				
				
                exit();
            } else{
                echo "<script>alert(Something went wrong. Please try again later.)</script>";
            }
        }

        // Close statement
        unset($stmt);
    }

    // Close connection
    unset($pdo);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);

        // Prepare a select statement
        $sql = "SELECT * FROM appointments WHERE id = :id";
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":id", $param_id);

            // Set parameters
            $param_id = $id;

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);

                    // Retrieve individual field value
                    $name = $row["name"];
                    $contact = $row["contact"];
                    $email = $row["email"];
                    $status = $row["statuss"];
					$app=$row["appt"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }

            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        unset($stmt);

        // Close connection
        unset($pdo);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($contact_err)) ? 'has-error' : ''; ?>">
                            <label>Contact</label>
                            <input type="text" name="contact" class="form-control" value="<?php echo $contact; ?>">
                            <span class="help-block"><?php echo $contact_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($contact_err)) ? 'has-error' : ''; ?>">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                            <span class="help-block"><?php echo $email_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($status_err)) ? 'has-error' : ''; ?>">
                            <label>status</label>
                            <input type="text" name="status" class="form-control" placeholder="approved/cancelled" value="<?php echo $status; ?>">
                            <span class="help-block"><?php echo $status_err;?></span>
                        </div>
						 <div class="form-group <?php echo (!empty($appt_err)) ? 'has-error' : ''; ?>">
                            <label>Appt_details</label>
                            <input type="date" name="appt" class="form-control"  value="<?php echo $appt; ?>">
                            <span class="help-block"><?php echo $appt_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

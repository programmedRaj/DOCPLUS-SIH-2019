<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$name = $contact = $email = "";$status="sent";$appt="";
$name_err = $contact_err = $email_err = $status_err="" ;

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }


    $input_status = trim($_POST["statuss"]);
    if(empty($input_status)){
        $status_err = "Please enter a name.";
    }else{
        $status = $input_status;
    }

    // Validate contact
    $input_contact = $_POST["contact"];
    if(empty($input_contact)){
        $contact_err = "Please enter a valid contact number.";
    }else{
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
		
	 // Validate $appt
	  $input_appt = $_POST["appt"];
		$appt = $input_appt;
    

    // Check input errors before inserting in database
    if(empty($name_err) && empty($contact_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO appointments (name, contact, email,statuss,appt) VALUES (:name, :contact, :email, :statuss ,:appt)";

        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":name", $param_name);
            $stmt->bindParam(":contact", $param_contact);
            $stmt->bindParam(":email", $param_email);
            $stmt->bindParam(":statuss", $param_status);
			$stmt->bindParam(":appt", $param_appt);
            // Set parameters
            $param_name = $name;
            $param_contact = $contact;
            $param_email = $email;
            $param_status= $status;
			$param_appt= $appt;
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                ?>
                <script>
                alert('Details submitted');
                window.location.href='index.php';
               </script>
                <?php
                exit();
            } else{
                echo "<script>alert('Something went wrong. Please try again later.');</script>";
            }
        }

        // Close statement
        unset($stmt);
    }

    // Close connection
    unset($pdo);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Appointment</title>
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
                        <h2>Book Appointment</h2>
                    </div>
                    <p>Please fill this form to make an appointment.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($contact_err)) ? 'has-error' : ''; ?>">
                            <label>Contact Number</label>
                            <input type="number" name="contact" class="form-control" value="<?php echo $contact; ?>" Min="1111111111" Max="9999999999">
                            <span class="help-block"><?php echo $contact_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($contact_err)) ? 'has-error' : ''; ?>">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                            <span class="help-block"><?php echo $email_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($status_err)) ? 'has-error' : ''; ?>" hidden>
                            <label>Status</label>
                            <input type="text" name="statuss" class="form-control" value="<?php echo $status; ?>">
                            <span class="help-block"><?php echo $status_err;?></span>
                        </div>
						<div class="form-group " hidden>
                            <label>Appointment</label>
                            <input type="text" name="appt" class="form-control" value="<?php echo $appt; ?>">
                            
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

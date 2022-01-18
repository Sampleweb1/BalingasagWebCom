<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'mps');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = $studid = $email = "";
$username_err = $password_err = $confirm_password_err = $studid_err = $email_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM rusers WHERE user_name = ? ";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
      
       
    }
    
    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Please confirm password.';     
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
        }
    }
	//Validate Number
	 if(empty(trim($_POST['studid']))){
        $studid_err = "Please enter a Number.";     
    } 
	else{
        $studid = trim($_POST['studid']);
		  if(!filter_var($studid, FILTER_VALIDATE_INT)) {
        $studid_err = "Invalid Number"; 
}
    } 
	 $sql = "SELECT id FROM rusers WHERE studid = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s",$param_studid);
	           // Set parameters
         $param_studid = trim($_POST["studid"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $studid_err = "This Number was already taken.";
                } else{
                    $studid = trim($_POST["studid"]);
                }
				   
			}
		}
	 // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } 
       else{
        $email = trim($_POST['email']);
		  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email format"; 
}
    } 
       
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($mobile_err) && empty($email_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO rusers (user_name, pass, studid, email) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_password, $param_studid, $param_email);
            
            // Set parameters
            $param_username = $username;
			$param_studid = $studid;
			$param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
           
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: userlogin2.php");
            } else{
                echo "";
            }
        }
         
        // Close statement
        
    }
    
    // Close connection
    mysqli_close($link);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BALINGASAG WEB COMMUNITY SIGN UP</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/small-business.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-image:url(BALINGASAG11.jpg); background-repeat:no-repeat; background-position:center;
 background-attachment:fixed; background-size:100%;">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                  <a class="navbar-brand" href="homeindex.php">
                  <img src="image/balingasag123.png" alt="balingasag_mis_or" width="600" height="80">

                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="homeindex.php">Home</a>
                    </li>
                    <li>
                        <a href="story.php">News & Updates</a>
                    </li>
					    <li>
                        <a href="gallary.php">Gallery</a>
                    </li>
                   
                      <li><a href="userlogin2.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
					  </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	    <div class="container">
      
        <!-- Heading Row -->
 
     <div class="col-md-4" style="background-color:white">
     <h2 class="page-header text-center ">Sign UP !</h2>
	    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
			     <label>Username:</label>
                <input type="text" class="form-control"  name="username" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
			<br>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
			<label>Password:</label>
                <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
			<br>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
			<label>Confirm Password:</label>
               <input type="password" class="form-control" name="confirm_password" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
			<br>
		     <div class="form-group <?php echo (!empty($mobile_err)) ? 'has-error' : ''; ?>">
                <label>Number:</label>
              <input type="number" class="form-control"  name="studid" value="<?php echo $studid; ?>">
                <span class="help-block"><?php echo $studid_err; ?></span>
            </div> 
			<br>
			<div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email Address:</label>
              <input type="text" class="form-control"  name="email" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>    
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="SIGNUP">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <h4>Already have an account? <a href="userlogin2.php">Login here</a>.</h4>
        </form>
	</div>
      
<br>
<br>
<br>
<br>
      
       <!-- Footer -->
        

    </div>
	<br>
	<footer>
            <div class="footer align="center">
                <div class="col-lg-12 alert alert-success" align="center" style="background-color:white;margin:0px;padding:20px">
				  <p><b> <a href="contact.php">About us</a> </b></p>
                  <p><a href="http://www.gmail.com"><b>Contact us</b> @ BalingasagMisOr@gmail.com</a></p>
                </div>
            </div>
        </footer>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
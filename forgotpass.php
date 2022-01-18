<?php
session_start();

?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<linK rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BALINGASAG WEB COMMUNITY LOG IN</title>

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

<body style="background-image:url(newsbg3.jpg); background-repeat:no-repeat; background-attachment:fixed; background-size:cover;">

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
 <div class="col-md-4">
<h2>FORGOT PASSWORD?</h2>
<h3 align="center">Log in using ID</h3>
		<form  method="post" action="forgotpass.php">
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-user-circle-o"></i></div>
					<input type="text" class="form-control" id="login_username" placeholder="Enter user name.." name="user_name">
				</div>
				</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-lock"></i></div>
					<input type="text" class="form-control" id="studid" placeholder="Number:" name="studid">
				</div>
		  	</div>
			<input type="submit" id="login_btn" class="btn btn-success btn-block bt-login" data-loading-text="Signing In...." value="Login" name="login">
			<div class="clearfix"></div>
			
					
					
					
				
		</form>
	</div>
      
<br>
<br>
<br>
<br>
      
       <!-- Footer -->
      

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
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

if(isset($_POST['login'])){



$user_name = $_POST['user_name'];
$studid = $_POST['studid'];

 if($user_name==""){
	 echo "<script>alert('User Name is empty')</script>";
 }
  if($studid==""){
	 echo "<script>alert('Number is empty')</script>";
 }
 else{
	 

$login_query="select * from rusers where
			user_name='$user_name' AND studid='$studid'";
			
$run = mysqli_query($link,$login_query);
 
if(mysqli_num_rows($run)>0){


  $_SESSION['user_name']= $user_name;

echo "<script>window.open('homeindex2.php','_self')</script>";


}

else{
echo "<script>alert('User Name or Number Incorrect')</script>";

}
 }
}
?>
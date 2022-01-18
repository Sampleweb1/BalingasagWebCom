<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BALINGASAG WEB COMMUNITY gallery</title>
<link rel="stylesheet" href="css/lightbox.css">
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

<body style="background-color: #e6e6e6">

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
                      <img src="image/mps.png" alt="balingasag_mis_or" width="680" height="80">
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
					    <li class="active lead">
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

    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
       

<div class="row" align="center">
		<h2 class="alert alert-info" style="margin:5px;padding:30px"><b>USER PROFILE</b></h2>
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

 
/* Attempt to connect to MySQL database */

	$query="select * from rusers";
	$run=mysqli_query($link,$query);
	
while($row=mysqli_fetch_array($run)){
	$id = $row['id'];
	$studid =$row['studid'];
	$user_name = $row['user_name'];
	$email = $row['email'];
	$date =$row['date'];
	
?>
<hr>
			<div class="col-md-12" style="background-color: white">
				<a href="admin/uploaded_image/<?php echo $image_name; ?>" data-lightbox="gallary" class="thumbnail">
					<img src="admin/uploaded_image/<?php echo $image_name; ?>" style="width:400px; height:200px;">
				</a>
				<h5 align="left">USER ID :<?php echo $studid; ?></h5>
				<h5 align="left">USER NAME:<?php echo $user_name; ?></h5>
				<h5 align="left">EMAIL:<?php echo $email; ?></h5>
				<h5 align="left">DATE REGISTERED:<?php echo $date; ?></h5>
			</div>
<?php } ?>

			
		</div>
		

    </div>
	<br>
	<br>
	<br>
		<footer>
            <div class="footer " align="center">
                <div class="col-lg-12 alert alert-success" align="center"style="background-color:#ffffff;margin:0px;padding:20px">
				  <p><b> <a href="contact.php">About us</a> </b></p>
                  <p><a href="http://www.gmail.com"><b>Contact us</b> @ moistportal@gmail.com</a></p>
                </div>
            </div>
        </footer>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/lightbox.js"></script>

</body>

</html>

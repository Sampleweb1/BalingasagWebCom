<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION['user_name'])){
	header("location: userlogin2.php");
	}
	?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
           <linK rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title> BALINGASAG WEB COMMUNITY GALLERY</title>
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
<style>
    .gotopbtn{
    position: fixed;
     width: 40px;
     height: 40px;
     background: #ff0000;
     bottom: 20px;
     right: 20px;
   
     text-decoration: none;
     text-align: center;
     line-height: 40px;
     color: white;
     font-size: 17px;
   }
</style>

   <!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('7ys9mh8994p2');
</script>
<!-- End of Async Drift Code -->
<body>

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
                        <a href="homeindex2.php">Home</a>
                    </li>
                    <li>
                        <a href="aboutus2.php">About Us</a>
                    </li>
                    <li>
                        <a href="news.php">News & Updates</a>
                    </li>
					    <li class="lead active">
                        <a href="gallery.php">Gallery</a>
                    </li>
                    
					  <li><a href="userlogout.php" onclick="javascript:return confirm('Are you sure you want to log out?');"><span class="fa fa-sign-in"></span> Logout</a>
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
       

<div class="row">
		<h3 class="alert alert-success">Photo Gallery (Credits to the Owner)</h3>
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
	$query="select * from gallery";
	$run=mysqli_query($link,$query);
	
while($row=mysqli_fetch_array($run)){
	$id = $row['id'];
	$title = $row['title'];
	$image_name = $row['image'];
	
?>
			<div class="col-md-4">
				<a href="admin/uploaded_image/<?php echo $image_name; ?>" data-lightbox="gallary" class="thumbnail">
					<img src="admin/uploaded_image/<?php echo $image_name; ?>" style="width:400px; height:200px;">
				</a>
				<p align="center"><?php echo $title;  ?></p>
				<br>
				
			</div>
<?php } ?>

			
		</div>
		
		

    </div>
		<footer>
            <div class="footer " align="center">
                <div class="col-lg-12 alert alert-success" align="center"style="background-color:#ffffff;margin:0px;padding:20px">
				  <p><b>copyright 2018</b></p>
                  <p><a href="http://www.gmail.com"><b>Contact us</b> @ BalingasagMisOr@gmail.com</a></p>
                </div>
                 <a class="gotopbtn" href="#"> <i class="fa fa-arrow-up"></i> </a>
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

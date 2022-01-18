<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BALINGASAG WEB COMMUNITY</title>
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
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav navbar-right" >
                    <li>
                        <a href="homeindex.php">Home</a>
                    </li>
                    <li class="lead active">
                        <a href="story.php">News Categories</a>
                    </li>
					    <li>
                        <a href="gallary.php">Gallery</a>
                    </li>
                        <li>
					  <a href="userlogin2.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
					  </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
 <br>
    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row" width="70%">
           <div class="col-md-8">
			<div class="carousel slide" data-ride="carousel" id="slider">
				<ol class="carousel-indicators">
					<li data-target="#slider" data-slide-to="0" class="active"></li>
					<li data-target="#slider" data-slide-to="1"></li>
					<li data-target="#slider" data-slide-to="2"></li>
					<li data-target="#slider" data-slide-to="3"></li>
					<li data-target="#slider" data-slide-to="4"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="image/na.jpg">
						
					</div>
					<div class="item">
						<img src="image/n.jpg">
					</div>
					<div class="item">
						<img src="image/n1.jpg">
					</div>
					<div class="item">
						<img src="image/n2.jpg">
					</div>
					
				</div>
				<a href="#slider" data-slide="prev" class="left carousel-control">
				<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a href="#slider" data-slide="next" class="right carousel-control">
				<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>	
            <!-- /.col-md-8 -->
			 <div class="row">
    <div class="col-sm-4 sidenav">
	    <form method="post" action="searchindex.php">
         <div class="input-group">
        <input type="text" class="form-control"  name="name" placeholder="Search News Title..">
        <span class="input-group-btn">
          <button class="btn btn-primary" type="submit" id="postsearch" name="search">Search</button>
        </span>
      </div>
	  </form>
	  <br>
	   <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="story.php">ALL NEWS</a></li>
		<li><a href="ann.php">ANNOUNCEMENTS</a></li>
        <li><a href="events.php">PROGRAMS AND EVENTS</a></li>
       <li><a href="lgu.php">LGU</a></li>
		<li><a href="educ.php">EDUCATIONAL</a></li>
		<li><a href="featured.php">FEATURED ARTICLES</a></li>
		<li><a href="literary.php">LITERARY</a></li>
		
      </ul>
       <div class="input-group">
	    <div class="droupdown" >
		 <button class="btn btn-primary dropdown-toggle"  type="button" data-toggle="dropdown">
		 Archieves<span class="caret"></span></button>
		 <ul class="dropdown-menu">
		  <li><a href="archieves.php">2017</a></li>
		   <li><a href="archieves2.php">2018</a></li>
		    <li><a href="archieves3.php">2019</a></li>
			</ul>
		</div>
	   
	   </div>
	  </div>
            <!-- /.col-md-4 -->
        </div>

<div class="row">
  <div class="col-sm-9">
		
<br>


<div class="panel panel-info">
	  <h2 class="panel-info" align="center">2018 POSTS</h2>
	  </div>
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

	$datetime = 2018;

$query =  "SELECT * FROM posts WHERE date LIKE '%$datetime%'";  
	 
 $result = mysqli_query($link,$query);
	  while($row = mysqli_fetch_assoc($result)){
		  
	
	$title = $row['title'];
	$image =$row['image'];
	$desc = $row['content'];
	$cat = $row['tag'];
	$author = $row['author'];
	$date = $row['date'];
	  ?>
	  
<div class="panel panel-info">

  <div class="panel-heading">
  <h2><cite><?php echo $title; ?></cite></h2>
  </b>
    <p class="label label-primary"><em>posted by: <?php echo $author; ?></em><p>	
	<p class="label label-danger"><em><?php echo $cat; ?></em><p>
	<p class="glyphicon glyphicon-time"><em>published on:<?php echo $date; ?></em><p>
	</div>
   <div class="thumbnail">
      <img src="admin/post_images/<?php echo $image; ?>" alt="5" style="width:550px; height:300px;">
					</div>
  <div class="panel-body" style="text-indent:50px;padding:30px" align="justify">
    <h4><?php echo $desc; ?></h4>
  </div>
  
  <div class="panel-heading"> </div>
			
</div><?php } ?>
		</div>
		
		</div>

    </div>
	
		<footer>
            <div class="footer " align="center">
                <div class="col-lg-12 alert alert-success" align="center"style="background-color:#ffffff;margin:0px;padding:20px">
				  <br>
				  <p><b> Copyright 2018 </b></p>
				   <p><b>Misamis Oriental Institute of Science and Technology</b></p>
				   <p><b>Cogon,Balingasag Misamis Oriental</b></p>
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

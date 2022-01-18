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
                <a class="navbar-brand" href="homeindex2.php">
                <img src="image/balingasag123.png" alt="balingasag_mis_or" width="600" height="80">

                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="homeindex2.php">Home</a>
                    </li>
                    <li class="lead active">
                        <a href="news.php">News & Updates</a>
                    </li>
					    <li>
                        <a href="gallery.php">Gallery</a>
                    </li>
                        <li>
					  <a href="userlogout.php" onclick="javascript:return confirm('Are you sure you want to log out?');"><span class="fa fa-sign-in"></span> Log out</a>
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
        <div class="row" width="60%">
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
                        <img src="image/n42.jpg">
                        
                    </div>
                    <div class="item">
                        <img src="image/n44.jpg">
                    </div>
                    <div class="item">
                        <img src="image/n43.jpg">
                    </div>
                    <div class="item">
                        <img src="image/n41.jpg">
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
         <div class="input-group">
    
   
      </div>
	   <ul class="nav nav-pills nav-stacked">
        <li><a href="ann2.php">ANNOUNCEMENTS</a></li>
        <li><a href="events2.php">PROGRAMS AND EVENTS</a></li>
        <li><a href="lgu2.php">LGU</a></li>
        <li><a href="disaster1.php">DISASTER RISK</a></li>
        <li><a href="engineering1.php">ENGINEERING </a></li>
        <li><a href="RHU2.php">RHU</a></li>
        <li><a href="calendarofact1.php">CALLENDAR OF ACTIVITIES</a></li>
        
      </ul>
      </div>
            <!-- /.col-md-4 -->
        </div>

   <div class="row">
                <div class="col-lg-2 col-md-4">
                        <div class="panel-heading">                    
                                </div>                               
                                     <div class="input-group">
                                      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="news.php">ALL NEWS</a></li></ul>
                                </div>
                            </div>

                   <!--/all Offices -->
                <div class="col-lg-1 col-md-4">
                        <div class="panel-heading"> 
                                </div> 

<div class="input-group">
        <div class="droupdown" >
         <button class="btn btn-primary dropdown-toggle"  type="button" data-toggle="dropdown">
         OFFICES<span class="caret"></span></button>
         <ul class="dropdown-menu">
          <li><a href="agri1.php">AGRICULTURE</a></li>
           <li><a href="BIDS2.php">BIDS</a></li>
            <li><a href="dilg2.php">DILG</a></li>
            <li><a href="oldhouses1.php">TOURISM</a></li>
            <li><a href="budget2.php">BUDGET OFFICE</a></li>
            <li><a href="mpds2.php">MPDC OFFICE</a></li>
           
            </ul>
        </div>
       
       </div>
</div>
              <!--/Institutuion row -->
                <div class="col-lg-1 col-md-4">
                        <div class="panel-heading"> 
                                </div>
                                     <div class="input-group">
        <div class="input-group">
        <div class="droupdown" >
         <button class="btn btn-primary dropdown-toggle"  type="button" data-toggle="dropdown">
         INSTITUTION<span class="caret"></span></button>
         <ul class="dropdown-menu">
          <li><a href="moist2.php">MOIST</a></li>
           <li><a href="strita2.php">STRITA</a></li>
            <li class="active"><a href="stpeter2.php">ST PETER</a></li>
           
            </ul>
        </div>
       </div>
      </div>
            <!-- /.col-md-4 -->
        </div>
    </div>

<div class="row">
  <div class="col-sm-9">	
<br>
<br>
<br>
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
	//getting id from url
  $newsid = $_GET['read'];

//selecting data associated with this particular id
$result = mysqli_query($link, "SELECT * FROM posts WHERE id='$newsid'");
 
while($res = mysqli_fetch_array($result))
{
     $id = $res['id']; 
     $title = $res['title'];
	$cat = $res['tag'];
	$image = $res['image'];
	$content = $res['content'];
	$author = $res['author'];
    $date = $res['date'];
}
?>
<div class="panel panel-success">
  <div class="panel-heading">
  <h2><b><?php echo $title; ?></h2>
  </b>
    <p class="label label-primary"><em>posted by: <?php echo $author; ?></em><p>	
	<p class="label label-danger"><em><?php echo $cat; ?></em><p>
	<p class="glyphicon glyphicon-time"><em>published on:<?php echo $date; ?></em><p>
	</div>
   <div class="thumbnail">
      <img src="admin/post_images/<?php echo $image; ?>" alt="5" style="width:600px; height:300px;">
					</div>
  <div class="panel-body">
    <h4 style="text-indent:50px"><?php echo $content; ?></h4>
  </div>
  </div>
 <div class="panel-footer">
	 <form id="comment" method="post" action="comment2.php" >
	 <input type="hidden" class="form-group" name="user" value="<?php echo $_SESSION['user_name']; ?>">
	 <input type="hidden" class="form-group" name="title" value="<?php echo $title; ?>">
	 <input type="hidden" class="form-group" name="newsid" value="<?php echo $_GET['read']; ?>">
      <h4>Leave a Comment:</h4>
        <div class="form-group">
          <textarea class="form-control" rows="2" name="comment" required></textarea>
        </div>
		<div class="form group" align="right">
        <button type="submit" class="btn btn-primary" name="comments" >Submit</button>
		</div>
		<h4>Comments:</h4>
		 <?php
      $query = "SELECT * FROM comments WHERE nid ='$newsid' ORDER BY date DESC";  	 
	  $result = mysqli_query($link,$query);
	  while($row = mysqli_fetch_assoc($result)){ 
	$neid = $row['nid'];
	$user = $row['user'];
	$comment =$row['comment'];
	$date = $row['date'];
	  ?>
	  <div style="background-color:white;padding:10px">
	  <h4 style="text-indent:10px;text-size:20px;color: #050b0d"><?php echo $user ; ?>: <?php echo $comment ;?></h4>
	  <p style="text-indent:10px"><i><?php echo $date ; ?></i></p>
	  </div>
	   <input type="hidden" class="form-group" value="<?php echo $neid; ?>">
	  <br>
	  <?php 
	  }
  ?>
   <br>
      </form>
      <br>
   </div>		
</div>
		</div>
		</div>
	<footer>
            <div class="footer " align="center">
                <div class="col-lg-12 alert alert-success" align="center"style="background-color:#ffffff;margin:0px;padding:20px">
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
	<script src="js/lightbox.js"></script>
</body>
</html>



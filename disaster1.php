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
    <title>BALINGASAG WEB COMMUNITY DISASTER</title>
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

    html{
        scroll-behavior: smooth;
    }
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

footer
{
    position: fixed;
    bottom: 0;
}
@media(max-height:800px)
{
    footer
    {
        position: static;
    }
    header
    {
        padding-top: 40px;
    }
}
.footer-ditributed
{
    background-color: #2c292f;
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 50px 50px 60px 50px;
    margin-top: 100px;
}
.footer-ditributed .footer-left,
.footer-ditributed .footer-center,
.footer-ditributed .footer-right
{
    display: inline-block;
    vertical-align: top;
}
.footer-ditributed .footer-left
{
    width: 30%;
}
.footer-ditributed .footer-left h3
{
    color: #fff;
    font: normal 36px 'cookie',cursive;
    margin: 0;
}
.footer-ditributed .footer-left img
{
    width: 30%;
}
.footer-ditributed .footer-left h3 span
{
    color: #e0ac1c;
}

.footer-ditributed .footer-company-name
{
    color: #8f9296;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
}

.footer-ditributed .footer-center
{
    width: 35%;
}
.footer-ditributed .footer-center i
{
    background-color: #33383b;
    color: #fff;
    font-size: 25px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
}
.footer-ditributed .footer-center i.fa-envelope
{
    font-size: 17px;
    line-height: 38px;
}
.footer-ditributed .footer-center p
{
    display: inline-block;
    color: #fff;
    vertical-align: middle;
    margin: 0;
}
.footer-ditributed .footer-center p span
{
    display: block;
    font-weight: normal;
    font-size: 14px;
    line-height: 28px;
}
.footer-ditributed .footer-center p a
{
    color: #e0ac1c;
    text-decoration: none;
}
.footer-ditributed .footer-right
{
    width: 30%;
}
.footer-ditributed .footer-right .footer-commpany-about
{
    line-height: 20px;
    color: #92999f;
    font-size: 13px;
    font-weight: normal;
    margin: 0;
}
.footer-ditributed .footer-right .footer-commpany-about span
{
    display: block;
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
}
.footer-ditributed .footer-right .footer-icons
{
    margin-top: 28px;
}
.footer-ditributed .footer-right .footer-icons a
{
    display: inline-block;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-color: #33383b;
    border-radius: 2px;
    font-size: 20px;
    color: #fff;
    text-align: center;
    line-height: 35px;
    margin: 3px;
    margin-bottom: 5px;
    transition: .5s;
}
.footer-ditributed .footer-right .footer-icons a:hover
{
    background: red;
}
@media(max-width:880px)
{
    .footer-ditributed .footer-left,
.footer-ditributed .footer-center,
.footer-ditributed .footer-right
{
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
}
.footer-ditributed .footer-center i
{
    margin-left: 0;
}
}

</style>

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
                      <li>
                         <a href="aboutus2.php">About Us</a>
                    </li>
                    <li class="lead active">
                        <a href="news.php">News & Updates</a>
                    </li>
					    <li>
                        <a href="gallery.php">Gallery</a>
                    </li>
                        <li>
					  <a href="userlogout.php"><span class="fa fa-sign-in"></span> Log out</a>
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
        <div class="row" width="50%">
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
         <form method="post" action="searchindex2.php">
         <div class="input-group">
        <input type="text" class="form-control"  name="name" placeholder="Search News and Articles..">
        <span class="input-group-btn">
          <button class="btn btn-primary" type="submit" id="postsearch" name="search">Search</button>
        </span>
      </div>
</form>
<ul class="nav nav-pills nav-stacked">
        <li><a href="ann2.php">ANNOUNCEMENTS</a></li>
        <li><a href="events2.php">PROGRAMS AND EVENTS</a></li>
        <li><a href="lgu2.php">LGU</a></li>
		<li class="active"><a href="disaster1.php">DISASTER RISK</a></li>
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
            <li><a href="stpeter2.php">ST PETER</a></li>
           
            </ul>
        </div>
       </div>
      </div>
            <!-- /.col-md-4 -->
        </div>
    </div>


<div class="row">
  <div class="col-sm-9-1">
		
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
	$query="select * from posts where tag='Disaster Risk' order by 'date' DESC";
	$run=mysqli_query($link,$query);
	
while($row=mysqli_fetch_array($run)){
	$newsid = $row['id'];
	$title = $row['title'];
	$image =$row['image'];
	$desc = $row['content'];
	$cat = $row['tag'];
	$author = $row['author'];
	$date = $row['date'];
	
	
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
   	 <a href="admin/post_images/<?php echo $image; ?>" data-lightbox="post_images">
   	 	
      <img src="admin/post_images/<?php echo $image; ?>" alt="5" style="width:400px; height:200px;">

  </a>
					</div>
  <div class="panel-body">
    <p><?php echo $desc; ?></p>
  </div>
  
 <div class="panel-footer">
      <h4>Leave a Comment:</h4>
      <form role="form" method="post" action="comment2.php">
	   <div class="form-group">
	     <input type="hidden" name="newsid" value="<?php echo $newsid; ?>">
	   </div>
	   <div class="form-group">
	     <input type="hidden" name="title" value="<?php echo $title; ?>">
	   </div>
	    <div class="form-group">
	     <input type="hidden" name="user" value="<?php echo $_SESSION['user_name'];?>">
	   </div>
        <div class="form-group">
          <textarea class="form-control" rows="3" name="comment" required></textarea>
        </div>
      <button type="submit" class="btn btn-success" name="comments" >Submit</></button>
    
      <hr>
	  <h5><a href="rdmore2.php?read=<?php echo $newsid;?>"><b>View Comments:</b> </a></h5>
     
  </form>
	
	
</div><?php } ?>
		</div>
    </div>
</div>
</div>
</div>

      <footer class="footer-ditributed">
        <div class="footer-left">
            <img src="balingasaglogo.png" alt="logo">
                        <img src="image/firelogo.png" alt="logo">
                         <img src="image/PNPLOGO.png" alt="logo">
                        <img src="image/RHULOGO.png" alt="logo">
            <h3><span>#BalingasagMisOr</span></h3>
           
           <p class="footer-company-name">&copy;2021 Balingasag Misamis Oriental</p>
            <p class="footer-company-name" style="font-size: 100%; font-family: bold; color: white;">PNP HOTLINE NO: (SMART) 0998-5986948</p>
              <p class="footer-company-name" style="font-size: 100%; font-family: bold; color: white;">PNP HOTLINE NO: (TM) 0936-3946292</p>                              
            <p class="footer-company-name" style="font-size: 100%; font-family: bold; color: white;">RHU HOTLINE NO: 0951 840 4097</p>
                <br>
                <br>
                <br>
        </div>
        

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Northern Mindanao,ZIP code: 9005</span>Balingasag, Misamis Oriental</p>
            </div>
                
            <div>
                <i class="fa fa-phone"></i>
                <p>Tel: <a href="(088) 3332175" target="_blank">(088) 3332175</p></a>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank">Contact@BalingasagMisOr.com</a></p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126192.20600597368!2d124.73722112158072!3d8.738326648776885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32ffe1cf2948ff3b%3A0x4d4873fe87748085!2sBalingasag%2C%20Misamis%20Oriental!5e0!3m2!1sen!2sph!4v1641436428699!5m2!1sen!2sph" width="100%" height="100%" style="border:0;"></iframe>
            </div>
        </div>
        
        <div class="footer-right">
            <p class="footer-commpany-about">
                <span>About Balingasag</span>
               Balingasag, officially the Municipality of Balingasag (Cebuano: Lungsod sa Balingasag; Tagalog: Bayan ng Balingasag),is a 2nd class municipality in the province of Misamis Oriental, Philippines. According to the 2020 census, it has a population of 74,385 people. 
               <a href="https://en.wikipedia.org/wiki/Balingasag" target="_blank"><h4>Read More</h4></a>
                 <a href="Automatic Popup window.php">POLICY</a>
            </p>
            <div class="footer-icons">
                <a href="https://www.facebook.com/balingasagmyhome2019"><i class="fa fa-facebook"></i></a>
                <a href="https://mobile.twitter.com/places/0174d7061daced11"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="https://www.youtube.com/watch?v=Vev0p9XrzcE"><i class="fa fa-youtube-play"></i></a>
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

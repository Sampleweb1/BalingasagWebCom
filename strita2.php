<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <linK rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <title>BALINGASAG WEB COMMUNITY BIDS</title>
  <link rel="stylesheet" href="css2/main.scss">
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

<style>
   .section-container
{
--bs-gutter-x: 1.5rem;
--bs-gutter-y: 0;
display: flex;
flex-wrap: wrap;
}
.section-container .columns
{
flex:0 0 auto;
width:50%;
}
.section-container .columns.image
{
background-position:center;
background-repeat:no-repeat;
background-size:cover;
}
.section-container .columns.content .content-container
{
padding:40px 50px;
}
.section-container .columns.content .content-container h5
{
font-weight:700;
font-size:25px;
margin-bottom:20px;
}
.section-container .columns.content .content-container p
{
font-weight:400;
font-size:16px;
margin-bottom:20px;
margin-bottom:15px;
text-align:justify;
}
@media screen and (max-width:767px)
{
.section-container
{
flex-flow:row wrap;
}
.section-container .columns.image{
display:block;
order:1;
width:100%;
height:250px;
}
.section-container .columns.content
{
display:block;
order:2;
width:100%;
}
.section-container .columns.content .content-container
{
padding:20px 35px;
}
.section-container .columns.content .content-container h5
{
margin-bottom:5px;
}
}
.text{
    font-size: 24px;
}
.moretext{
    display: none;
}
.read-more-btn{
    padding: 7px 20px;
    background-color: rgb(149, 170, 197);
    color: rgb(53, 49, 49);
    border: none;
    outline: none;
    font-size: 15px;
    cursor: pointer;
}
.text.show-more .moretext{
  display: inline;
}
.text.show-more .dots{
  display: none;
}
.girl{
  width: 1600px; 
  height: 600px;
  padding: 5rem;
  object-fit: cover;
}
.girl1{
   width: 100px;
   clip-path: circle();
   vertical-align: middle;
   color: white;
}
/*START WRAPPER*/
.wrapper{
  margin-top: 40px;
}

.wrapper h1{
  
  font-size: 40px;
  margin-bottom: 60px;
  text-align: center;
}
.wrapper h1 p{
 
  font-size: 50%;
  text-align: center;
}

.team{
  display: flex;
  justify-content: center;
  width: auto;
  text-align: center;
  flex-wrap: wrap;
}

.team .team_member{
  background: #fff;
  margin: 5px;
  margin-bottom: 50px;
  width: 300px;
  padding: 20px;
  line-height: 20px;
  color: #8e8b8b;  
  position: relative;
}

.team .team_member h3{
  color: black;
  font-size: 30px;
  margin-top: 50px;
}

.team .team_member p.role{
  color: #000000  ;
  margin: 12px 0;
  font-size: 20px;
  text-transform: uppercase;
}
.team .team_member p.role2{
  color: #000000  ;
  text-align: justify;
  font-size: 20px;
}

  html{
        scroll-behavior: smooth;
    }
    /*image slider*/
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
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav navbar-right" >
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
            <a href="userlogout.php" onclick="javascript:return confirm('Are you sure you want to log out?');"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
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
           <li class="active"><a href="strita2.php">STRITA</a></li>
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

  $datetime = 2017;

$query =  "SELECT * FROM agri WHERE date LIKE '%$datetime%'";  
   
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
      <div class="wrapper">
  <h1>St, Rita College Of Balingasag
    <p></p></h1>
  <div class="team">
    <div class="team_member">
      <div class="team_img">
        
      </div>
      <em><h3>VISION</h3></em>
      <p class="role2">Impelled by the loving compassion of Jesus, the Teacher, we in St. Rita’s College of Balingasag nurtures an Ignacain Marian Learning community with ethical corporate responsibility towards the transformation of self and society for the common good.</p>
    </div>
    <div class="team_member">
      <div class="team_img">
        
      </div>
     <em> <h3>MISSION</h3></em>
      <p class="role2">Imbibe the Ignacian Marian core values of Faith, excellence, and Service to be prophets of hope in today’s world. Constantly pursue innovative programs, approaches, and educational strategies to develop world-class professionals. Build up resources and capabilities to respond to contemporary issues towards the enhancement of quality of life. Strengthen our educational thrust for the poor.
</p></div>
  
    </div>
  </div>
    <div class="section-container">
         <div class="columns image" style="background-image:url('img/strita.jpg')">
            &nbsp;
         </div>
         <div class="columns content">
            <div class="content-container">
               <h5>St. Rita's College OF BALINGASAG</h5>
               <p>
               Our Vision: Impelled by the loving compassion of Jesus, the Teacher, we in St. Rita’s College of Balingasag nurtures an Ignacain Marian Learning community with ethical corporate responsibility towards the transformation of self and society for the common good.
               </p>
               <p>
               Our Mission: Imbibe the Ignacian Marian core values of Faith, excellence, and Service to be prophets of hope in today’s world. Constantly pursue innovative programs, approaches, and educational strategies to develop world-class professionals. Build up resources and capabilities to respond to contemporary issues towards the enhancement of quality of life. Strengthen our educational thrust for the poor.
               </p>
            </div>
         </div>
      </div>
      <div class="section-container">
         <div class="columns content">
            <div class="content-container">
               <h5>ADDRESS:
St. Rita’s College of Balingasag
Balingasag, Misamis Oriental
9005 Philippines</h5>
               <p>
               St. Rita's College of Balingasag(SRCB), a Filipino, Catholic, and RVM School living the Ignacian-Marian spirituality of humble servanthood, provide quality
               </p>
               <p>
               History
Beginnings:
St. Rita’s College of Balingasag is a Filipino Catholic, co-educational RVM institution founded in 1901 by the late Jesuit Missionary Rev. Fr. Gregorio Parache, S. J.. It started as an elementary parochial school which aimed at giving basic Catholic Education to the children belonging to the parish. Among its first teachers were the four RVM Sisters: Ma. Marciana de Leon, RVM, Ma. Dominga de Jesus, RVM, Ma. Andrea Alba, RVM, then Superior General of the Congregation.
               </p>
   <p>
   In 1929, the parochial school had its formal change of name into St. Rita’s School in honor of St. Rita de Cascia, patroness of the parish, thus it became the first Catholic Elementary School in Balingasag. In March 1931, it acquired government recognition with Mr. Alfredo Regalado as the first principal. The sisters assigned labored zealously to evangelize the pupils as well as the people of the community.
</p>
<p class="text">
Opening of the High School Department
World War II in 1941 suspended the school’s operation until 1945. In 1946, classes resumed together with the opening of the high school department under the supervision of Fr. Clement Risacher, SJ parish priest (1937-1949 ) but were directly managed by S. Ma. Dolores Vega, RVM Superior of the local community. On April 10, 1949, the high school was recognized and it produced the first batch of graduate with Mr. Vicente Villareal as the first principal of both the high school and grade school departments.
Turn-over of Administration<span class="dots">....</span><span class="moretext">
The year 1957 was so significant for the RVM Sisters. The full responsibility to administer the school was given to them. St. Rita’s High School as it was then named was formally turned over by the Jesuits to the RVM congregation. The change of administration enabled the sisters to give the school the face lift. Necessary facilities were provided for better services to the clientele. But the elementary department experienced a set back on July 1, 1963. The Administration voluntarily closed it for lack of enrollees and better facilities.
Opening of the College Department
</span>
</p>
<button class="read-more-btn">READ MORE</button>
<script src="./main1.js"></script>
            </div>
         </div>
         <div class="columns image" style="background-image:url('img/strita1.jpg')">
            &nbsp;
         </div>
      </div>
      <div class="section-container">
        
            &nbsp;
         </div>
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15773.838988087164!2d124.77443600000001!3d8.742739!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6048de1929e6e531!2sSt.%20Rita&#39;s%20College%20of%20Balingasag!5e0!3m2!1sen!2sph!4v1635758594030!5m2!1sen!2sph" width="100%" height="50%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
         <div class="columns content">
            <div class="content-container">
               <h5></h5>
               <p>
                
               </p>
               <p>
               
               </p>
            </div>
         </div>
      </div>
      <center><a href="https://www.facebook.com/srcbofficial"><img src="img/strita2.png" class="girl1" alt="girl1"></center>
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

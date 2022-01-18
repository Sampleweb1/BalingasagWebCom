<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <linK rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BALINGASAG WEB COMMUNITY OLDHOUSE</title>
 
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

 
 body{
  font-family: sans-serif;
  margin:0;
  line-height: 1.5;
 }

 *{
  box-sizing: border-box;
  margin: 0;
 }

 .container1{
  max-width: 1170px;
  margin: auto;
 }
 .row1{
  display: flex;
  flex-wrap: wrap;
 }
.section-title{
  flex:0 0 100%;
  max-width: 100%;
  margin-bottom: 10px;
}
.section-title h1{
  text-align: center;
  font-size: 36px;
  color:#000000;
}
 .services{
  min-height: 100vh;
  padding:20px 10;
 }

.services .service-items{
  flex:0 0 100%;
  max-width: 100%;
}
.services .service-items .item{
  flex:0 0 33.33%;
  max-width: 33.33%;
  padding: 15px;
}

.services .service-items .item-inner{
  border:1px solid #dddddd;
  padding: 30px;
}
.services .service-items .read-more-cont{
  display: none;
}
.services .service-items .item-inner h3{
  font-size: 20px;
  color:#000000;
  margin-bottom: 30px;
  position: relative;
}
.services .service-items .item-inner h3::before{
  content: '';
  height: 1px;
  width: 80px;
  background-color: #000000;
  position: absolute;
  left:0;
  bottom:-10px;
}

.services .service-items .item-inner p{
  color:#555555;
  font-size: 16px;
  margin:0 0 30px;
}
.services .service-items .item-inner .btn{
  font-size: 16px;
  background-color: transparent;
  border:1px solid #555555;
  color:#555555;
  padding: 8px 15px;
  cursor: pointer;
}

.popup-box{
  position: fixed;
  height: 100%;
  width: 100%;
  left: 0;
  top:0;
  background-color: rgba(0,0,0,0.5);
  z-index: 500;
  visibility: hidden;
  opacity:0;
  transition: all 0.5s ease-in-out;
}
.popup-box.open{
  visibility: visible;
  opacity:1;  
}
.popup-box .popup-content{
  background-color: #ffffff;
  width: 600px;
  position: absolute;
  left: 50%;
  top:50%;
  transform: translate(-50%,-50%);
  border-radius: 8px;
}

.popup-box .popup-header{
  padding: 15px 40px 15px 15px;
  border-bottom: 1px solid #dddddd;
}
.popup-box .popup-header h3{
  margin:0;
  color:#E91E63;
  font-size: 20px;
}
.popup-box .popup-header .popup-close-icon{
  position: absolute;
    height: 30px;
    width: 30px;
    text-align: center;
    color: #555555;
    font-size: 28px;
    line-height: 30px;
    right: 5px;
    top: 5px;
    cursor: pointer;
}
.popup-box .popup-body{
  padding: 15px;
  max-height: 250px;
  overflow-y: auto;
}
.popup-box .popup-body img{
  width: 100%;
  display: block;
  margin-top: 15px;
}
.popup-box .popup-body p{
  font-size: 16px;
  color:#555555;
  margin:0 0 15px;
}
.popup-box .popup-footer{
  padding: 15px;
  border-top:1px solid #dddddd;
  text-align: right;
}
.popup-box .popup-footer .btn{
  padding: 8px 15px;
  border:1px solid #555555;
  color:#555555;
  font-size: 16px;
  background-color: transparent;
  cursor: pointer;
  border-radius: 4px;
}
.popup-box .popup-footer .btn:focus{
  outline: none;
}


/*responsive*/

@media(max-width: 767px){
  .services .service-items .item{
    flex:0 0 100%;
      max-width: 100%;
   }
   .popup-box .popup-content{
     width: calc(100% - 30px);
   }
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
                 <a class="navbar-brand" href="homeindex.php">
                  <img src="image/balingasag123.png" alt="balingasag_mis_or" width="600" height="80">

                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav navbar-right" >
                    <li>
                        <a href="homeindex.php">Home</a>
                    </li>
                    <li>
                      <a href="aboutus.php">About Us</a>
                    </li>
                    <li class="lead active">
                        <a href="story.php">News & Updates</a>
                    </li>
              <li>
                        <a href="gallary.php">Gallery</a>
                    </li>
                        <li>
            <a href="userlogin2.php"><span class="fa fa-sign-in"></span> Login</a>
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
      <div class="row content">
    <div class="col-sm-4 sidenav">
         <br>
              <ul class="nav nav-pills nav-stacked">
        <li><a href="ann.php">ANNOUNCEMENTS</a></li>
        <li><a href="events.php">PROGRAMS AND EVENTS</a></li>
        <li><a href="lgu.php">LGU</a></li>
        <li><a href="disaster.php">DISASTER RISK</a></li>
        <li><a href="engineering.php">ENGINEERING</a></li>
        <li><a href="RHu.php">RHU</a></li>
        <li><a href="calendarofact.php">CALLENDAR OF ACTIVITIES</a></li>

      </ul>
      
      </div>
            <!-- /.col-md-4 -->
        </div>
        <!--/all news row -->
      <div class="row">
                <div class="col-lg-2 col-md-4">
                        <div class="panel-heading">                    
                                </div>                               
                                     <div class="input-group">
                                      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="story.php">ALL NEWS</a></li></ul>
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
          <li><a href="agri.php">AGRICULTURE</a></li>
           <li><a href="BIDS.php">BIDS</a></li>
           
            <li><a href="dilg.php">DILG</a></li>
            <li class="active"><a href="oldhouse.php">TOURISM</a></li>
            <li><a href="budget.php">BUDGET OFFICE</a></li>
            <li><a href="mpdc.php">MPDC OFFICE</a></li>
            </ul>
                    </div>
                </div>
                 </div>

                 <!--/Institutuion row -->
                <div class="col-lg-1 col-md-4">
                        <div class="panel-heading"> 
                                </div>
                                     <div class="input-group">
        <div class="droupdown" >
         <button class="btn btn-primary dropdown-toggle"  type="button" data-toggle="dropdown">
         INSTITUTION<span class="caret"></span></button>
         <ul class="dropdown-menu">
          <li><a href="moist.php">MOIST</a></li>
           <li><a href="strita.php">ST RITA</a></li>
            <li><a href="stpeter.php">ST PETER</a></li>
            </ul>
                    </div>
                    </div>
                     </div>
                      </div>

<div class="row">
  <div class="col-sm-9-1">
    
<br>

<center><p><h3>Contact Person MS: Galdo </p></h3>
<p><h3>Phone no:09365063981</h3></p></center>

<div class="panel panel-info">
    <h2 class="panel-info" align="center">TOURISM BALINGASAG MISAMIS ORIENTAL</h2>
    </div>

     <video   controls height="20%" width="100%" loop autoplay>
      <source src="img/tourismoffice.mp4" type="video/mp4">

    </video>  
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
   <section class="services">
    <div class="container1">
       <div class="row1">
           <div class="section-title">
             <em> <h1>OLD HOUSE'S</h1></em>
                           </div>
       </div>
       <div class="row1">
          <div class="service-items">
              <div class="row1">

                 <!-- item start -->
                 <div class="item">
                    <div class="item-inner">

                       <h3>Vega's Ancestral House</h3>
                       <p>Barangay 5|
                     Rizal Street / Regalado Street</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/vega.jpg" alt="img">
                         
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                 <!-- item end -->
                 <!-- item start -->
                 <div class="item">
                    <div class="item-inner">
                       <h3>Seriña Ancestral House</h3>
                       <p>Barangay 5|
Rizal Street / Regalado Street</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/serina.jpg" alt="img">
                         
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                 <!-- item end -->
                 <!-- item start -->
                  <div class="item">
                    <div class="item-inner">
                       <h3>Ludeña Ancestral House</h3>
                       <p>Barangay 5|
Rizal Street / Address: Ludeña cor. Tres Martines Sts</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/ludena.jpg" alt="img">
                         
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                  <div class="item">
                    <div class="item-inner">
                       <h3>Cuerquez Ancestral House</h3>
                       <p>Barangay 5|
Tres Martines cor. Madronio Sts</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/cuerquez.jpg" alt="img">
                        
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                  <div class="item">
                    <div class="item-inner">
                       <h3>Almendrala's Ancestral House</h3>
                       <p>Barangay 5|
Tres Martines cor. Olano Sts</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/almendralas.jpg" alt="img">
                         
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                  <div class="item">
                    <div class="item-inner">
                       <h3>Mercado's Ancestral House</h3>
                       <p>N/A</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/mercado.jpg" alt="img">
                         
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                 <div class="item">
                    <div class="item-inner">
                       <h3>Valmore's Ancestral House</h3>
                       <p>Barangay 1|
Address. 94 Varquez St.</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/valmores.jpg" alt="img">
                        
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                 <div class="item">
                    <div class="item-inner">
                       <h3>Ladera's Ancestral House</h3>
                       <p>N/A</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/ladera.jpg" alt="img">
                         
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                 <div class="item">
                    <div class="item-inner">
                       <h3>Go's Ancestral House</h3>
                       <p>Barangay 2|
F.Vega cor. Seriña Sts.</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/go.jpg" alt="img">
                        
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                 <div class="item">
                    <div class="item-inner">
                       <h3>Olano's Ancestral House</h3>
                       <p>Barangay 2|
Regalado cor. F. Vega Sts.</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/olano.jpg" alt="img">
                         
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                 <div class="item">
                    <div class="item-inner">
                       <h3>Magsalay's Ancestral House</h3>
                       <p>Barangay 2|
Address. 1008 15de Setiembre St.</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/magsalay.jpg" alt="img">
                         
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                 <div class="item">
                    <div class="item-inner">
                       <h3>Roa's Ancestral House</h3>
                       <p>Barangay 4|
Ludeña cor. Mabini Sts</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/roa1.jpg" alt="img">
                       
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                 <div class="item">
                    <div class="item-inner">
                       <h3>Goking's Ancestral House</h3>
                       <p>Barangay 1|
Address F. Vega cor. Varquez Sts</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/goking.jpg" alt="img">
                      
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                   <div class="item">
                    <div class="item-inner">
                       <h3>Pimentel's Ancestral House</h3>
                       <p>N/A</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/pimentel.jpg" alt="img">
                         
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                   <div class="item">
                    <div class="item-inner">
                       <h3>Moreno's Ancestral House</h3>
                       <p>N/A</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/moreno.jpg" alt="img">
                         
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                  <div class="section-title">
                  <em><h1>HOTEL'S & RESORT</h1></em>
                </div>
                   <div class="item">
                    <div class="item-inner">
                       <h3>Lalings</h3>
                       <p>Cogon Balingasag Misamis Oriental</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/laling.jpg" alt="img">
                         <img src="img/lalings.jpg" alt="img">
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                  <div class="item">
                    <div class="item-inner">
                       <h3>Madeline's Park and Resort</h3>
                       <p>N/A</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/madelines (2).jpg" alt="img">
                         <img src="img/madelines.jpg" alt="img">
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                  <div class="item">
                    <div class="item-inner">
                       <h3>Man-iso Beach Resort</h3>
                       <p>N/A</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/man iso (2).jpg" alt="img">
                         <img src="img/man iso.jpg" alt="img">
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                  <div class="item">
                    <div class="item-inner">
                       <h3>Hardrock Lux Spring Resort</h3>
                       <p>N/A</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/Hardrock (2).jpg" alt="img">
                         <img src="img/Hardrock.jpg" alt="img">
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                  <div class="item">
                    <div class="item-inner">
                       <h3>Renzo's Spring Resort</h3>
                       <p>N/A</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/renzo (2).jpg" alt="img">
                         <img src="img/renzo.jpg" alt="img">
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                  <div class="item">
                    <div class="item-inner">
                       <h3>Gain Beach House</h3>
                       <p>N/A</p>
                       <div class="read-more-cont">
                         <p></p>
                         <img src="img/Gain.jpg" alt="img">
                         <img src="img/Gain1.jpg" alt="img">
                       </div>
                       <button class="btn" type="button">Read More</button>
                    </div>
                 </div>
                 <!-- item end -->
              </div>
          </div>
       </div>
    </div>
 </section>

  <!-- read more popup box start -->
   <div class="popup-box">
      <div class="popup-content">
          <div class="popup-header">
             <h3></h3>
             <span class="popup-close-icon">&times;</span>
          </div>
          <div class="popup-body">
            
          </div>
          <div class="popup-footer">
            <button class="btn popup-close-btn">Close</button>
          </div>
      </div>
   </div>
</div>
  <!-- read more popup box end -->


<script src="js/script.js"></script>
    <!-- end of design -->


   

    <!-- about -->
   
    <!-- end of about -->
   
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

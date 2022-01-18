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
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/lightbox1.min.css"> 
  <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
     <title>BALINGASAG WEB COMMUNITY</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/small-business.css" rel="stylesheet">
<style>
html{
    scroll-behavior: smooth;
}
/*image slider*/
.banner{
    position: relative;
    width: 100%;
    top: 5px;
    min-height: 75vh;
}
.banner .imgBx
{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.banner .imgBx img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
    transition: 0.5s;
    background-position: center;

}
.banner .imgBx img.active
{
    opacity: 1;
}
.controls
{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 0;
    width: 100px;

}
.controls li 
{
    position: relative;
    width: 60px;
    height: 80px;
    background: #fff;
    list-style: none;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}
.controls li:hover
{
    background: #ffeb3b;
}
.controls li:before{
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    border-left: 3px solid #111;
    border-bottom: 3px solid #111;
    transform: rotate(45deg);
} 

.controls li:nth-child(2):before
{
    transform: rotate(225deg);
}

.contentBx{
    position: absolute;
    bottom: 0;
    max-width: 40%;
}
.contentBx div{
     display: none;

}
.contentBx div.active{
     display: block;
     padding: 20px;
     padding-left: 5px;
     background: rgba(0, 0, 0, 0.795);
}
.contentBx div h2{
     color: #fff;
     font-size: 2em;
     
}
.contentBx div p{
    color: #fff;
    font-size: 1.1em;
    
}
.contentBx div a{
     display: none;
     color: rgb(255, 249, 249);
     font-size: 1.1em;
     display: inline-block;
     padding: 10px 30px;
     background: rgb(73, 71, 71);
     margin-top: 10px;
     text-decoration: none;
     letter-spacing: 2px;
     text-transform: uppercase ;
}
/*image slider*/

/*container22*/
.container22 {
    min-height: 40vh;
   
    display: flex;
    align-items: center;
    justify-content: center;

}

.loader_bg{
    position: fixed;
    z-index: 9999999;
    background: #fff;
    width: 100%;
    height: 100%;
}
.loader{
    border: 0 soild transparent;
    border-radius: 50%;
    width: 150px;
    height: 150px;
    position: absolute;
    top: calc(50vh - 75px);
    left: calc(50vw - 75px);
}
.loader:before, .loader:after{
    content: '';
    border: 1em solid #ff5733;
    border-radius: 50%;
    width: inherit;
    height: inherit;
    position: absolute;
    top: 0;
    left: 0;
    animation: loader 2s linear infinite;
    opacity: 0;
}
.loader:before{
    animation-delay: .5s;
}
@keyframes loader{
    0%{
        transform: scale(0);
        opacity: 0;
    }
    50%{
        opacity: 1;
    }
    100%{
        transform: scale(1);
        opacity: 0;
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

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 200px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
 
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* The Modal (background) */
.modal1 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 200px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content1 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
 
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* The Modal (background) */
.modal2 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 200px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content2 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
 
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* The Modal (background) */
.modal3 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 200px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content3 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
 
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* The Modal (background) */
.modal4 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 200px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content4 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
 
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* The Modal (background) */
.modal5 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 200px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content5 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
 
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* The Modal (background) */
.modal6 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 200px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content6 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
 
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* The Modal (background) */
.modal7 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 200px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content7 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
 
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* The Modal (background) */
.modal8 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 200px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content8 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
 
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* The Modal (background) */
.modal9 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 200px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content9 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
 
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal10 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 200px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content10 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
 
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal11 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content11 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
 
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


.modal12 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content12 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}


/* The Close Button */
.close {
 
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal13 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content13 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
 
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/*modal content*/
.modal14 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content14 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}
.modal15 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content15 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.modal16 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content16 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.modal17 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content17 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

h3 b{
    position: relative;
    font-size: 1em;
    letter-spacing: 1px;
    color: #0e3742;
    text-transform: uppercase;
   
    text-align: center;
    -webkit-box-reflect : below 1px linear-gradient(transparent , #0004);
    line-height: 0.70em;
    outline: none;
    animation: animate 3s linear infinite;
}
@keyframes animate{
    0%,18%,20%,50.1%,60%,65.1%,80%,90.1%,92%{
        color: #0e3742;
        text-shadow: none;
    }
    18.1%,20.1%,30%,50%,60.1%,65%,80.1%,90%,92.1%,100%{
        color: #fff;
        text-shadow: 0 0 10px #03bcf4,
                    0 0 20px #03bcf4,
                    0 0 40px #03bcf4,
                    0 0 80px #03bcf4,
                    0 0 160px #03bcf4;

    }
}

.gallery{
    margin: 10px 50px;
}
.gallery img{
    width: 30%;
    padding: 5px;
    
    transition: 1s;
}
.gallery img:hover{
    filter: grayscale(0);
    transform: scale(1.1);
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
	
</head>

<body style="background-color: #e6e6e6;">

     <div class="loader_bg">
    <div class="loader"></div>
</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="height:18%">
        <div class="container" >
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
                <ul class="nav navbar-nav navbar-right" >
                     <li class="lead active">
                        <a href="homeindex2.php"><b>Home</b></a>
                    </li>
                    <li>
                         <a href="aboutus2.php">About Us</a>
                    </li>
                    <li>
                        <a href="news.php">News & Updates</a>
                    </li>
					    <li>
                        <a href="gallery.php">Gallery</a>
                    </li>
                    
                    <li><a href="userlogout.php" onclick="javascript:return confirm('Are you sure you want to log out?');"><i class="fa fa-sign-in"></i> Logout</a>
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
        <div class="row">
           <div class="col-md-8">
			<div class="carousel slide" data-ride="carousel" id="slider">
				<ol class="carousel-indicators">
					<li data-target="#slider" data-slide-to="0" class="active"></li>
					<li data-target="#slider" data-slide-to="1"></li>
					<li data-target="#slider" data-slide-to="2"></li>
					<li data-target="#slider" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="image/balingasag.jpg">
						
					</div>
					<div class="item">
						<img src="image/balingasag1.jpg">
					</div>
					<div class="item">
						<img src="image/balingasag2.jpg">
					</div>
						<div class="item">
						<img src="image/balingasag3.jpg">
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
            <div class="col-md-4">
                <h3><b contenteditable="true">Welcome ,<?php echo $_SESSION['user_name']; ?></b></h3>
				<br>
                 <h4 style="text-indent:50px;margin:10px;padding:5px" align="justify">BALINGASAG WEB COMMUNITY establish a complete entryway for all the  news updates exclusively in the BALINGASAG MISAMIS ORIENTAL</h4>
                <h4 style="text-indent:50px;margin:10px;padding:5px" align="justify"> This Website provides up-to-date news, announcements within the balingasag misamis oriental.</h4>
            </div>
            <!-- /.col-md-4 -->
        </div>


        </section>
<section class="banner">
  <div class="imgBx">
    <img src="image/gaisano4.jpg" class="active">
    <img src="image/joli.jpg">
    <img src="image/moresco4.jpg">
    <img src="image/prince3.jpg">
    <img src="image/terminal3.jpg">
    <img src="image/water.jpg">
    <img src="image/Roa1.jpg">
    <img src="image/FireStation4.jpg">
    <img src="img/GYMBALINGASG.jpg">
    <img src="image/Provincial2.jpg">
    <img src="image/Church1.jpg">
    <img src="image/TheSpot1.jpg">
    <img src="image/PoliceStation1.jpg">
    <img src="image/RHU3.jpg">
    <img src="image/BaliArcade2.jpg">
    <img src="image/Baywalk2.jpg">
    <img src="image/MarketBaliwagan1.jpg">
    <img src="image/Palace5.jpg">
  </div>

  <div class="contentBx" id="blur">
    <div class="active">
      <h2>Gaisano Capital - Balingasag</h2>
      <p>Address: PQWJ+WP9, Balingasag, Misamis Oriental</p>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.41148955758!2d124.77967771410337!3d8.747297095747458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32ffe1fa51018371%3A0x591d9293b99ccc6!2sGaisano%20Capital%20-%20Balingasag!5e0!3m2!1sen!2sph!4v1636103887613!5m2!1sen!2sph" width="330" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
          <button contenteditable="true" style="box-shadow: 10px 5px 9px #bbbbbb; font-size: 130%;" id="myBtn">Details</button>
  
    </div>
     <div>
      <h2>Jollibee Balingasag</h2>
      <p> Address: Petron Westbound, National Highway, Barangay 4, Balingasag, Balingasag, Misamis Oriental</p>
        <p> Phone: (085) 333 5034 </p>

<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.425604874989!2d124.77921381410337!3d8.745964095767416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32ffdf39d1a56a33%3A0xa83ed1b5d46feb4e!2sJollibee%20Balingasag!5e0!3m2!1sen!2sph!4v1636103949952!5m2!1sen!2sph" width="330" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
     <button style="box-shadow: 10px 5px 9px #bbbbbb; font-size: 130%;" id="myBtn1">Details</button>
    </div>
      <div>
      <h2>MORESCO II</h2>
      <p>Address: QQ5M+97P, Balingasag, Misamis Oriental</p>
      <p>Phone: 0997 786 1388</p>
<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.2931271560956!2d124.78101981410349!3d8.758466895580606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33001e036e5af267%3A0x92a9ccc5c661a21e!2sMORESCO%20II!5e0!3m2!1sen!2sph!4v1636104035609!5m2!1sen!2sph" width="330" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
      <button style="box-shadow: 10px 5px 9px #bbbbbb; font-size: 130%;" id="myBtn2">Details</button>
    </div>
      <div>
      <h2>Prince Hypermart – Balingasag</h2>
      <p>Address: QQ5M+97P, Balingasag, Misamis Oriental</p>
        <p>Phone: 0997 786 1388  </p>
 <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.419163768734!2d124.7789875141035!3d8.746572395758312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32ffe169003bb4e1%3A0xedcb00996ab5d744!2sPrince%20Hypermart%20%E2%80%93%20Balingasag!5e0!3m2!1sen!2sph!4v1636104067795!5m2!1sen!2sph" width="330" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
         <button style="box-shadow: 10px 5px 9px #bbbbbb; font-size: 130%;" id="myBtn3">Details</button>
    </div>
      <div>
      <h2>Balingasag BUS TERMINAL</h2>
      <p>Address: PQWM+X2Q, Balingasag, Misamis Oriental</p>
<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.409560051308!2d124.78040641410354!3d8.747479295744776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32ffe1fa81ef8421%3A0x8bdd979503ff2580!2sBalingasag%20BUS%20TERMINAL!5e0!3m2!1sen!2sph!4v1636104102660!5m2!1sen!2sph" width="330" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
         <button style="box-shadow: 10px 5px 9px #bbbbbb; font-size: 130%;" id="myBtn4">Details</button>
    </div>
      <div>
      <h2>Balingasag Water District</h2>
        <p>Address: PQWM+X2Q, Balingasag, Misamis Oriental </p>
        <p>Phone: (08822) 720902<p>
    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.4430877543473!2d124.77928511410342!3d8.744312795792037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32ffe1f093252ea1%3A0x10bd91b3d21eb338!2sBalingasag%20Water%20District!5e0!3m2!1sen!2sph!4v1636104130106!5m2!1sen!2sph" width="330" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
         <button style="box-shadow: 10px 5px 9px #bbbbbb; font-size: 130%;" id="myBtn5">Details</button>
    </div>
    <div>
      <h2>Roa Medical Clinic - Balingasag</h2>
        <p>Address: Balingasag, Misamis Oriental </p>
        <p>Phone: 0918 878 9935 </p>
<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31546.4640183521!2d124.76485512554515!3d8.757063913006506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33001e0300000001%3A0x31a631eb098edf4b!2sRoa%20Medical%20Clinic%20-%20Balingasag!5e0!3m2!1sen!2sph!4v1636104162265!5m2!1sen!2sph" width="330" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
         <button style="box-shadow: 10px 5px 9px #bbbbbb; font-size: 130%;" id="myBtn6">Details</button>
    </div>
    <div>
      <h2>Balingasag Fire Station</h2>
      <p>Address: PQVG+F4Q, Balingasag, Misamis Oriental</p>
      <p>Phone:0975-945-7994</p>
      <p>Phone:0953 265 9402</p>
      <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.4493197310917!2d124.77316621410353!3d8.743724095800822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32ffe1f63534855d%3A0x48d091f53c4aef43!2sFire%20Station!5e0!3m2!1sen!2sph!4v1636104202115!5m2!1sen!2sph" width="330" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
         <button style="box-shadow: 10px 5px 9px #bbbbbb; font-size: 130%;" id="myBtn7">Details</button>
    </div>
    <div>
      <h2>Balingasag Covered Court</h2>
      <p>Address: Osmenia St., Balingasag, Misamis Oriental</p>
      <p>Balingasag, Misamis Oriental, Balingasag </p>
         <button style="box-shadow: 10px 5px 9px #bbbbbb; font-size: 130%;" id="myBtn8">Details</button>
    </div>
    <div>
      <h2>Misamis Oriental Provincial Hospital Balingasag</h2>
      <p>Address: 3, Balingasag, Misamis Oriental </p>
<p>Phone: (088) 333 5413 </p>
       <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.4622322643163!2d124.77142831410346!3d8.742504195819036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32ffe21df3c42e6b%3A0x230978d5417fdbfe!2sMisamis%20Oriental%20Provincial%20Hospital%20Balingasag!5e0!3m2!1sen!2sph!4v1636103321524!5m2!1sen!2sph" width="330" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
         <button style="box-shadow: 10px 5px 9px #bbbbbb; font-size: 130%;" id="myBtn9">Details</button>
    </div>
    <div>
      <h2>Balingasag Church</h2>
      <p>Address: 3, Balingasag, Misamis Oriental </p>
      <p><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7886.901026952644!2d124.7736465742486!3d8.743611324876582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sst%20rita%20parish%20church%20balingasag%20misamis%20oriental!5e0!3m2!1sen!2sph!4v1641162977546!5m2!1sen!2sph" width="330" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
         <button style="box-shadow: 10px 5px 9px #bbbbbb; font-size: 130%;" id="myBtn10">Details</button>
    </div>
     <div>
      <h2>TheSpot</h2>
      <p>Address: QQFH+6FV, Balingasag, Misamis Oriental </p>
      <p><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7886.901026952644!2d124.7736465742486!3d8.743611324876582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sst%20rita%20parish%20church%20balingasag%20misamis%20oriental!5e0!3m2!1sen!2sph!4v1641162977546!5m2!1sen!2sph" width="330" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
         <button style="box-shadow: 10px 5px 9px #bbbbbb; font-size: 130%;" id="myBtn11">Details</button>
    </div>
     <div>
      <h2>Police Station</h2>
      <p>Address: QQFH+6FV, Balingasag, Misamis Oriental </p>
      <p><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7886.901026952644!2d124.7736465742486!3d8.743611324876582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sst%20rita%20parish%20church%20balingasag%20misamis%20oriental!5e0!3m2!1sen!2sph!4v1641162977546!5m2!1sen!2sph" width="330" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
         <button style="box-shadow: 10px 5px 9px #bbbbbb; font-size: 130%;" id="myBtn12">Details</button>
    </div>
      <div>
      <h2>Rural Health Unit (RHU)</h2>
      <p>Address: QQFH+6FV, Balingasag, Misamis Oriental </p>
      <p><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7886.901026952644!2d124.7736465742486!3d8.743611324876582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sst%20rita%20parish%20church%20balingasag%20misamis%20oriental!5e0!3m2!1sen!2sph!4v1641162977546!5m2!1sen!2sph" width="330" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
         <button style="box-shadow: 10px 5px 9px #bbbbbb; font-size: 130%;" id="myBtn13">Details</button>
    </div>
    <div>
      <h2>BaliArcade</h2>
      <p>Address: Address: Barangay Mandangoa, Butuan - Cagayan de Oro - Iligan Rd, Balingasag, Misamis Oriental </p>
      <p>Phone: 0917 551 6350</p>
      <p><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7886.901026952644!2d124.7736465742486!3d8.743611324876582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sst%20rita%20parish%20church%20balingasag%20misamis%20oriental!5e0!3m2!1sen!2sph!4v1641162977546!5m2!1sen!2sph" width="330" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
         <button style="box-shadow: 10px 5px 9px #bbbbbb; font-size: 130%;" id="myBtn14">Details</button>
    </div>
     <div>
      <h2>Baywalk</h2>
      <p>Address: PQRF+R53, Balingasag, Misamis Oriental </p>
      <p><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7886.901026952644!2d124.7736465742486!3d8.743611324876582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sst%20rita%20parish%20church%20balingasag%20misamis%20oriental!5e0!3m2!1sen!2sph!4v1641162977546!5m2!1sen!2sph" width="330" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
         <button style="box-shadow: 10px 5px 9px #bbbbbb; font-size: 130%;" id="myBtn15">Details</button>
    </div>
     <div>
      <h2>Market Baliwagan</h2>
      <p>Address: Baliwagan Balingasag, Misamis Oriental </p>
      <p><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7886.901026952644!2d124.7736465742486!3d8.743611324876582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sst%20rita%20parish%20church%20balingasag%20misamis%20oriental!5e0!3m2!1sen!2sph!4v1641162977546!5m2!1sen!2sph" width="330" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
         <button style="box-shadow: 10px 5px 9px #bbbbbb; font-size: 130%;" id="myBtn16">Details</button>
    </div>
     <div>
      <h2>Balingasag Palace</h2>
      <p>Address:Balingasag Misamis Oriental </p>
      <p> Phone:+63 926 195 9414</p>
      <p><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7886.901026952644!2d124.7736465742486!3d8.743611324876582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sst%20rita%20parish%20church%20balingasag%20misamis%20oriental!5e0!3m2!1sen!2sph!4v1641162977546!5m2!1sen!2sph" width="330" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
         <button style="box-shadow: 10px 5px 9px #bbbbbb; font-size: 130%;" id="myBtn17">Details</button>
    </div>
  </div>
<ul class="controls">
  <li onclick="PrevSlide();PrevSlideText();"></li>
   <li onclick="nextSlide();nextSlideText()"></li>
</ul>
</section>
<script type="text/javascript">
  const imgBx = document.querySelector('.imgBx');
  const slides = imgBx.getElementsByTagName('img');
  var i = 0;

  function nextSlide(){
    slides[i].classList.remove('active');
    i = (i + 1) % slides.length;
    slides[i].classList.add('active');
  }
   function PrevSlide(){
    slides[i].classList.remove('active');
    i = (i - 1 + slides.length) % slides.length;
    slides[i].classList.add('active');
  }


   const contentBx = document.querySelector('.contentBx');
  const slidesText= contentBx.getElementsByTagName('div');
  var j = 0;

  function nextSlideText(){
    slidesText[j].classList.remove('active');
    j = (j + 1) % slidesText.length
    slidesText[j].classList.add('active');
  }
   function PrevSlideText(){
    slidesText[j].classList.remove('active');
    j = (j - 1 + slidesText.length) % slidesText.length
    slidesText[j].classList.add('active');
  }
</script>
        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12" >
                <div class="well text-center" style="background-color: #e6e6e6">
                 <h4 style="color:#cc0000;font-family:Verdana, Geneva, sans-serif"><i><b>"Adapting CHANGE for a BETTER Future"</b></i></h4>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
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


    $query="SELECT * FROM posts ORDER BY date DESC ";
    $run=mysqli_query($link,$query);
    
while($row=mysqli_fetch_array($run)){
    $news_id = $row['id'];
    $title = $row['title'];
    $image = $row['image'];
    $desc = $row['description'];
    $cat = $row['tag'];
    $author = $row['author'];
    $date = $row['date'];
?>
           
            <div class="col-md-4">
              <div class="thumbnail">
                    <img src="admin/post_images/<?php echo $image; ?>" alt="5" style="width:400px; height:200px;">
                <div class="caption">
                    <h4><?php echo $title; ?></h4>
                    <hr>
                        <p>published by:<?php echo $author; ?><p>
                         <p>published on:<?php echo $date; ?><p>
                        <p><i><?php echo $desc; ?></i> </p>
                    <p><a href="rdmore2.php?read=<?php echo $news_id;?>"><em>Read More</em> <span class="glyphicon glyphicon-plus">&nbsp;</span></button></a></p>
                     <p><b>Category: <a href="news.php" class="label label-danger" role="button"><?php echo $cat ?></b></a>
                </div>
            </div>
            </div>
            <!-- /.col-md-4 -->
          <?php }?>
            
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
   
  
  <p>
    <ul>Hours: Open ⋅ Closes 7PM</ul>
     <ul>Sunday 8:30AM–7PM</ul>
       <ul> Monday:  8:30AM–7PM</ul>
        <ul>Tuesday: 8:30AM–7PM </ul>
       <ul> Wednesday: 8:30AM–7PM</ul>
       <ul> Thursday: 8:30AM–7PM </ul>
       <ul> Friday: 8:30AM–7PM</ul>
       <ul> Saturday: 8:30AM–7PM</ul>
       <ul>Gaisano Capital envisions itself to be a quality retail chain of stores of goods and products, reasonably priced and with the value for money, catered to the community it serves taking into consideration their convenience and comfort in the shopping of their needs in the store(s). </ul>
      

        <div class="gallery">
            <a href="image/gaisano.jpg" data-lightbox="mygallery">
                <img src="image/gaisano.jpg"></a>
            <a href="image/gaisano1.jpg" data-lightbox="mygallery"><img src="image/gaisano1.jpg"></a>
            <a href="image/gaisano2.jpg" data-lightbox="mygallery"><img src="image/gaisano2.jpg"></a>
            <a href="image/gaisano3.jpg" data-lightbox="mygallery"><img src="image/gaisano3.jpg"></a>
             <a href="image/gaisano4.jpg" data-lightbox="mygallery"><img src="image/gaisano4.jpg"></a>
        </div>
       <a href="https://www.facebook.com/gaisanocapital.balingasag">Facebook Page</a>
   </p>

  </div>

</div>
<div id="myModal1" class="modal1">

  <!-- Modal content -->
  <div class="modal-content1">
    <span class="close">&times;</span>
    
  <ul>Service options: Dine-in · Takeout · Delivery</ul>
    <ul>Hours: Open ⋅ Closes 7PM</ul>
    <ul>Sunday 7AM–7PM</ul>
       <ul> Monday:  7AM–7PM</ul>
        <ul>Tuesday: 7AM–7PM </ul>
       <ul> Wednesday: 7AM–7PM</ul>
       <ul> Thursday: 7AM–7PM </ul>
       <ul> Friday: 7AM–7PM</ul>
       <ul> Saturday: 7AM–7PM</ul>
       <ul> Phillipines-based chain known fir it's burgers, fries, chicken, spaghetti and Filipino dishes</ul>
    
     
        <div class="gallery">
            <a href="image/joli.jpg" data-lightbox="mygallery">
                <img src="image/joli.jpg"></a>
            <a href="image/joli2.jpg" data-lightbox="mygallery"><img src="image/joli2.jpg"></a>
            <a href="image/joli3.jpg" data-lightbox="mygallery"><img src="image/joli3.jpg"></a>
           
        </div>

       <a href="https://www.facebook.com/gaisanocapital.balingasag">Facebook Page</a>
   </p>

  </div>
</div>
<div id="myModal2" class="modal2">

  <!-- Modal content -->
  <div class="modal-content2">
    <span class="close">&times;</span>
    
  <p>
    <ul>Hours: Open ⋅ Closes 7PM</ul>
    <ul>Sunday 8:30AM–7PM</ul>
       <ul> Monday:  8:30AM–5PM</ul>
        <ul>Tuesday: 8:30AM–5PM </ul>
       <ul> Wednesday: 8:30AM–5PM</ul>
       <ul> Thursday: 8:30AM–5PM </ul>
       <ul> Friday: 8:30AM–5PM</ul>
       <ul> Saturday: 8:30AM–5PM</ul>
       <ul>The MISAMIS ORIENTAL II ELECTRIC SERVICE COOPERATIVE, INC. (MORESCO II) was created pursuant to the provisions of the National Electrification Administration Act (R.A. 6038) as amended by Presidential Decree No. 269. Pursuant to this decree,  MORESCO II was incorporated and registered on October 1, 1976, being the 79th electric coop out of the 119 electric cooperatives in the country. The signing of the First Loan Agreement amounted to P15,680.000 was made on June 6, 1977, and the first town energized on June 25, 1978 was the municipality of Balingasag.</ul>

<ul> MORESCO II serves the power requirement of Eastern Misamis Oriental, with a coverage area encompassing the municipalities of Jasaan, Claveria, Balingasag, Lagonglong, Salay, Binuangan, Sugbongcogon, Kinoguitan, Balingoan, Talisayan, Medina and Magsaysay and the City of Gingoog.  MORESCO II’s franchise area covers approximately 150,000 hectares.</ul>
<ul>Electric utility company in Balingasag, Misamis Oriental</ul>
    
          <div class="gallery">
            <a href="image/moresco.jpg" data-lightbox="mygallery">
                <img src="image/moresco.jpg"></a>
              <a href="image/moresco1.jpg" data-lightbox="mygallery"><img src="image/moresco1.jpg"></a>
                <a href="image/moresco2.jpg" data-lightbox="mygallery"><img src="image/moresco2.jpg"></a>
                  <a href="image/moresco3.jpg" data-lightbox="mygallery"><img src="image/moresco3.jpg"></a>
                    <a href="image/moresco4.jpg" data-lightbox="mygallery"><img src="image/moresco4.jpg"></a>
                  
        
           
        </div>
       <a href="https://www.facebook.com/gaisanocapital.balingasag">Facebook Page</a>
   </p>

  </div>

 </div>
</div>
<div id="myModal3" class="modal3">

  <!-- Modal content -->
  <div class="modal-content3">
    <span class="close">&times;</span>
    
    
  <p>
    <ul>Hours: Open ⋅ Closes 7PM</ul>
    <ul>Sunday: 8:30AM–8PM</ul>
       <ul> Monday: 8:30AM–8PM</ul>
       <ul> Tuesday: 8:30AM–8PM </ul>
       <ul> Wednesday: 8:30AM–8PM</ul>
       <ul> Thursday: 8:30AM–8PM </ul>
       <ul> Friday: 8:30AM–8PM</ul>
       <ul> Saturday: 8:30AM–8PM</ul>
      

        <div class="gallery">
            <a href="image/prince.jpg" data-lightbox="mygallery"><img src="image/prince.jpg"></a>
            <a href="image/prince1.jpg" data-lightbox="mygallery"><img src="image/prince1.jpg"></a>
            <a href="image/prince2.jpg" data-lightbox="mygallery"><img src="image/prince2.jpg"></a>
            <a href="image/prince3.jpg" data-lightbox="mygallery"><img src="image/prince3.jpg"></a>
            
           
        </div>
       <a href="https://www.facebook.com/gaisanocapital.balingasag">Facebook Page</a>
   </p>
</details>
  </div>

 </div>
</div>
<div id="myModal4" class="modal4">

  <!-- Modal content -->
  <div class="modal-content4">
    <span class="close">&times;</span>
     <div class="gallery">
            <a href="image/terminal.jpg" data-lightbox="mygallery"><img src="image/terminal.jpg"></a>
            <a href="image/terminal1.jpg" data-lightbox="mygallery"><img src="image/terminal1.jpg"></a>
            <a href="image/terminal2.jpg" data-lightbox="mygallery"><img src="image/terminal2.jpg"></a>
            <a href="image/terminal3.jpg" data-lightbox="mygallery"><img src="image/terminal3.jpg"></a>
            
           
        </div>
  </div>

 </div>
</div>
<div id="myModal5" class="modal5">

  <!-- Modal content -->
  <div class="modal-content5">
    <span class="close">&times;</span>
    
 
  <p>
        <ul>Hours: Closed ⋅ Opens 8AM</ul>
       <ul> Monday: 8:30AM–5PM</ul>
       <ul> Tuesday: 8:30AM–5PM </ul>
       <ul> Wednesday: 8:30AM–5PM</ul>
       <ul> Thursday: 8:30AM–5PM </ul>
       <ul> Friday: 8:30AM–5PM</ul>
       <ul> Saturday: Closed</ul>
           <ul>Bus and coach company in Balingasag, Misamis Oriental</ul>
      
         <div class="gallery">
            <a href="image/water.jpg" data-lightbox="mygallery"><img src="image/water.jpg"></a>
            <a href="image/water1.jpg" data-lightbox="mygallery"><img src="image/water1.jpg"></a>
            <a href="image/water2.jpg" data-lightbox="mygallery"><img src="image/water2.jpg"></a>
            <a href="image/water3.jpg" data-lightbox="mygallery"><img src="image/water3.jpg"></a>
            <a href="image/water4.jpg" data-lightbox="mygallery"><img src="image/water4.jpg"></a>
            <a href="image/water5.jpg" data-lightbox="mygallery"><img src="image/water5.jpg"></a>
               <a href="image/water6.jpg" data-lightbox="mygallery"><img src="image/water6.jpg"></a>
            
           
        </div>
       
       <a href="https://www.facebook.com/gaisanocapital.balingasag">Facebook Page</a>
   </p>
</details>
  </div>

 </div>
</div>
<div id="myModal6" class="modal6">

  <!-- Modal content -->
  <div class="modal-content6">
    <span class="close">&times;</span>
     
   
  <p>
    <ul> DESCRIPTION</ul>
      <ul>* Facility Name : Roa Medical Clinic * Health Facility Code : DOH000000000000728 * Health Facility Short code : 728 
      * Old Facility Names : ROA MEDICAL CLINIC – BALINGASAG, * Health Facility Type : Infirmary * Ownership Major Classification : Private 
  * Ownership Sub-Classification for Government facilities : * Address : , Cogon, Balingasag, Misamis Oriental * Region : REGION X (NORTHERN MINDANAO)
   * Region PSGC : 100000000 * Province PSGC : 104300000 * City/Municipality PSGC : 104302000 * Barangay PSGC : 104302010 * Landline Number : , 
* Fax Number : * Zip Code : 9005</ul>
    

         <div class="gallery">
            <a href="image/Roa1.jpg" data-lightbox="mygallery"><img src="image/Roa1.jpg"></a>
          <a href="image/Roa2.jpg" data-lightbox="mygallery"><img src="image/Roa2.jpg"></a>
          <a href="image/Roa3.jpg" data-lightbox="mygallery"><img src="image/Roa3.jpg"></a>
          <a href="image/Roa4.jpg" data-lightbox="mygallery"><img src="image/Roa4.jpg"></a>
          <a href="image/Roa5.jpg" data-lightbox="mygallery"><img src="image/Roa5.jpg"></a>
           
        </div>

       <a href="https://www.facebook.com/gaisanocapital.balingasag">Facebook Page</a>
   </p>

  </div>
 </div>
</div>
<div id="myModal7" class="modal7">

  <!-- Modal content -->
  <div class="modal-content7">
    <span class="close">&times;</span>
       <div class="gallery">
            <a href="image/FireStation1.jpg" data-lightbox="mygallery"><img src="image/FireStation1.jpg"></a>
          <a href="image/FireStation2.jpg" data-lightbox="mygallery"><img src="image/FireStation2.jpg"></a>
          <a href="image/FireStation3.jpg" data-lightbox="mygallery"><img src="image/FireStation3.jpg"></a>
          <a href="image/FireStation4.jpg" data-lightbox="mygallery"><img src="image/FireStation4.jpg"></a>
          <a href="image/FireStation5.jpg" data-lightbox="mygallery"><img src="image/FireStation5.jpg"></a>
          <a href="image/FireStation6.jpg" data-lightbox="mygallery"><img src="image/FireStation6.jpg"></a>
          <a href="image/FireStation7.jpg" data-lightbox="mygallery"><img src="image/FireStation7.jpg"></a>
          <a href="image/FireStation8.jpg" data-lightbox="mygallery"><img src="image/FireStation8.jpg"></a>
           
        
  

 </div>
</div>
</div>
<div id="myModal8" class="modal8">

  <!-- Modal content -->
  <div class="modal-content8">
    <span class="close">&times;</span>
    <p>covered court
</p>
  </div>

 </div>
</div>
<div id="myModal9" class="modal9">

  <!-- Modal content -->
  <div class="modal-content9">
    <span class="close">&times;</span>
   
   
  <p>

    <ul>Hours: Open 24hours</ul>
<ul>Sunday   Open 24 hours</ul>
<ul>Monday  Open 24 hours</ul>
<ul>Tuesday Open 24 hours</ul>
<ul>Wednesday   Open 24 hours</ul>
<ul>Thursday    Open 24 hours</ul>
<ul>Friday  Open 24 hours</ul>
<ul>Saturday    Open 24 hours</ul>
<ul> Misamis Oriental Provincial Hospital-Balingasag is one of the popular Local Business located in ,Balingasag listed under Local business in Balingasag , Hospital/clinic in Balingasag , Public services & government in Balingasag.</ul>

 <div class="gallery">
            <a href="image/Provincial1.jpg" data-lightbox="mygallery"><img src="image/Provincial1.jpg"></a>
          <a href="image/Provincial2.jpg" data-lightbox="mygallery"><img src="image/Provincial2.jpg"></a>
         
         
           
        
  </div>


       <a href="https://www.facebook.com/gaisanocapital.balingasag">Facebook Page</a>
   </p>

  </div>
</div>
<div id="myModal10" class="modal10">

  <!-- Modal content -->
  <div class="modal-content10">
    <span class="close">&times;</span>
    
  <ul> Sta. Rita de Cascia Parish of Balingasag Misamis Oriental Sta. Rita de Cascia Church) is said to have started in 1892 by the Jesuits and finished in 1895 at the present location as the original wooden church near the coast was eventually destroyed by an encroaching sea.</ul>
  <ul>THE BALINGASAG CATHOLIC CHURCH (Cathedral) was popularly known as Santa Rita de Cascia Parish Church, is an old brick church, which still proudly stands for over 100 years, was constructed in the 18th century, by Spanish Jesuit Missionaries. The church was originally, a two-storey building, with all its architectural and beautiful structural designs. However, during the Second World War, a certain Japanese Officer with other soldiers sought refuge at the belfry after engaging in a gun battle with the guerrillas that causes the ravage and the burning of the building in order to get rid of the enemies that were posted at the bell towers. In the old times, according to the stories of the folks in town, the sound of its bell reaches as far as Jasaan and Balingoan, the latter two municipalities being considered as part of Balingasag before</ul>


  <div class="gallery">
            <a href="image/Church1.jpg" data-lightbox="mygallery"><img src="image/Church1.jpg"></a>
          <a href="image/Church2.jpg" data-lightbox="mygallery"><img src="image/Church2.jpg"></a>
         
           
        
  </div>
       <ul><a href="https://www.facebook.com/Sta.RitaParish9005/" target="_blank">Facebook Page</a></ul>

      <ul> Source: <a href="https://host.javanielsen.dk/?fbclid=IwAR0IVR4K4dLScm8jJznP31Yc56GulhEcGFqtRtxHW7E6RhNW5r5_Eocp0iU">https://host.javanielsen.dk</a>
</ul>


  </div>
</div>


        <!-- Footer -->
 
    </div>
    <div id="myModal11" class="modal11">

  <!-- Modal content -->
  <div class="modal-content11">
    <span class="close">&times;</span>
   
   
  <p>

    <ul>Hours: Closed ⋅ Opens 10AM</ul>
<ul>Sunday  10AM–9PM</ul>
<ul>Monday  10AM–9PM</ul>
<ul>Tuesday 10AM–9PM</ul>
<ul>Wednesday   10AM–9PM</ul>
<ul>Thursday    10AM–9PM</ul>
<ul>Friday  10AM–9PM</ul>
<ul>Saturday    10AM–9PM</ul>


 <div class="gallery">
            <a href="image/TheSpot1.jpg" data-lightbox="mygallery"><img src="image/TheSpot1.jpg"></a>
          <a href="image/TheSpot2.jpg" data-lightbox="mygallery"><img src="image/TheSpot2.jpg"></a>
         <a href="image/TheSpot3.jpg" data-lightbox="mygallery"><img src="image/TheSpot3.jpg"></a>

         
           
        
  </div>


       <a href="https://www.facebook.com/gaisanocapital.balingasag">Facebook Page</a>
   </p>

  </div>
</div>


 <div id="myModal12" class="modal12">

  <!-- Modal content -->
  <div class="modal-content12">
    <span class="close">&times;</span>
   
   
  <p>

    <ul>Hours: Closed ⋅ Opens 24hours</ul>
<ul>Sunday  24hours</ul>
<ul>Monday  24hours</ul>
<ul>Tuesday 24hours</ul>
<ul>Wednesday   24hours</ul>
<ul>Thursday    24hours</ul>
<ul>Friday  24hours</ul>
<ul>Saturday    24hours</ul>


 <div class="gallery">
            <a href="image/PoliceStation1.jpg" data-lightbox="mygallery"><img src="image/PoliceStation1.jpg"></a>
          <a href="image/PoliceStation2.jpg" data-lightbox="mygallery"><img src="image/PoliceStation2.jpg"></a>
         <a href="image/PoliceStation3.jpg" data-lightbox="mygallery"><img src="image/PoliceStation3.jpg"></a>
           <a href="image/PoliceStation4.jpg" data-lightbox="mygallery"><img src="image/PoliceStation4.jpg"></a>

         
           
        
  </div>


       <a href="https://www.facebook.com/gaisanocapital.balingasag">Facebook Page</a>
   </p>

  </div>
  </div>
   <div id="myModal13" class="modal13">

  <!-- Modal content -->
  <div class="modal-content13">
    <span class="close">&times;</span>
   
   
  <p>

    <ul>Hours: Closed ⋅ Opens 10AM</ul>
<ul>Sunday  10AM–9PM</ul>
<ul>Monday  10AM–9PM</ul>
<ul>Tuesday 10AM–9PM</ul>
<ul>Wednesday   10AM–9PM</ul>
<ul>Thursday    10AM–9PM</ul>
<ul>Friday  10AM–9PM</ul>
<ul>Saturday    10AM–9PM</ul>


 <div class="gallery">
            <a href="image/RHU1.jpg" data-lightbox="mygallery"><img src="image/RHU1.jpg"></a>
          <a href="image/RHU2.jpg" data-lightbox="mygallery"><img src="image/RHU2.jpg"></a>
         <a href="image/RHU3.jpg" data-lightbox="mygallery"><img src="image/RHU3.jpg"></a>

         
           
        
  </div>


       <a href="https://www.facebook.com/gaisanocapital.balingasag">Facebook Page</a>
   </p>

  </div>
</div>
  <div id="myModal14" class="modal14">

  <!-- Modal content -->
  <div class="modal-content14">
    <span class="close">&times;</span>
   
   
  <p>

    <ul>Hours:Closes soon ⋅ 10PM ⋅ Opens 9AM Mon</ul>
<ul>Sunday  9AM–10PM</ul>
<ul>Monday  9AM–10PM</ul>
<ul>Tuesday 9AM–10PM</ul>
<ul>Wednesday 9AM–10PM</ul>
<ul>Thursday    9AM–10PM</ul>
<ul>Friday  9AM–10PM</ul>
<ul>Saturday    9AM–10PM</ul>


 <div class="gallery">
            <a href="image/BaliArcade1.jpg" data-lightbox="mygallery"><img src="image/BaliArcade1.jpg"></a>
          <a href="image/BaliArcade2.jpg" data-lightbox="mygallery"><img src="image/BaliArcade2.jpg"></a>
        
         
           
        
  </div>


       <a href="https://www.facebook.com/gaisanocapital.balingasag">Facebook Page</a>
   </p>

  </div>
</div>
  <div id="myModal15" class="modal15">

  <!-- Modal content -->
  <div class="modal-content15">
    <span class="close">&times;</span>
   
   
  <p>

    


 <div class="gallery">
            <a href="image/Baywalk1.jpg" data-lightbox="mygallery"><img src="image/Baywalk1.jpg"></a>
          <a href="image/Baywalk2jpg" data-lightbox="mygallery"><img src="image/Baywalk2.jg"></a>
         <a href="image/Baywalk3.jpg" data-lightbox="mygallery"><img src="image/Baywalk3.jpg"></a>

         
           
        
  </div>



       <a href="https://www.facebook.com/gaisanocapital.balingasag">Facebook Page</a>
   </p>

  </div>
</div>

  <div id="myModal16" class="modal16">

  <!-- Modal content -->
  <div class="modal-content16">
    <span class="close">&times;</span>
   
   
  <p>



 <div class="gallery">
            <a href="image/MarketBaliwagan1.jpg" data-lightbox="mygallery"><img src="image/MarketBaliwagan1.jpg"></a>
          <a href="image/MarketBaliwagan2.jpg" data-lightbox="mygallery"><img src="image/MarketBaliwagan2.jpg"></a>
         <a href="image/MarketBaliwagan3.jpg" data-lightbox="mygallery"><img src="image/MarketBaliwagan3.jpg"></a>

         
           
        
  </div>


       <a href="https://www.facebook.com/gaisanocapital.balingasag">Facebook Page</a>
   </p>

  </div>
</div>
  <div id="myModal17" class="modal17">

  <!-- Modal content -->
  <div class="modal-content17">
    <span class="close">&times;</span>
   
   
  <p>

    <ul>Hours:Closed ⋅ Opens 8AM</ul>
<ul>Sunday  8AM–4PM</ul>
<ul>Monday  8AM–4PM</ul>
<ul>Tuesday 8AM–4PM</ul>
<ul>Wednesday   8AM–4PM</ul>
<ul>Thursday    8AM–4PM</ul>
<ul>Friday  8AM–4PM</ul>
<ul>Saturday    8AM–4PM</ul>


 <div class="gallery">
            <a href="image/Palace1.jpg" data-lightbox="mygallery"><img src="image/Palace1.jpg"></a>
          <a href="image/Palace12.jpg" data-lightbox="mygallery"><img src="image/Palace2.jpg"></a>
         <a href="image/Palace3.jpg" data-lightbox="mygallery"><img src="image/Palace3.jpg"></a>
         <a href="image/Palace4.jpg" data-lightbox="mygallery"><img src="image/Palace4.jpg"></a>
          <a href="image/Palace5.jpg" data-lightbox="mygallery"><img src="image/Palace5.jpg"></a>
         <a href="image/Palace6.jpg" data-lightbox="mygallery"><img src="image/Palace6.jpg"></a>

           
        
  </div>


       <a href="https://www.facebook.com/gaisanocapital.balingasag">Facebook Page</a>
   </p>

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
 <script>
        setTimeout(function(){
            $('.loader_bg').fadeToggle();
        }, 1500);
    </script>

    <script>
// Get the modal
var modal = document.getElementById("myModal");
var modal1 = document.getElementById("myModal1");
var modal2 = document.getElementById("myModal2");
var modal3 = document.getElementById("myModal3");
var modal4 = document.getElementById("myModal4");
var modal5 = document.getElementById("myModal5");
var modal6 = document.getElementById("myModal6");
var modal7 = document.getElementById("myModal7");
var modal8 = document.getElementById("myModal8");
var modal9 = document.getElementById("myModal9");
var modal10 = document.getElementById("myModal10");
var modal11 = document.getElementById("myModal11");
var modal12 = document.getElementById("myModal12");
var modal13 = document.getElementById("myModal13");
var modal14 = document.getElementById("myModal14");
var modal15 = document.getElementById("myModal15");
var modal16 = document.getElementById("myModal16");
var modal17 = document.getElementById("myModal17");


// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
var btn5 = document.getElementById("myBtn5");
var btn6 = document.getElementById("myBtn6");
var btn7 = document.getElementById("myBtn7");
var btn8 = document.getElementById("myBtn8");
var btn9 = document.getElementById("myBtn9");
var btn10 = document.getElementById("myBtn10");
var btn11 = document.getElementById("myBtn11");
var btn12 = document.getElementById("myBtn12");
var btn13 = document.getElementById("myBtn13");
var btn14 = document.getElementById("myBtn14");
var btn15 = document.getElementById("myBtn15");
var btn16 = document.getElementById("myBtn16");
var btn17 = document.getElementById("myBtn17");



// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span1 = document.getElementsByClassName("close")[1];
var span2 = document.getElementsByClassName("close")[2];
var span3 = document.getElementsByClassName("close")[3];
var span4 = document.getElementsByClassName("close")[4];
var span5 = document.getElementsByClassName("close")[5];
var span6 = document.getElementsByClassName("close")[6];
var span7 = document.getElementsByClassName("close")[7];
var span8 = document.getElementsByClassName("close")[8];
var span9 = document.getElementsByClassName("close")[9];
var span10 = document.getElementsByClassName("close")[10];
var span11 = document.getElementsByClassName("close")[11];
var span12 = document.getElementsByClassName("close")[12];
var span13 = document.getElementsByClassName("close")[13];
var span14 = document.getElementsByClassName("close")[14];
var span15 = document.getElementsByClassName("close")[15];
var span16 = document.getElementsByClassName("close")[16];
var span17 = document.getElementsByClassName("close")[17];


// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}
btn1.onclick = function() {
  modal1.style.display = "block";
}
btn2.onclick = function() {
  modal2.style.display = "block";
}
btn3.onclick = function() {
  modal3.style.display = "block";
}
btn4.onclick = function() {
  modal4.style.display = "block";
}
btn5.onclick = function() {
  modal5.style.display = "block";
}
btn6.onclick = function() {
  modal6.style.display = "block";
}
btn7.onclick = function() {
  modal7.style.display = "block";
}
btn8.onclick = function() {
  modal8.style.display = "block";
}
btn9.onclick = function() {
  modal9.style.display = "block";
}
btn10.onclick = function() {
  modal10.style.display = "block";
}
btn11.onclick = function() {
  modal11.style.display = "block";
}
btn12.onclick = function() {
  modal12.style.display = "block";
}
btn13.onclick = function() {
  modal13.style.display = "block";
}
btn14.onclick = function() {
  modal14.style.display = "block";
}
btn15.onclick = function() {
  modal15.style.display = "block";
}
btn16.onclick = function() {
  modal16.style.display = "block";
}
btn17.onclick = function() {
  modal17.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
span1.onclick = function() {
  modal1.style.display = "none";
}

span2.onclick = function() {
  modal2.style.display = "none";
}

span3.onclick = function() {
  modal3.style.display = "none";
}

span4.onclick = function() {
  modal4.style.display = "none";
}

span5.onclick = function() {
  modal5.style.display = "none";
}

span6.onclick = function() {
  modal6.style.display = "none";
}

span7.onclick = function() {
  modal7.style.display = "none";
}
span8.onclick = function() {
  modal8.style.display = "none";
}

span9.onclick = function() {
  modal9.style.display = "none";
}
span10.onclick = function() {
  modal10.style.display = "none";
}
span11.onclick = function() {
  modal11.style.display = "none";
}
span12.onclick = function() {
  modal12.style.display = "none";
}
span13.onclick = function() {
  modal13.style.display = "none";
}
span14.onclick = function() {
  modal14.style.display = "none";
}
span15.onclick = function() {
  modal15.style.display = "none";
}
span16.onclick = function() {
  modal16.style.display = "none";
}
span17.onclick = function() {
  modal17.style.display = "none";
}



// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>

</html>

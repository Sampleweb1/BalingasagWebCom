<!DOCTYPE html>
<html lang="en">
<head>
    <title>Automatic Popup</title>
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--Stylesheets-->
    <style media="screen">
    	*,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #0855ae;
	
}
.popup{
    background-color: #ffffff;
    width: 420px;
    padding: 30px 40px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
    border-radius: 8px;
    font-family: "Poppins",sans-serif;
    display: none; 
    text-align: center;
}
.popup button{
    display: block;
    margin:  0 0 20px auto;
    background-color: transparent;
    font-size: 30px;
    color: #ffffff;
		background: #03549a;
		border-radius: 100%;
		width: 40px;
		height: 40px;
    border: none;
    outline: none;
    cursor: pointer;
}
.popup h2{
	margin-top: -20px;
}
.popup1 p{
    font-size: 14px;
    text-align: justify;
    margin: 20px 0;
    line-height: 25px;
}
.popup2 a{
    display: block;
    width: 150px;
    position: relative;
    margin: 10px auto;
    text-align: center;
    background-color: #0f72e5;
		border-radius: 20px;
    color: #ffffff;
    text-decoration: none;
    padding: 8px 0;
}
    </style>
</head>
<body>
    <div class="popup">
        <button id="close">&times;</button>
         <div class="popup1">
        <h2>Privacy Policy</h2>
        <p>
            We collect and utilize the information that you provide to us voluntarily.
			We may use your information to contact you in the future with promotional offers.
			we will not rent or sell you information into third parties outside company Inc and its group companies(including any parent, subsidiaries and affiliates) without your consent.	
        </p>
		<p>Visitors are not allowed to speak negatively to each other,profanity is not allowed and visitors can't pitch their own products within the community</p>
        <div class="popup2">
        <a href="homeindex.php">Let's Go</a>
    </div>
</div>
</div>
    <!--Script-->
    <script type="text/javascript">
window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.display = "block";
        },
        2000 
    )
});


document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});
    </script>
</body>
</html>

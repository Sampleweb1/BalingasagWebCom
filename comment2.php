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
 if (isset($_POST['comments'])) {
$newsid = $_POST['newsid'];
$title = $_POST['title'];
$user = $_POST['user'];
$comment = $_POST['comment'];


$query = "INSERT INTO comments (nid, title, user, comment, date) VALUES ('$newsid', '$title', '$user', '$comment', NOW())";
$result = @mysqli_query($link,$query);

header("location: rdmore2.php?read=".$newsid);
}
 



	   ?>
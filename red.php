<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
$error4='';
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['u_id'])) {
$error = "Unique ID or username is invalid";
}
else
{
// Define $username and $password
$unique_id=$_POST['u_id'];
$username1=$_POST['username'];
$captcha= $_POST['captcha_code'];
require('connection.php');
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect($servername, $username,$password,$dbname);
// To protect mysql injection for Security purpose
$unique_id = stripslashes($unique_id);
$username1 = stripslashes($username1);
$unique_id = mysqli_real_escape_string($connection,$unique_id);
$username1 = mysqli_real_escape_string($connection,$username1);

// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"select * from login where password='$unique_id' AND username='$username1'");
$rows = mysqli_num_rows($query);
$ch=0;
require('securimage/securimage.php');
      $securimage = new Securimage();

      if ($securimage->check($captcha) == false) {
        $error4 = 'Incorrect security code entered';
	$ch=1;
      }
if ($rows == 1 && $ch==0) {
$_SESSION['login_user']=$username1; // Initializing Session
header("location: index.php"); // Redirecting To Other Page
} else {
if($ch==0){
$error = "Username or ID is invalid";
$error4="";
}
else{
$error4 = 'Incorrect security code entered';
}
}
mysqli_close($connection); // Closing Connection
}
}
?>

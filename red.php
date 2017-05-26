<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['u_id'])) {
$error = "Unique ID or username is invalid";
}
else
{
// Define $username and $password
$unique_id=$_POST['u_id'];
$username1=$_POST['username'];
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
if ($rows == 1) {
$_SESSION['login_user']=$username1; // Initializing Session
header("location: index.php"); // Redirecting To Other Page
} else {
$error = "Username or ID is invalid";
}
mysqli_close($connection); // Closing Connection
}
}
?>

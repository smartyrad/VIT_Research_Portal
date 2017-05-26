<?php
//include('session.php');
require('header12.php');

//include('session.php');
require('connection.php');
$error3 = !empty($_GET['error3'])?$_GET['error3']:"";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit'])) {

if($_POST["res2"]==$_POST["res3"]){
$username=$_POST["resname"];
$password=$_POST["res2"];
$name=$_POST["res1"];
$query="INSERT into login (username,password,Name) VALUES('$username','$password','$name'); ";
         mysqli_query($conn, $query);
echo "<script>Materialize.toast('Successful!', 8000) </script>";
header("location: index.php");
}
else{
$error3 = "Passwords do not match!";

header("location: signup.php?error=$error3"); // Redirecting To Other Page

}

}
mysqli_close($conn); // Closing Connection
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
    <style type="text/css">
        .capt{
            margin-left: 60px;opacity: 0.8;
        }
        .a{
        font-size: 40px;color: black;
    }

form {
  width: 480px;
  margin: 4em auto;
  padding: 3em 2em 2em 2em;
  background: #ffffff;
  border: 1px solid #ebebeb;
  box-shadow: rgba(0,0,0,0.14902) 0px 1px 1px 0px,rgba(0,0,0,0.09804) 0px 1px 2px 0px;
}



  /* label color */
   .input-field label {
     color: #3B1F2B;
   }
   /* label focus color */
   .input-field input[type=text]:focus + label {
     color: #3B1F2B;
   }
   /* label focus color */
   .input-field input[type=password]:focus + label {
     color: #3B1F2B;
   }
   /* label underline focus color */
   .input-field input[type=text]:focus {
     border-bottom: 1px solid #3B1F2B;
     box-shadow: 0 1px 0 0 #3B1F2B;
   }
   /* label underline focus color */
   .input-field input[type=password]:focus {
     border-bottom: 1px solid #3B1F2B;
     box-shadow: 0 1px 0 0 #3B1F2B;
   }
   
   /* invalid color */
   .input-field input[type=text].invalid {
     border-bottom: 1px solid #d50000 ;
     box-shadow: 0 1px 0 0 #d50000 ;
   }
    /* invalid color */
   .input-field input[type=password].invalid {
     border-bottom: 1px solid #d50000 ;
     box-shadow: 0 1px 0 0 #d50000 ;
   }
   /* icon prefix focus color */
   .input-field .prefix.active {
     color: #3B1F2B;
   }
   body{
    background-color: #ffffff;
   } 
  
   ul.dropdown-content.select-dropdown li span {
    color: #3B1F2B; /* no need for !important :) */
}


</style>

<script type="text/javascript">
     $('#des').val('New Text');
  $('#des').trigger('autoresize');
  $(document).ready(function() {
    $('select').material_select();
});
</script>
</head>
<body>
<h1 align="center">Sign Up</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
<div class="row">
 <div class="input-field col m12" >
          <i class="material-icons prefix">class</i>
          <input id="res1" name="res1" type="text" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="Enter your Name!">
          <label for="res1">Enter your name:</label>
 </div>
 </div>
 <div class="row">
 <div class="input-field col m12" >
          <i class="material-icons prefix">perm_identity</i>
          <input id="resname" name="resname" type="text" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="Choose Username:">
          <label for="resname">Choose Username:</label>
 </div>
 </div>
 <div class="row">
 <div class="input-field col m12" >
          <i class="material-icons prefix">perm_identity</i>
          <input id="res2" name="res2" type="password" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="Enter a password">
          <label for="res2">Choose password::</label>
 </div>
 </div>
  <div class="row">
 <div class="input-field col m12" >
          <i class="material-icons prefix">perm_identity</i>
          <input id="res3" name="res3" type="password" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="Re-type password!">
          <label for="res3">Confirm password:</label>
 </div>
 </div>
<button class="btn waves-effect waves-light tooltipped" data-position="left" data-delay="50" data-tooltip="Click to Submit!" type="submit" name="submit" style="background-color: #3B1F2B;">Sign Up!
    <i class="material-icons right">send</i>
  </button>
  <br>
  <br>
<span style="color:#d50000;"><?php $error3 = !empty($_GET['error'])?$_GET['error']:"";
echo $error3; ?></span>

</form>
<?php require('footee.php'); ?>
</body>
</html>

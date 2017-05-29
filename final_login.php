<?php
require('red.php'); // Includes Login Script
require('headerold1.php');
if(isset($_SESSION['login_user'])){
header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>

<title>Login Form</title>
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
   /* label underline focus color */
   .input-field input[type=text]:focus {
     border-bottom: 1px solid #3B1F2B;
     box-shadow: 0 1px 0 0 #3B1F2B;
   }
   
   /* invalid color */
   .input-field input[type=text].invalid {
     border-bottom: 1px solid #d50000 ;
     box-shadow: 0 1px 0 0 #d50000 ;
   }
   /* icon prefix focus color */
   .input-field .prefix.active {
     color: #3B1F2B;
   }

* {
    margin: 0;
}
html, body {
    height: 100%;
}
.wrapper {
    min-height: 100%;
    height: auto !important;
    height: 100%;
    margin: 0 auto -142px; /* the bottom margin is the negative value of the footer's height */
}
.footer, .push {
    height: 142px; /* .push must be the same height as .footer */
}
</style>

</head>
<body>
<div class='wrapper'>
<div id="main">
<div id="login">
<h1 align="center">Login Credentials</h1>
<form action="" class="container" method="post">
<div class="row">
 <div class="input-field col m12 s12 l12" >
 		  <i class="material-icons prefix">account_circle</i>
          <input id="name" name="username" type="text" class="validate tooltipped" length="9" data-position="right" data-delay="50" data-tooltip="Enter your Username!" required="">
          <label for="name">Username</label>
 </div>
 </div>
<div class="row">
 <div class="input-field col m12 s12 l12">
 		  <i class="material-icons prefix">info</i>
          <input id="u_id" name="u_id" type="password" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="Enter your Password!" required>
          <label for="u_id">Password</label>
  </div>
</div>
<img id="captcha" src="/portal/securimage/securimage_show.php" alt="CAPTCHA Image" class="capt" />
<div class="row">
<a href="#" onclick="document.getElementById('captcha').src = '/portal/securimage/securimage_show.php?' + Math.random(); return false" class="as"><i class="material-icons prefix a md-light">restore</i></a>
 <div class="input-field col m12 s12 l12">
 		  <input id="captcha_code" name="captcha_code" type="text" class="validate tooltipped" size="10" maxlength="6" length="6" data-position="right" data-delay="50" data-tooltip="Enter Captcha!" required>
          <label for="captcha_code">Enter the characters</label>
  </div>
</div>
<div class="">
 <button class="btn waves-effect waves-light btn-large tooltipped" data-position="left" data-delay="50" data-tooltip="Click to Submit!" type="submit" name="submit"  value="Login" style="background-color:#3B1F2B">Submit
    <i class="material-icons right">send</i>
  </button>
</div>
<span ><a href="forgotpassword.php"></a></span>
<div style="color:#d50000;">
<span><?php echo $error; ?></span>
<?php $error2 = !empty($_GET['error1'])?$_GET['error1']:"";?>
<?php $error3 = !empty($_GET['error3'])?$_GET['error3']:"";?>
<span><?php echo $error2; ?></span>
<span><?php echo $error3;?></span>
<span><?php echo $error4;?></span>
</div>
</form>
</div>
</div>

<script type="text/javascript">$(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
      </script>
 <div class='push'></div>
</div>
<div class='footer'><?php require 'footee.php';?></div>
</body>
</html>


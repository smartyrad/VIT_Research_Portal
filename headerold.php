<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html>
<head>
 <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>$( document ).ready(function(){
    $(".button-collapse").sideNav();
});</script>
<style>


#a{
  height: 2.1em;
  width: 2.1em;
}
#dropdown1{
overflow-wrap: break-word;}
body{
  background-color: #ffffff   ;
}
.hello{
  background-color: #3B1F2B;
}
.color1{
  color: black;
}
.color2{
  color: #3C1642;
}
i.iconcolor{
color: #ffffff;
}
</style>
</head>

<body>
<div class="darken-4 hello">
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">

  <li><a href="department.php?dep=CSE"><span class="color1">Computer Science</span></a></li>
  <li class="divider"></li>
  <li><a href="department.php?dep=EEE"><span class="color2">Electrical and Electronics</span></a></li>
  <li class="divider"></li>
  <li><a href="department.php?dep=ECE"><span class="color1">Electronics and Communication</span></a></li>
  <li class="divider"></li>
  <li><a href="department.php?dep=MECH"><span class="color2">Mechanical Engineering</span></a></li>
  <li class="divider"></li>
  <li><a href="department.php?dep=CIVIL"><span class="color1">Civil Engineering</span></a></li>

</ul>
<ul id="dropdown2" class="dropdown-content">

  <li><a href="department.php?dep=CSE"><span class="color1">Computer Science</span></a></li>
  <li class="divider"></li>
  <li><a href="department.php?dep=EEE"><span class="color2">Electrical and Electronics</span></a></li>
  <li class="divider"></li>
  <li><a href="department.php?dep=ECE"><span class="color1">Electronics and Communication</span></a></li>
  <li class="divider"></li>
  <li><a href="department.php?dep=MECH"><span class="color2">Mechanical Engineering</span></a></li>
  <li class="divider"></li>
  <li><a href="department.php?dep=CIVIL"><span class="color1">Civil Engineering</span></a></li>

</ul>
<div class="navbar-fixed">
<nav>
  <div class="nav-wrapper hello">
    <a href="index.php" class="brand-logo"><i></i>VIT RESEARCH</a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons iconcolor">menu</i></a>    
    <ul class="right hide-on-med-and-down">
   
      <li><a href="index.php">Home</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Branch<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="upload_final.php">Upload</a></li>
      <li><?php if(isset($_SESSION['login_user'])){ ?>
  <a class="link" href="logout.php" style="text-decoration:none">Logout</a>
<?php }else{ ?>
  <a class="link" href="final_login.php" style="text-decoration:none">Login</a>
<?php } ?></li>
   </ul>
<ul class="side-nav" id="mobile-demo">
   
      <li><a href="index.php">Home</a></li>
      <!-- Dropdown Trigger -->

      <li><a class="dropdown-button1" href="#!" data-activates="dropdown2">Branch<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="upload_final.php">Upload</a></li>
      <li><?php if(isset($_SESSION['login_user'])){ ?>
  <a class="link" href="logout.php" style="text-decoration:none">Logout</a>
<?php }else{ ?>
  <a class="link" href="final_login.php" style="text-decoration:none">Login</a>
<?php } ?></li>
   </ul>
</div>
</nav>
</div>
 
</div>
  <!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript">$(".dropdown-button").dropdown();</script>
<script type="text/javascript">$(".dropdown-button1").dropdown();</script>
      

</body>

</html>

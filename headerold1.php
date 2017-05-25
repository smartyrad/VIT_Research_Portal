
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/png">
 <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<style>

/*
ul {
    list-style-type: none;
    margin: -8px;
    padding: 0;
    overflow: hidden;
    background-color: #0B132B;
    top: 0;left: 0;
 
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 18px 24px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #DAE2DF;color: black;
}
li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #DAE2DF;
    min-width: 160px;
    
}

.dropdown-content a {
    color: black;
    padding: 14px 10px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #6D696A;}

.dropdown:hover .dropdown-content {
    display: block;
}

#searchimage{
  width:30px;height: 30px;border-radius: 5px;position: relative;top:0.8em;
}
.searchtext{
  width: 35em;height: 2.5em;border-radius: 5px;background-color: rgb(255,255,255);border-style: none;padding-left: 1.4em;border-width: 0;margin-top: -6px;margin-left: 20px;

}
form{
  margin: 0;padding:0;
}
.hea{
  color: white;padding-left: 16em;padding-top:0;position: fixed;top: -14px;right: 0;
}
#a{
display: inline-block;
    color: white;
    text-align: center;
    padding: 18px 24px;
    text-decoration: none;
    font-size-adjust: 2px;
}*/

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
</style>
</head>

<body>
<div class="darken-4 hello">
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">

  <li><a href="a1try.php?dep=CSE"><span class="color1">Computer Science</span></a></li>
  <li class="divider"></li>
  <li><a href="a1try.php?dep=EEE"><span class="color2">Electrical and Electronics</span></a></li>
  <li class="divider"></li>
  <li><a href="a1try.php?dep=ECE"><span class="color1">Electronics and Communication</span></a></li>
  <li class="divider"></li>
  <li><a href="a1try.php?dep=MECH"><span class="color2">Mechanical Engineering</span></a></li>
  <li class="divider"></li>
  <li><a href="a1try.php?dep=CIVIL"><span class="color1">Civil Engineering</span></a></li>

</ul>

<div class="navbar-fixed">
<nav>
  <div class="nav-wrapper hello">
    <a href="index.php" class="left brand-logo"><i></i>VIT RESEARCH</a>
        
    <ul class="right">
   
      <li><a href="index.php">Home</a></li>
      <!-- Dropdown Trigger -->

      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Branch<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="upload_final.php">Upload</a></li>
      <li><a href="signup.php">Sign Up</a></li>
   </ul>
</div>
</nav>
</div>
 
</div>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript">$(".dropdown-button").dropdown();</script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>
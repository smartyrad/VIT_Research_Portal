<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="shortcut icon" href="img/favicon.ico" type="image/png">
 <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
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
  background-color: #ffffff ;
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
#as{
  display: none;
}
i.iconcolor{
color: #ffffff;
}
</style>
<script>$( document ).ready(function(){
    $(".button-collapse").sideNav();
});
</script>
<script type="text/javascript">
var a=0; 
  function viewa(){
  var m=document.getElementById('as');
   // hide the lorem ipsum text
   a=a+1;
   if(a%2!=0){
   m.style.display="block";}
   else{
  m.style.display="none";
}

}
</script>
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
<li><a onclick="viewa()" id="k"><i class="material-icons">search</i></a></li>
    </ul>
<ul  class="side-nav" id="mobile-demo">
      
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


  <!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript">$(".dropdown-button").dropdown();</script>
  <script type="text/javascript">$(".dropdown-button1").dropdown();</script>
      

</body>

</html>
<?php

$content ='


<script>
var $.1.8.0 = $.noConflict(true);
</script>
<script type="text/javascript">

$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = \'search=\'+ searchid;
if(searchid!=\'\')
{
    $.ajax({
    type: "POST",
    url: "search.php",
    data: dataString,
    cache: false,
    success: function(html)
    {
    $("#result").html(html).show();
    }
    });
}return false;    
});

jQuery("#result").live("click",function(e){ 
    var $clicked = $(e.target);
    var $name = $clicked.find(\'.name\').html();
    var decoded = $("<div/>").html($name).text();
    $(\'#searchid\').val(decoded);
});
jQuery(document).live("click", function(e) { 
    var $clicked = $(e.target);
    if (! $clicked.hasClass("search")){
    jQuery("#result").fadeOut(); 
    }
});
$(\'#searchid\').click(function(){
    jQuery("#result").fadeIn();
});
});
</script>

<style type="text/css">
    
   
    #result
    {
        position:absolute;
        width:100%;
        padding:10px;
        display:none;
        margin-top:-1px;
        border-top:0px;
        overflow:hidden;
        border:1px #CCC solid;
        background-color: white;z-index: 5;
    }
    .show
    {
        padding:10px; 
        border-bottom:1px #999 solid;
        font-size:15px; 
        height:50px;
    }
    .show:hover
    {
        background:#4c66a4;
        color:#FFF;
        cursor:pointer;
    }
</style>

 <nav  class="hello" id="as">
    <div class="nav-wrapper">
      <form >
        <div class="input-field" >
          <input class="search" id="searchid" type="search" required>
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
</div>

<div id="result"></div>
';
$pre = 1;

include("config/html.inc");
?>

<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="img/favicon.ico" type="image/png">
<style type="text/css">
    #b{
      color: #FFFFFF  ;
    }
    #w{
      color: #311b92   ;
    }
   .a {
    background-color: #ee6e73;color: #ee6e73;
}
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Home</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
</head>
<body>
 <?php require('headerold.php');?>
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center " id="b">VIT Research Portal</h1>
        <div class="row center">
          <h5 class="header col s12 ">A place where you get credited for your hardwork!</h5>
        </div>
        <div class="row center">
          <a href="upload_final.php" class="btn-large waves-effect waves-light grey">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="img/a.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">language</i></h2>
            <h5 class="center">Global Exposure</h5>

            <p class="light">We have made the website in such a fashion that your research gets its own share of the spotlight.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Simple and easy to use</h5>

            <p class="light">We believe in a minimalistic approach and hence tried to make the website as easy to use as possible while at the same time maintaining its appeal.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">Uploading your research is as simple as clicking a button.No need to verify your identity.Don't worry we do the verify accounts but without troubling you.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern yet simple to use portal for all your research papers.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/a2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row ">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <h5 class=" light">Feel free to contact us using any of the methods given below!</h5>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern yet simple to use portal for all your research papers.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/a4.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <?php require 'footee.php';?>

  <!--  Scripts-->
 
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>

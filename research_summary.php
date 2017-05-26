<!DOCTYPE html>
<html>
<head>
  <title>Research info</title>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/png">
  <style type="text/css">
    .ap{
        background-image: url('');
        background-size:100% 140%;margin:0;overflow:visible;

    }
    .author{
      float: left;
    }
    .dateaut{
      float: right;
    }
    .marginneg{
      margin-top: 0;
    }
    .margindown{margin-top: 0;
      margin-bottom: 0;
    }
    #overfix{
      overflow-wrap: break-word;text-align: left;
    }
    .m{
      margin-top: 0;

    }
    .a{
      padding-top: 0;
    }
    .card
{
    margin-bottom: -35px !important;
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
<?php
require 'header.php';

//Connecting to the sql server
require('connection.php');
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$rname=$_GET['rname'];

$query="SELECT researchtopic,user_code,file_name,description,username,dept,date1 FROM upload_data WHERE researchtopic='".$rname."';";
$s=array();
$p=mysqli_query($conn, $query);
//echo mysqli_num_rows($p);
if (mysqli_num_rows($p) ==1) {

    // output data of each row
       $rows = mysqli_fetch_assoc($p);
       $ab=$rows["researchtopic"];}
mysqli_close($conn); // Closing Connection
?>

<div class="ap" >
<div class="row center" style="margin-bottom:0;">
  <div class="col s12 m10 offset-m1 ">


    <div class="card z-depth-3" style="margin-bottom:0;background-color:#3B1F2B">
    <div>
      <div class="card-title white-text text-darken-4" style="margin-bottom:0;background-color:#3B1F2B;"><h1 class="m" id="s"><?php echo $rows["researchtopic"];?></h1><p><span style="padding-bottom:100px;padding-left:30px;float:left;" >On :<?php echo '  '.$rows["date1"]?></span><span style="align:right;padding-left:750px;">By-<?php echo $rows["username"]?></span></p></div>
      </div>
    </div>
  </div>
</div>

</div>
<div class="row center" >
  <div class="col s12 m10 offset-m1 a">
    <div class="card z-depth-4 white" style="margin-top:-130px;">
           <div class="container">
    <div class="flow-text">  <p class="black-text" id="overfix" align="center"><?php echo $rows["description"]?><pre>

    </pre></p></div></div>
    </div>
  </div>
</div>
  <div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large " style="background-color:#3B1F2B;">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a class="btn-floating grey darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating grey darken-1" href="#s"><i class="material-icons">navigation</i></a></li>
      <li><a class="btn-floating grey darken-1" <?php echo'href="download.php?rname='.$ab.'"'?> >  <i class="material-icons">system_update_alt</i></a></li>
    </ul>
  </div>
  <div class='push'></div>
</div>
<div class='footer'><?php require 'footee.php';?></div>

</body>
<script type="text/javascript"> $('.fixed-action-btn').openFAB();
  $('.fixed-action-btn').closeFAB();
  $('.fixed-action-btn.toolbar').openToolbar();
  $('.fixed-action-btn.toolbar').closeToolbar();</script>
</html>





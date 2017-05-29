<?php $dep=$_GET['dep'];  ?>
<!DOCTYPE html>
<html>
<head>
<title>Department | <?php echo $dep; ?></title>
<link rel="shortcut icon" href="img/favicon.ico" type="image/png">
 <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style type="text/css">
  .a{
 width:80%;margin-left: 85px;height: 4%;
}

.m{
  font-size: 12px;float: right;
}
.p{
  background-color: #5E4751;
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
<link href="https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css" rel="stylsheet">
<link href="animate.css" rel="stylsheet">
<script src="https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js"></script>
</head>

<body>
<div class='wrapper'>
<?php
require 'header.php';
//Connecting to the sql server
require('connection.php');
/*//research id
$user_id=$_GET['rid'];
echo $user_id;*/
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query="SELECT researchtopic,file_name,dept,username,description,date1 FROM upload_data WHERE dept='".$dep."';";
$s=array();
$p=mysqli_query($conn, $query);
if (mysqli_num_rows($p) > 0) {
  echo '<div id="amp">';
    while($rows = mysqli_fetch_assoc($p)) {
    $a=$rows["researchtopic"];
 echo '<div class="center">
 <div class="amod">
    <div class="p">
    <div class="card horizontal col m4 ">
      <div class="card-stacked">
        <div class="card-content">
            <div class="animated bounce">

        <div class="card-title black-text text-darken-4" ><h4 style="text-align:left;">'.
        $rows["researchtopic"].'</h4><h5 style="text-align:left;">By: '.$rows['username'].'</h5><p style="text-align:left;"  >'.substr($rows["description"],0,70).'......</p><a class="waves-effect waves-light btn m"  href="dedicatedpage.php?rname='.$a.'" style="align:right;"><i class="large material-icons right">play_arrow
</i>View</a>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  </div>  ';
    }
echo '</div>';
} else {
  //  printf("<div style="display:none">");
echo ' <div class="a">
    <div class="p">
<div class="row">
      <div class="col s12 m12">
        <div class="card-panel">
          <span class="black-text" style="width:100%;">NO DATA FOUND!!
          </span>
        </div>
      </div>
    </div>
</div>
    </div>
    ';    
}
mysqli_close($conn); // Closing Connection
?>
 <div class='push'></div>
</div>
<div class='footer'><?php require 'footee.php';?></div>


</body>

</html>

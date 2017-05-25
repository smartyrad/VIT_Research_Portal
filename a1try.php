  <!DOCTYPE html>
<html>
<head>
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





</style>
<link href="https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css" rel="stylsheet">
<link href="animate.css" rel="stylsheet">
<script src="https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js"></script>
</head>

<body>
<?php
require 'header.php';
//Connecting to the sql server
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "research_portal";
/*//research id
$user_id=$_GET['rid'];
echo $user_id;*/
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$dep=$_GET['dep'];
$query="SELECT researchtopic,file_name,dept,username,description,date1 FROM upload_data WHERE dept='".$dep."';";
$s=array();
$p=mysqli_query($conn, $query);
if (mysqli_num_rows($p) > 0) {
  //$l=<td><a href="http://yourlink">delete</a></td>;
    // output data of each row
 //   echo "<table><tr><th>Research Topic</th><th>Department</th><th>Name</th></tr>";
  echo '<div id="amp">';
    while($rows = mysqli_fetch_assoc($p)) {/*echo "<tr>";
         echo "<td><a href=\"downtry.php?rname=" . . "\">".$rows["researchtopic"]."</a></td>";
    echo "<td>". $rows["dept"] ."</td>";
    echo "<td>". $rows["date1"] ."</td>";
   // echo "<td>". $rows["id"] ."</td>";
     //<?echo  $rows["researchtopic"];
    echo "</tr>";*/
    $a=$rows["researchtopic"];
 echo '<div class="center">
 <div class="a">
    <div class="p">
    <div class="card horizontal col m4 ">
      <div class="card-stacked">
        <div class="card-content">
            <div class="animated bounce">

        <div class="card-title black-text text-darken-4" ><h4 style="text-align:left;">'.
        $rows["researchtopic"].'</h4><h5 style="text-align:left;">By: '.$rows['username'].'</h5><p style="text-align:left;"  >'.substr($rows["description"],0,70).'......</p><a class="waves-effect waves-light btn m"  href="tryingnewwithcard.php?rname='.$a.'" style="align:right;"><i class="large material-icons right">play_arrow
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
      <div class="col s12 m5">
        <div class="card-panel">
          <span class="black-text" style="width:100%;">NO DATA FOUND!!
          </span>
        </div>
      </div>
    </div>
</div>
    </div>
    ';
//printf("</div>");
    
}
// Prints $r as array 
//print_r ($r);

?>
<?php require 'footee.php';?>

</body>

</html>
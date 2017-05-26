<?php
require('connection.php');
$connection = mysqli_connect($servername,$username,$password,$dbname);
if (mysqli_connect_errno())
{
    echo "Failed to connect to mysql: " . mysqli_connect_error();
}


if($_POST)
{
    $q = mysqli_real_escape_string($connection,$_POST['search']);
    $strSQL_Result = mysqli_query($connection,"select researchtopic from upload_data where researchtopic like '%$q%'  LIMIT 5");
    while($row=mysqli_fetch_array($strSQL_Result))
    {
        $username   = $row['researchtopic'];
        
        $b_username = $q;
       
        $final_username = str_ireplace($q, $b_username, $username);
      
        ?>
            <div class="show" align="left">
                <span class="name"><?php echo '<a href="research_summary.php?rname='.$final_username.'">'.$final_username.'</a>' ?></span>&nbsp;<br/><br/>
            </div>	
        <?php
    }
}

 ?>

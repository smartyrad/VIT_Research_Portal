<?php
require('connection.php');
include('session.php');
require('headerold.php');


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$login_session=1;
if(isset($_FILES['files'])){
    $description=$_POST['des'];
    $res_topic=$_POST['res'];
    $dept=$_POST['dept'];
    $hello=$_POST['resname'];
   // echo $b;
    $errors;
    foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
        $file_name1= $_FILES['files']['name'][$key];
        $ext = pathinfo($file_name1, PATHINFO_EXTENSION);
        $file_name=$res_topic.".".$ext;
        $file_size =$_FILES['files']['size'][$key];
        $file_tmp =$_FILES['files']['tmp_name'][$key];
        $file_type=$_FILES['files']['type'][$key];  
        $date12 = date('Y-m-d');
        $extensions = array("docx","doc","odt","pdf","zip","rar");      
        if(in_array($ext,$extensions ) === false){
  $errors="Extension not allowed!";
  echo "<script>Materialize.toast('$errors', 8000) </script>";
}  
else{
         if($file_size > 2097152){
            $errors='File size must be less than 2 MB';
        }  
         if(empty($errors)==true){    
        $query="INSERT into upload_data (USER_CODE,USERNAME,FILE_NAME,FILE_SIZE,FILE_TYPE,description,dept,date1,file_ext,researchtopic) VALUES('$login_session','$hello','$file_name','$file_size','$file_type','$description','$dept','$date12','$ext','$res_topic'); ";
         mysqli_query($conn, $query);
        $desired_dir="user_data";
        
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);        // Create directory if it does not exist
            }
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"user_data/".$file_name);
            }else{                                  //rename the file if another one exist
                $new_dir="user_data/".$file_name.time();
                 rename($file_tmp,$new_dir) ;               
            }
            echo "<script>Materialize.toast('Succesfully Uploaded!', 8000) </script>";
          }   
        else{
                echo "<script>Materialize.toast($errors, 8000) </script>";
        }
    }
    
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
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
<h1 align="center">Upload Your Research here!</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
<div class="row">
 <div class="input-field col m12" >
          <i class="material-icons prefix">class</i>
          <input id="res" name="res" type="text" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="Enter your Research Title!">
          <label for="res">Research Title:</label>
 </div>
 </div>
 <div class="row">
 <div class="input-field col m12" >
          <i class="material-icons prefix">perm_identity</i>
          <input id="resname" name="resname" type="text" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="Enter name of the Researcher!">
          <label for="res">Name of Researcher:</label>
 </div>
 </div>
 <div class="row">
        <div class="input-field col m12">
        <i class="material-icons prefix">description</i>
          <textarea id="des" class="materialize-textarea tooltipped s" name="des" data-position="right" data-delay="50" data-tooltip="Describe your Research!"></textarea>
          <label for="des">About the Research:</label>
        </div>
      </div>
  <div class="row">
 <div class="input-field col m12">
 <i class="material-icons prefix">list</i>
    <select name="dept" id="dept" class="tooltipped" data-position="left" data-delay="50" data-tooltip="Choose your department!!" >
      <option value="CSE">CSE</option>
      <option value="EEE">EEE</option>
      <option value="ECE">ECE</option>
      <option value="MECH">MECH</option>
        <option value="CIVIL">CIVIL</option>
    </select>
    <label for="dept"><h6>Select Department:</h6></label>
  </div>
</div>
<div class="file-field input-field" >    
  <div class="btn" style="background-color: #3B1F2B;">
        <span>File</span>
        <input type="file" name="files[]" multiple="" class="tooltipped" data-position="left" data-delay="50" data-tooltip="Upload your files!">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one or more files">
      </div>
    </div>
<button class="btn waves-effect waves-light tooltipped" data-position="left" data-delay="50" data-tooltip="Click to Submit!" type="submit" name="submit" style="background-color: #3B1F2B;">Submit
    <i class="material-icons right">send</i>
  </button>
    

</form>
<?php require('footee.php'); ?>
</body>
</html>

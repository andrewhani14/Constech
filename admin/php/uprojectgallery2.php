<?php
include('../../include/db.php');
include('checkupload.php');

$output = '';  
if(is_array($_FILES))   
{  
     foreach ($_FILES['files']['name'] as $name => $value)  
     {  
          $file_name = explode(".", $_FILES['files']['name'][$name]);  
          $allowed_ext = array("jpg", "jpeg", "png", "gif");  
          if(in_array($file_name[1], $allowed_ext))  
          {  
               $new_name = md5(rand()) . '.' . $file_name[1];  
               $sourcePath = $_FILES['files']['tmp_name'][$name];  
               $targetPath = "../../img/projects/".$new_name;  
               $sql = "INSERT INTO project_images (picture_path) VALUES ('{$targetPath}')";
               $image = mysqli_query($db,$sql);
               if(move_uploaded_file($sourcePath, $targetPath))  
               {  
               }                 
          }            
     }  

}  

if(isset($_GET['delg'])){
    $id=$_GET['delg'];
    $query="DELETE FROM project_images WHERE ID ='$id'";
    $run=mysqli_query($db,$query);
    if($run){
        header("location:../?editportfolio=true#done");
    }
}

?>
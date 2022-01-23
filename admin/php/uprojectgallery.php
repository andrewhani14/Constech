<?php
include('../../include/db.php');
include('checkupload.php');

$target_dir = "../../img/projects/";

if(isset($_POST['galleryAdd'])){
    $upload_folder = "../../img/projects/";
    $file_location = $upload_folder . basename($_FILES["picture_path"]["name"]);
    $projectgPhoto=$_FILES['picture_path']['name'];
    
    if(move_uploaded_file($_FILES['picture_path']['tmp_name'], $file_location)){
        if($projectgPhoto==""){
            $projectgPhoto=$data['picture_path'];
        }
    }else{
        $pdone = Upload('picture_path',$upload_folder);
    }

$project_ID=mysqli_real_escape_string($db,$_POST['project_ID']);   

$query="INSERT INTO project_images (project_ID,picture_path) ";
$query.="VALUES ('$project_ID','$projectgPhoto')";
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editportfolio=true&msg=updated");
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
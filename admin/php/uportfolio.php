<?php
include('../../include/db.php');
include('compress.php');
$id=$_POST['id'];
$query="SELECT * FROM portfolio WHERE id='$id'";

$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);

if(isset($_POST['pupdate'])){

$upload_folder = "../../img/projects/";
$file_location = $upload_folder . basename($_FILES["projectpic"]["name"]);
$projectpic=$_FILES['projectpic']['name'];
$d = compressedImage($_FILES['projectpic']['tmp_name'],$file_location,75);

if(move_uploaded_file($d, $file_location)){
    if($projectpic==""){
        $projectpic=$data['projectpic'];
    }
}else{
    echo 'Error uploading image, Please try again.';
}

$projectname=mysqli_real_escape_string($db,$_POST['projectname']);
$plocation=mysqli_real_escape_string($db,$_POST['plocation']);
$project_category=mysqli_real_escape_string($db,$_POST['project_category']);  
$pyear=mysqli_real_escape_string($db,$_POST['pyear']);  
$project_desc=mysqli_real_escape_string($db,$_POST['project_desc']);   

if($pdone=="error"){
    header("location:../?edithome=true&msg=error");
}else{
$query="UPDATE portfolio SET ";
$query.="projectpic='$projectpic',";
$query.="projectname='$projectname',";
$query.="plocation='$plocation',";
$query.="pyear='$pyear',";
$query.="project_desc='$project_desc',";
$query.="project_category='$project_category' WHERE id='$id'";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editportfolio=true&msg=updated");}    
}    
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM portfolio WHERE id='$id'";
    $query2="DELETE FROM project_images WHERE project_ID='$id'";
    $queryrun=mysqli_query($db,$query);
    $queryrun2=mysqli_query($db,$query2);
if($queryrun && $queryrun2){
    header("location:../?editportfolio=true&msg=updated");
}
}

if(isset($_POST['addtoportfolio'])){ 

$upload_folder = "../../img/projects/";
$file_location = $upload_folder . basename($_FILES["projectpic"]["name"]);
$projectpic=$_FILES['projectpic']['name']; 
$d = compressedImage($_FILES['projectpic']['tmp_name'],$file_location,75);

if(move_uploaded_file($d, $file_location)){
    if($projectpic==""){
        $projectpic=$data['projectpic'];
    }
}else{
    echo 'Error uploading image, Please try again.';
}

$projectname=mysqli_real_escape_string($db,$_POST['projectname']);
$plocation=mysqli_real_escape_string($db,$_POST['plocation']);
$project_category=mysqli_real_escape_string($db,$_POST['project_category']);  
$pyear=mysqli_real_escape_string($db,$_POST['pyear']);  
$project_desc=mysqli_real_escape_string($db,$_POST['project_desc']);  
 
if($pdone=="error"){
    header("location:../?editportfolio=true&msg=error");
}else{

$query="INSERT INTO portfolio (projectname,plocation,project_category,pyear,projectpic,project_desc) ";
$query.="VALUES ('$projectname','$plocation','$project_category','$pyear','$projectpic','$project_desc')";
$queryrun=mysqli_query($db,$query);

if($queryrun){
    header("location:../?editportfolio=true&msg=updated");
}    
}    
}
<?php
include('../../include/db.php');
include('checkupload.php');
$id=$_POST['id'];
$query="SELECT * FROM portfolio WHERE id='$id'";

$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);

$target_dir = "../img/projects/";

if(isset($_POST['pupdate'])){

$upload_folder = "../../img/projects/";
$file_location = $upload_folder . basename($_FILES["projectpic"]["name"]);
$projectpic=$_FILES['projectpic']['name']; 

if(move_uploaded_file($_FILES['projectpic']['tmp_name'], $file_location)){
    if($projectpic==""){
        $projectpic=$data['projectpic'];
    }
}else{
    $pdone = Upload('projectpic',$upload_folder);
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
    header("location:../?editportfolio=true#done");}    
}    
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM portfolio WHERE id='$id'";
    $queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editportfolio=true#done");
}
}

if(isset($_POST['addtoportfolio'])){ 

$upload_folder = "../../img/projects/";
$file_location = $upload_folder . basename($_FILES["projectpic"]["name"]);
$projectpic=$_FILES['projectpic']['name']; 

if(move_uploaded_file($_FILES['projectpic']['tmp_name'], $file_location)){
    if($projectpic==""){
        $projectpic=$data['projectpic'];
    }
}else{
    $pdone = Upload('projectpic',$upload_folder);
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
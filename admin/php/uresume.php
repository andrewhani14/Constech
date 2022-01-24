<?php
include('../../include/db.php');

if(isset($_POST['addtoresume'])){

$upload_folder = "../../img/services/";
$file_location = $upload_folder . basename($_FILES["icon"]["name"]);
$siteicon=$_FILES['icon']['name'];

if(move_uploaded_file($d, $file_location)){
    if($siteicon==""){
        $siteicon=$data['icon'];
    }
}else{
    echo 'Error uploading image, Please try again.';
}

$title=mysqli_real_escape_string($db,$_POST['title']);
$workdesc=mysqli_real_escape_string($db,$_POST['workdesc']);   
$query="INSERT INTO resume(title,workdesc,icon) ";
$query.="VALUES ('$title','$workdesc','$siteicon')";    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editresume=true&msg=updated");
}    
}    

if(isset($_POST['rupdate'])){

$upload_folder = "../../img/services/";
$file_location = $upload_folder . basename($_FILES["icon"]["name"]);
$siteicon=$_FILES['icon']['name'];

if(move_uploaded_file($_FILES['icon']['tmp_name'], $file_location)){
    if($siteicon==""){
        $siteicon=$data['icon'];
    }
}else{
    echo 'Error uploading image, Please try again.';
}

$id=$_POST['id'];
$title=mysqli_real_escape_string($db,$_POST['title']);
$workdesc=mysqli_real_escape_string($db,$_POST['workdesc']); 
$query="UPDATE resume SET title='$title',workdesc ='$workdesc',icon ='$siteicon' WHERE id='$id'";
    $run=mysqli_query($db,$query);
    if($run){
        header("location:../?editresume=true&msg=updated");
    }
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM resume WHERE id='$id'";
    $run=mysqli_query($db,$query);
    if($run){
        header("location:../?editresume=true&msg=updated");
    }
}
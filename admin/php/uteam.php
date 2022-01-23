<?php
include('../../include/db.php');
include('compress.php');

if(isset($_POST['addtoteam'])){

$upload_folder = "../../img/team/";
$file_location = $upload_folder . basename($_FILES["t_picture"]["name"]);
$tpicture=$_FILES['t_picture']['name']; 
$d = compressedImage($_FILES['t_picture']['tmp_name'],$file_location,60);

if(move_uploaded_file($d, $file_location)){
    if($tpicture==""){
        $tpicture=$data['t_picture'];
    }
}else{
    echo 'Error uploading image, Please try again.';
}

$t_name=mysqli_real_escape_string($db,$_POST['t_name']);
$t_position=mysqli_real_escape_string($db,$_POST['t_position']);   
$query="INSERT INTO team(t_name,t_position,t_picture) ";
$query.="VALUES ('$t_name','$t_position','$tpicture')";    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editteam=true&msg=updated");
}    

}    

if(isset($_POST['tupdate'])){

    $upload_folder = "../../img/team/";
    $file_location = $upload_folder . basename($_FILES["t_picture"]["name"]);
    $tpicture=$_FILES['t_picture']['name']; 
    $d = compressedImage($_FILES['t_picture']['tmp_name'],$file_location,60);

    if(move_uploaded_file($d, $file_location)){
        if($tpicture==""){
            $tpicture=$data['t_picture'];
        }
    }else{
        echo 'Error uploading image, Please try again.';
    }
    $ID=$_POST['ID'];
    $t_name=mysqli_real_escape_string($db,$_POST['t_name']);
    $t_position=mysqli_real_escape_string($db,$_POST['t_position']); 
    $query="UPDATE team SET t_name='$t_name',t_position ='$t_position',t_picture ='$tpicture' WHERE ID='$ID'";
        $run=mysqli_query($db,$query);
        if($run){
            header("location:../?editteam=true&msg=updated");
        }
}

if(isset($_GET['del'])){
    $ID=$_GET['del'];
    $query="DELETE FROM team WHERE ID='$ID'";
    $run=mysqli_query($db,$query);
    if($run){
        header("location:../?editteam=true#teamlist");
    }
}
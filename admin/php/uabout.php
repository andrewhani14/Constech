<?php
include('../../include/db.php');
include('compress.php');

if(isset($_POST['save'])){        

$upload_folder = "../../img/";
$file_location = $upload_folder . basename($_FILES["about_picture"]["name"]);
$about_picture=$_FILES['about_picture']['name'];
$d = compressedImage($_FILES['about_picture']['tmp_name'],$file_location,75);


if(move_uploaded_file($d, $file_location)){
    if($about_picture==""){
        $about_picture=$data['about_picture'];
    }
}else{
    echo 'Error uploading image, Please try again.';
}

$heading=mysqli_real_escape_string($db,$_POST['ptitle']);
$subheading=mysqli_real_escape_string($db,$_POST['psubtitle']);
$longdesc=mysqli_real_escape_string($db,$_POST['longdesc']);  

if($pdone=="error"){
    header("location:../?edithome=true&msg=error");
}else if($cdone=="error"){
    header("location:../?edithome=true&msg=error");
}else{
$query="UPDATE aboutus_setup SET ";
$query.="about_picture='$about_picture',";
$query.="heading='$heading',";
$query.="subheading='$subheading',";
$query.="longdesc='$longdesc' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editabout=true&msg=updated");
}    

}    
}
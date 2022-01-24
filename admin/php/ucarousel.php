<?php
include('../../include/db.php');
include('compress.php');

if(isset($_POST['addtocarousel'])){

$upload_folder = "../../img/slider/";
$file_location = $upload_folder . basename($_FILES["image_path"]["name"]);
$imagepath=$_FILES['image_path']['name']; 
$d = compressedImage($_FILES['image_path']['tmp_name'],$file_location,75);

if(move_uploaded_file($d, $file_location)){
    if($imagepath==""){
        $imagepath=$data['image_path'];
    }
}else{
    echo 'Error uploading image, Please try again.';
}

$image_title=mysqli_real_escape_string($db,$_POST['image_title']);
$image_caption=mysqli_real_escape_string($db,$_POST['image_caption']);   
$query="INSERT INTO image_carousel(image_title,image_caption,image_path) ";
$query.="VALUES ('$image_title','$image_caption','$imagepath')";    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editcarousel=true&msg=updated");
}    
}    

if(isset($_POST['cupdate'])){

    $upload_folder = "../../img/slider/";
    $file_location = $upload_folder . basename($_FILES["image_path"]["name"]);
    $imagepath=$_FILES['image_path']['name']; 
    $d = compressedImage($_FILES['image_path']['tmp_name'],$file_location,75);
    
    if(move_uploaded_file($d, $file_location)){
        if($imagepath==""){
            $imagepath=$data['image_path'];
        }
    }else{
        echo 'Error uploading image, Please try again.';
    }
    $ID=$_POST['ID'];
    $image_title=mysqli_real_escape_string($db,$_POST['image_title']);
    $image_caption=mysqli_real_escape_string($db,$_POST['image_caption']); 
    $query="UPDATE image_carousel SET image_title='$image_title',image_caption ='$image_caption',image_path ='$imagepath' WHERE ID='$ID'";
        $run=mysqli_query($db,$query);
        if($run){
            header("location:../?editcarousel=true&msg=updated");
        }
}

if(isset($_GET['del'])){
    $ID=$_GET['del'];
    $query="DELETE FROM image_carousel WHERE ID='$ID'";
    $run=mysqli_query($db,$query);
    if($run){
        header("location:../?editcarousel=true&msg=updated");
    }
}

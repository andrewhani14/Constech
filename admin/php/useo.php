<?php
include('../../include/db.php');
$query="SELECT * FROM basic_setup";

$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);


if(isset($_POST['seo'])){    

$upload_folder = "../../img/";
$file_location = $upload_folder . basename($_FILES["siteicon"]["name"]);
$siteicon=$_FILES['siteicon']['name']; 

if(move_uploaded_file($_FILES['siteicon']['tmp_name'], $file_location)){
    if($siteicon==""){
        $siteicon=$data['siteicon'];
    }
}else{
    echo 'Error uploading image, Please try again.';
}
    
$title=mysqli_real_escape_string($db,$_POST['title']);
$keyword=mysqli_real_escape_string($db,$_POST['keywords']);
$desc=mysqli_real_escape_string($db,$_POST['description']);

if($pdone=="error"){
    header("location:../?editseo=true&msg=error");
}else{
$query="UPDATE basic_setup SET ";
$query.="icon='$siteicon',";
$query.="title='$title',";
$query.="keyword='$keyword',";
$query.="description='$desc' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editseo=true&msg=updated");
}    

}    
    
}


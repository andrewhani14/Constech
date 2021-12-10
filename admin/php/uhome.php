<?php
include('../../include/db.php');
$query="SELECT * FROM personal_setup";

$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);

$email=mysqli_real_escape_string($db,$_POST['email']);
$address=mysqli_real_escape_string($db,$_POST['address']);
$mobile=mysqli_real_escape_string($db,$_POST['mobile']);
$contact_text=mysqli_real_escape_string($db,$_POST['contact_text']);
    

if($pdone=="error"){
    header("location:../?edithome=true&msg=error");
}else if($cdone=="error"){
    header("location:../?edithome=true&msg=error");
}else{
$query="UPDATE personal_setup SET ";
$query.="location='$address',";
$query.="mobile='$mobile',";
$query.="contact_text='$contact_text',";
$query.="emailid='$email' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?edithome=true&msg=updated");
}    

}    

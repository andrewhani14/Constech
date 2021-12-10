<?php 
session_start();
if(isset($_SESSION['username'])){
    header('location:../');
}
include("../../include/db.php");
$query="SELECT * FROM personal_setup,aboutus_setup,basic_setup,admin_users,team";
$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Constech - Login</title>
    <link href="../../img/<?=$data['icon']?>" rel="icon">
    <link href="../../img/<?=$data['icon']?>" rel="apple-touch-icon">
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="../php/check.php" method="post">
    <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='logout'){
      ?>
      <div class="alert alert-success text-center" role="alert">
  Logout Successfull !
</div>
      <?php
  }  
  if($_GET['msg']=='iuser'){
      ?>
      <div class="alert alert-danger text-center" role="alert">
  Incorrect Email or Password !
</div>
      <?php
  } } 
?> 
<!--  <img class="mb-4" src="../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">-->
  <h1 class="h3 mb-3 font-weight-normal">Please Sign in</h1>
  <label for="inputEmail" class="sr-only">Email Address</label>
  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" name="rm" value="remember-me"> Remember Me
    </label>
  </div>
  <input type="submit" name="login" class="btn btn-lg btn-primary btn-block" value="Login">
</form>
</body>
</html>

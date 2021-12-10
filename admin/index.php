<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login/');
}
include("../include/db.php");
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

    <link href="../img/<?=$data['icon']?>" rel="icon">
    <link href="../img/<?=$data['icon']?>" rel="apple-touch-icon">

    <title>Constech - Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/dist/css/bootstrap.css" rel="stylesheet">
    <style>
    .oo {
        height: 200px;
    }

    .ooo {
        height: 100px;
    }

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
    <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Welcome, <?=$_SESSION['username']?></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="php/logout.php">Logout</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <h6
                            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Edit Pages</span>

                        </h6>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin/">
                                <i style="font-size:100%" class="small material-icons">home</i>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?editseo=true">
                                <i style="font-size:100%" class="small material-icons">language</i>
                                Edit SEO
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?editcarousel=true">
                                <i style="font-size:100%" class="small material-icons">view_carousel</i>
                                Edit Landing Page
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?editabout=true">
                                <i style="font-size:100%" class="small material-icons">person</i>
                                Edit About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?editteam=true">
                                <i style="font-size:100%" class="small material-icons">people</i>
                                Edit Team
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?editportfolio=true">
                                <i style="font-size:100%" class="small material-icons">view_comfy</i>
                                Edit Projects
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?editresume=true">
                                <i style="font-size:100%" class="small material-icons">work</i>
                                Edit Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?edithome=true">
                                <i style="font-size:100%" class="small material-icons">contact_phone</i>
                                Edit Contact Us
                            </a>
                        </li>
                    </ul>

                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Account Settings</span>
                        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="?editprofile=true">
                                <i style="font-size:100%" class="small material-icons">verified_user</i>
                                Edit Profile
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <?php
     if(isset($_GET['edithome'])){ 
     include('php/home.php');
     }else if(isset($_GET['editabout'])){
         include('php/about.php');      
     }else if(isset($_GET['editteam'])){
      include('php/team.php');      
  }else if(isset($_GET['editcarousel'])){
      include('php/carousel.php');      
    }else if(isset($_GET['editresume'])){
       include('php/resume.php');
     }else if(isset($_GET['editportfolio'])){
      include('php/portfolio.php');
     }else if(isset($_GET['editseo'])){
         include('php/seo.php');
    
     }else if(isset($_GET['editprofile'])){ ?>
                <h2>Edit Profile</h2>
                <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
                <div class="alert alert-success text-center" role="alert">
                    Successfully Updated !
                </div>
                <?php
  }  
 } 
?>
                <form method="post" action="php/uprofile.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ptitle">Name</label>
                            <input type="text" name="username" value="<?=$data['username']?>" class="form-control"
                                id="ptitle" placeholder="Write your name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="psubtitle">Password</label>
                            <input type="text" name="userpass" value="<?=$data['user_pass']?>" class="form-control"
                                id="psubtitle" placeholder="*************" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="psubtitle">Email</label>
                            <input type="text" name="userid" value="<?=$data['user_id']?>" class="form-control"
                                id="psubtitle" placeholder="example@admin.com" required>
                        </div>
                    </div>
                    <input type="submit" name="uprofile" class="btn btn-primary" value="Save Changes">
                </form>
                <?php }else{
         include('php/welcome.php');
     } ?>

            </main>
        </div>
    </div>

    <script src="assets/dist/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="assets/dist/js/bootstrap.bundle.js"></script>
</body>

</html>
<?php include('db.php'); 
$query = "SELECT * FROM basic_setup,personal_setup,aboutus_setup,image_carousel,team,portfolio";
$runquery = mysqli_query($db,$query);
if(!$db){
    header("location:../not-found-404.php");
}
$data = mysqli_fetch_array($runquery);

$query2 = "SELECT * FROM image_carousel";
$runquery2 = mysqli_query($db,$query2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title><?=$data['title']?></title>
    <meta content="<?=$data['description']?>" name="description">
    <meta content="<?=$data['keyword']?>" name="keywords">

    <!-- Favicons -->
    <link href="img/<?=$data['icon']?>" rel="icon">
    <link href="img/<?=$data['icon']?>" rel="apple-touch-icon">

	<link rel="stylesheet" href="css/plugins.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>

<body>
	<!-- Preloader -->
	<div id="preloader"></div>
	<!-- Progress scroll totop -->
	<div class="progress-wrap cursor-pointer">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" /> </svg>
	</div>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo -->
			<a class="logo" href="index.php"><img src="img/constech-logo.png" alt="logo" height="30px"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
			<!-- Navbar links -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link nav-color <?php echo ($page == "home" ? "active" : "")?>" href="index.php">Home</a></li>
					<li class="nav-item"><a class="nav-link nav-color <?php echo ($page == "about" ? "active" : "")?>" href="about.php">About</a></li>
					<li class="nav-item"><a class="nav-link nav-color <?php echo ($page == "services" ? "active" : "")?>" href="index.php#services">Services</a></li>
					<li class="nav-item"><a class="nav-link nav-color <?php echo ($page == "projects" ? "active" : "")?>" href="projects.php">Projects</a></li>
					<li class="nav-item"><a class="nav-link nav-color <?php echo ($page == "contact" ? "active" : "")?>" href="contact.php">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
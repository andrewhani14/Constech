<!-- Header -->
<?php include('include/header.php'); ?>
<!-- Slider -->
<header class="header slider-fade">
    <div class="owl-carousel owl-theme">
        <?php
        $query2 = "SELECT * FROM image_carousel";
		$runquery2= mysqli_query($db,$query2);
		while($data2=mysqli_fetch_array($runquery2)){
    	?>
        <div class="text-left item bg-img" data-overlay-dark="3" data-background="img/slider/<?=$data2['image_path']?>">
            <div class="v-middle caption mt-30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="o-hidden">
                                <h1><?=$data2['image_title']?></h1>
                                <p><?=$data2['image_caption']?></p>
                                <div class="butn-light mt-30 mb-30"> <a href="projects.php"><span>Explore more</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</header>
<!-- Content -->
<div class="content-wrapper">
    <!-- Lines -->
    <section class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </section>
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <h2 class="section-title">About <span><?=$data['heading']?></span></h2>
                    <p><?=$data['longdesc']?></p>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="about-img">
                        <div class="img"> <img src="img/<?=$data['about_picture']?>" class="img-fluid" alt=""> </div>
                        <div class="about-img-2 about-buro"><?=$data['subheading']?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects -->
    <section class="projects section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">Our <span>Projects</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <?php
                    		$query5 = "SELECT * FROM portfolio";
							$runquery5= mysqli_query($db,$query5);
							while($data5=mysqli_fetch_array($runquery5)){
                                $projectID = $data5['id'];
    					?>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/projects/<?=$data5['projectpic']?>" alt="">
                            </div>
                            <div class="con">
                                <h6><a href="project-page.php?pid=<?php echo $projectID; ?>"><?=$data5['project_category']?></a></h6>
                                <h5><a href="project-page.php?pid=<?php echo $projectID; ?>"><?=$data5['projectname']?></a></h5>
                                <div class="line"></div> <a href="project-page.php?pid=<?php echo $projectID; ?>"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="services section-padding" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">Our <span>Services</span></h2>
                </div>
            </div>
            <div class="row">
                <?php
                        $query4 = "SELECT * FROM resume";
                        $runquery4= mysqli_query($db,$query4);
						$count=1;  
                        while($data4=mysqli_fetch_array($runquery4)){
                    ?>
                <div class="col-md-4">
                    <div class="item">
                        <a href="architecture.html"> <img src="img/services/<?=$data4['icon']?>" alt="">
                            <h5><?=$data4['title']?></h5>
                            <div class="line"></div>
                            <p><?=$data4['workdesc']?></p>
                            <div class="numb"><?=$count?></div>
                        </a>
                    </div>
                </div>
                <?php
					$count ++; }
                    ?>
            </div>
        </div>
</section>
<!-- Parallax -->
<section class="testimonials">
	<div class="background bg-img bg-fixed section-padding pb-0" data-background="img/slider/<?=$data['image_path']?>" data-overlay-dark="3" style="padding: 200px 0;">
	</div>
</section>
<!-- Projects Map -->
<section class="section-padding">
<iframe src="map.php" title="project_locations" width="100%" height="730px" style="border:none;padding:0px 40px 0px 40px;position:relative;">
</iframe>
</section>
</div>
<!-- Footer -->
<footer class="main-footer dark" style="text-align: -webkit-center;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 mb-30">
						<div class="item fotcont">
							<div class="fothead">
								<h6>Phone</h6> </div>
                                <p><a href="tel:<?=$data['mobile']?>"><?=$data['mobile']?></a></p>
						</div>
					</div>
					<div class="col-md-4 mb-30">
						<div class="item fotcont">
							<div class="fothead">
								<h6>Email</h6> </div>
							<p><a href="mailto:<?=$data['emailid']?>"><?=$data['emailid']?></a></p>
						</div>
					</div>
					<div class="col-md-4 mb-30">
						<div class="item fotcont">
							<div class="fothead">
								<h6>Our Address</h6> </div>
							<p><?=$data['location']?></p>
						</div>
					</div>
				</div>
			</div>
<?php include('include/footer.php'); ?>
</div>
<!-- jQuery -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/pace.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scrollIt.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
<!-- Header -->
<?php include('include/header.php'); ?>
	<!-- Content -->
	<div class="content-wrapper">
		<!-- Lines -->
		<section class="content-lines-wrapper">
			<div class="content-lines-inner">
				<div class="content-lines"></div>
			</div>
		</section>
		<!-- Header Banner -->
		<section class="banner-header banner-img bg-img bg-fixed pb-0" data-background="img/banner.jpg" data-overlay-light="3"></section>
		<!-- Projects -->
		<section class="projects section-padding2">
			<div class="container">
				<div class="row">
					<div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
						<h2 class="section-title">Our <span>Projects</span></h2> </div>
				</div>
				<div class="row">
					<?php
                    		$query5 = "SELECT * FROM portfolio";
							$runquery5= mysqli_query($db,$query5);
							while($data5=mysqli_fetch_array($runquery5)){
								$projectID = $data5['id'];
    						?>
					<div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
						<div class="item">
							<div class="position-re o-hidden"> <img src="img/projects/<?=$data5['projectpic']?>" alt=""> </div>
							<div class="con">
								<h6><a href="project-page.php?pid=<?php echo $projectID; ?>"><?=$data5['project_category']?></a></h6>
								<h5><a href="project-page.php?pid=<?php echo $projectID; ?>"><?=$data5['projectname']?></a></h5>
								<div class="line"></div> <a href="project-page.php?pid=<?php echo $projectID; ?>"><i class="ti-arrow-right"></i></a> </div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</section>
		<!-- Parallax -->
		<section class="testimonials">
			<div class="background bg-img bg-fixed section-padding pb-0" data-background="img/banner2.jpg" data-overlay-dark="3" style="padding: 200px 0;">
			</div>
		</section>
		<!-- Footer -->
		<footer class="main-footer dark">
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
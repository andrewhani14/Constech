<!-- Header -->
<?php include('include/header.php'); ?>
<?php 
$id = $_GET["pid"];
$query5 = "SELECT * FROM portfolio WHERE $id = id ";
$runquery5= mysqli_query($db,$query5);
$data5 = mysqli_fetch_array($runquery5);

$query9 = "SELECT * FROM project_images where $id = project_ID";
$runquery9= mysqli_query($db,$query9);
$data9 = mysqli_fetch_array($runquery9);


?>
	<!-- Content -->
	<div class="content-wrapper">
		<!-- Lines -->
		<section class="content-lines-wrapper">
			<div class="content-lines-inner">
				<div class="content-lines"></div>
			</div>
		</section>
		<!-- Header Banner -->
		<section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-light="3" data-background="img/projects/<?=$data9['picture_path']?>"> </section>
		<!-- Project Page  -->
		<section class="section-padding2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="section-title2"><?=$data5['projectname']?></h2></div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<p><?=$data5['project_desc']?></p>
					</div>
					<div class="col-md-4">
						<p><b>Project Name : </b> <?=$data5['projectname']?></p>
						<p><b>Project Category : </b> <?=$data5['project_category']?></p>
						<p><b>Year : </b> <?=$data5['pyear']?></p>
						<p><b>Location : </b> <?=$data5['plocation']?></p>
					</div>
				</div>
				<div class="row mt-30">
				<?php 
						$query6 = "SELECT * FROM project_images where $id = project_ID";
						$runquery6= mysqli_query($db,$query6);
						while($data6=mysqli_fetch_array($runquery6)){
				?>
					<div class="col-md-6 gallery-item">
						<a href="img/projects/<?=$data6['picture_path']?>" title="<?=$data5['projectname']?>" class="img-zoom">
							<div class="gallery-box">
								<div class="gallery-img"> <img src="img/projects/<?=$data6['picture_path']?>" class="img-fluid mx-auto d-block" alt="work-img"></div>
							</div>
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
		</section>
		<!-- Prev-Next Projects -->
		<section class="projects-prev-next">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="d-sm-flex align-items-center justify-content-between">
							<div class="projects-prev-next-left">
								<a href="project-page.php?pid=<?php echo $id - 1; ?>"> <i class="ti-arrow-left"></i> Previous Project</a>
							</div> <a href="projects.php"><i class="ti-layout-grid3-alt"></i></a>
							<div class="projects-prev-next-right"> <a href="project-page.php?pid=<?php echo $id + 1; ?>">Next Project <i class="ti-arrow-right"></i></a> </div>
						</div>
					</div>
				</div>
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
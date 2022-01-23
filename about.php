<!-- Header -->
<?php include('include/header.php'); 
$page = "about";
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
		<section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-light="3" data-background="img/banner.jpg"></section>
		<!-- About -->
		<section class="about section-padding2">
			<div class="container">
				<div class="row">
					<div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
						<h2 class="section-title">About <span><?=$data['heading']?></span></h2>
						<p><?=$data['longdesc']?></p>
					</div>
					<div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
						<div class="about-img">
						<div class="img"> <img src="img/<?=$data['about_picture']?>" class="img-fluid"> </div>
							<div class="about-img-2 about-buro"><?=$data['subheading']?></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Team -->
		<section class="team section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="section-title">Our <span>Team</span></h2> </div>
				</div>
				<div class="row">
					<?php
                        $query4 = "SELECT * FROM team";
                        $runquery4= mysqli_query($db,$query4);
                        while($data4=mysqli_fetch_array($runquery4)){
                    ?>
					<div class="col-md-4">
						<div class="item">
							<div class="img"> <img src="img/team/<?=$data4['t_picture']?>"></div>
							<div class="info">
								<h6><?=$data4['t_name']?></h6>
								<p><?=$data4['t_position']?></p>
								<div class="social valign">
									<div class="full-width">
										<p>dipl. Arch ETH/SIA</p> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter-alt"></i></a> <a href="#"><i class="ti-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
						</div>
						<?php } ?>
				</div>
			</div>
		</section>
		<!-- Parallax -->
		<section class="testimonials">
			<div class="background bg-img bg-fixed section-padding pb-0" data-background="img/slider/<?=$data['image_path']?>" data-overlay-dark="3" style="padding: 200px 0;">
			</div>
		</section>
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
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/jquery-migrate-3.0.0.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/pace.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scrollIt.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.magnific-popup.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
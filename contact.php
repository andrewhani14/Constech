<!-- Header -->
<?php include('include/header.php');
$page = "contact";
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
		<section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-light="3" data-background="img/banner.jpg"> </section>
		<!-- Contact -->
		<section class="section-padding2">
			<div class="container">
				<div class="row">
					<div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
						<h2 class="section-title">Contact <span>Us</span></h2> </div>
				</div>
				<div class="row mb-90">
					<div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
						<p><b>CONSTECH CONSTRUCTION</b></p>
						<p><?=$data['contact_text']?></p>
					</div>
					<div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
						<p><b>Contact Details</b></p>
						<p><b>Phone :</b> <a href="tel:<?=$data['mobile']?>"><?=$data['mobile']?></a></p>
						<p><b>Email :</b> <a href="mailto:<?=$data['emailid']?>"><?=$data['emailid']?></a></p>
						<p><b>Address :</b> <?=$data['location']?></p>
					</div>
				</div>
				<!-- Map Section-->
				<div class="row">
					<div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
						<h2><b>LOCATION</b></h2>
					</div>
					<div class="col-md-8 mb-30 animate-box" data-animate-effect="fadeInUp">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462560.30120302504!2d54.94756108834282!3d25.076381466775672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2seg!4v1632831562290!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer -->
		<footer class="main-footer dark">
		<?php include('include/footer.php'); ?>
	</div>
	<!-- jQuery -->
	<script src="js/map.js"></script>
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
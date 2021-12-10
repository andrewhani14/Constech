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
		<section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-light="3" data-background="img/banner.jpg"> </section>
		<!-- Not found 404 -->
		<section class="pb-90">
			<div class="container">
				<div class="row">
					<div class="col-md-6 offset-md-3"> <img src="img/404-image.png" class="mb-30" alt="">
						<h2 class="section-title2 mb-10" style="color:#272727;">Sorry We Can't Find That Page!</h2>
						<div class="butn-dark mt-30 text-center" ><a href="index.php"><span>Back to home</span></a></div>
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
					<p><a href="tel:<?=$data['mobile']?>"></p>
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
	<script src="js/YouTubePopUp.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
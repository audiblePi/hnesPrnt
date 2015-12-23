<?php global $up_options; ?>
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="footer-ribbon">
				<span>Get in Touch</span>
			</div>
			<div class="col-md-3">
				<div class="newsletter">
					<?php dynamic_sidebar('Footer Widget Left'); ?>
				</div>
			</div>
			<div class="col-md-3">
				<?php dynamic_sidebar('Footer Widget Left Center'); ?>
			</div>
			<div class="col-md-4">
				<div class="contact-details">
					<?php dynamic_sidebar('Footer Widget Right Center'); ?>
					<ul class="contact">
						<li><p><i class="fa fa-map-marker"></i> <strong>Address: </strong><?php echo $up_options->office_location ?></p></li>
						<li><p><i class="fa fa-phone"></i> <strong>Phone: </strong><?php echo $up_options->phone_number ?></p></li>
						<li><p><i class="fa fa-envelope"></i> <strong>Email: </strong><a href="mailto:<?php echo $up_options->contact_email ?>"><?php echo $up_options->contact_email ?></a></p></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2">
				<?php dynamic_sidebar('Footer Widget Right'); ?>
				<ul class="social-icons">
					<?php global $up_options; if ($up_options->facebook != ''): ?>
				    	<li class="social-icons-facebook"><a class="facebook" target="_blank" href="<?php echo $up_options->facebook ?>"><i class="fa fa-facebook"></i></a></li>
				    <?php endif; ?>
				    <?php if ($up_options->twitter != ''): ?>
				    	<li class="social-icons-twitter"><a class="twitter" target="_blank" href="<?php echo $up_options->twitter ?>"><i class="fa fa-twitter"></i></a></li>
				    <?php endif; ?>
				    <?php if ($up_options->linkedin != ''): ?>
				    	<li class="social-icons-linkedin"><a class="linkedin" target="_blank" href="<?php echo $up_options->linkedin ?>"><i class="fa fa-linkedin"></i></a></li>
				    <?php endif; ?>
				    <?php if ($up_options->googleplus != ''): ?>
				    	<li><a class="googleplus" target="_blank" href="<?php echo $up_options->googleplus ?>"><i class="fa fa-google-plus"></i></a></li>
				    <?php endif; ?>
			   	</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p>© Copyright 2015. All Rights Reserved.</p>
				</div>
				<div class="col-md-6">
					<nav id="sub-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu') ); ?>
					</nav>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery/jquery.min.js"></script>-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/modernizr/modernizr.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.appear/jquery.appear.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.easing/jquery.easing.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-cookie/jquery-cookie.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common/common.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.validation/jquery.validation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.stellar/jquery.stellar.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.gmap/jquery.gmap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope/jquery.isotope.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vide/vide.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/theme.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/views/view.home.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/theme.init.js"></script>
<?php wp_footer(); ?>

</body>
</html>
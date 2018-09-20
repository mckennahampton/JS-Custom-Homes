<?php

/**

 * Template for displaying the footer

 *

 * Contains the closing of the id=main div and all content

 * after. Calls sidebar-footer.php for bottom widgets.

 *

 * @package Bootstrap Canvas WP

 * @since Bootstrap Canvas WP 1.0

 */

?>

<div class="blog-footer" id="about-us">

	<div class="container">

		<div class="logo-area-con col-xs-12 col-sm-6">

			<!--Logo here -->
			<div class="nav-logo">
				<a href="http://www.jshomesok.com">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/both-white.png">
				</a>
			</div>
			<div class="testimonial">
			<div id="image">
			<img src="/img/Family-s.jpg">
			</div>
			<div id="p">
			<p>Jared's wife of 14 years helps with interior design and is a licensed realtor. The couple has two children, Hannah and Roman, both of which are involved in the home building process! The family enjoys this time together along with Taekwondo, travel, involvement in Church of the Harvest, and being outdoors.
			</p>
			</div>
			</div>
			<!-- /Logo here -->

		<!--end of nav-logo-->
		</div>

		<!--mobile hr-->
		<div class="visible-xxs visible-xs hr"></div>

		<!--accredeations con-->
		<div class="footer-contact-con col-xs-12 col-sm-6">

			<div class="footer-contact-guts">

				<h2>Accreditations</h2>

				<div stlye="width: 100%; display: block; text-align: center; height: auto;">

					<!-- "Award" & Social Icons -->
					<div class="award">
						<a href="/2014-building-excellence">2014 Building Excellence Award</a>
					</div>

					<div style="display: block; width: 90%; max-width: 300px; margin: 0 auto;">
						<img src="/img/QRCode.png" style="width: 100%; height: auto;">
					</div>

					<div style="display: block; width: 90%; max-width: 300px; margin: 0 auto;">
						<a href="http://www.bbb.org/oklahomacity/business-reviews/home-builders/js-custom-homes-llc-in-edmond-ok-90050747/quote/#buttonclick" target="_blank" rel="nofollow">
							<img src="http://seal-oklahomacity.bbb.org/request-a-quote/blue-badge-184-70-blue-bbb-90050747.png" style="border: 0; display: block; margin: 0 auto 15px;" alt="JS Custom Homes, LLC BBB Business Review" />
						</a>
					</div>

				</div><!--end footer-contact-guts-->

			</div>

		</div><!--end footer-contact-con-->

	</div><!--end container-->

	<div class="policy-footer">
		<p>&copy <?php echo date('Y'); ?> JS Custom Homes, LLC. All Rights Reserved.</p> - <a href="/privacy" alt="Privacy Policy" class="privacy">Privacy Policy</a>
	</div>

	<div class="bottom-spacer"></div>

</div><!--end blog footer-->





    <?php 

	  /*

	   * Always have wp_footer() just before the closing </body>

	   * tag of your theme, or you will break many plugins, which

	   * generally use this hook to reference JavaScript files.

	   */

	  wp_footer(); 

	?>



</body>

</html>
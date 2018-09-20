<?php

/**

 * Template for displaying all single posts

 *

 * @package Bootstrap Canvas WP

 * @since Bootstrap Canvas WP 1.0

 */



get_header(); ?>
<div class="row">

    <div class="blog-main">

         <div class="single-home">

		 	<h1><?php echo wp_title(); ?></h1>

			<!--desktop slider-->
		 	<div id="single-home-post-ls-large" class="hidden-xxs" style="width: 2000px; height: 700px; margin-bottom: 80px;">

			<?php

			// Retrieve the first gallery in the post
			$gallery = get_post_gallery_images( $post );

			// Loop through each image in each gallery

			foreach( $gallery as $image ) { 

			?>
				<div class="ls-slide">

					<!--Main Image-->
					<div class="ls-l" style="width: 100%; height: auto;">
						<img style="margin-top:-10%;width: 100%; height: auto;" src="<?php echo $image; ?> ">
					</div>

					<!--Overlaying gradient for easier viewing-->
					<div class="ls-l" style="
						width: 100%;
						height: 100%;
						left: 50%;
						top: 50%;
						/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,000000+100&0.5+0,0+20,0+80,0.5+100 */
						background: -moz-linear-gradient(left, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0) 20%, rgba(0,0,0,0) 80%, rgba(0,0,0,0.5) 100%); /* FF3.6-15 */
						background: -webkit-linear-gradient(left, rgba(0,0,0,0.5) 0%,rgba(0,0,0,0) 20%,rgba(0,0,0,0) 80%,rgba(0,0,0,0.5) 100%); /* Chrome10-25,Safari5.1-6 */
						background: linear-gradient(to right, rgba(0,0,0,0.5) 0%,rgba(0,0,0,0) 20%,rgba(0,0,0,0) 80%,rgba(0,0,0,0.5) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
						filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#80000000', endColorstr='#80000000',GradientType=1 ); /* IE6-9 */
					">
					</div>

					<!--Thumbnail-->
					<img src="<?php echo $image; ?>" class="ls-tn" alt="Slide thumbnail">

				</div>
			<?php } //END of foreach ?>
			</div><!--END of layerslider-->


			<!--mobile slider-->
			<div id="single-home-post-ls-mobile" class="visible-xxs" style="width: 1000px; height: 1000px; margin-bottom: 80px;">

			<?php

			// Loop through each image in each gallery

			foreach( $gallery as $image ) { 

			?>
				<div class="ls-slide">

					<!--Main Image-->
					<div class="ls-l"

					style="
					left: 50%;
					top: 50%;
					width: 100%;
					height: 100%;
					background-image: url('<?php echo $image; ?>');
					background-size: cover;
					background-position: center;
					">
						
					</div>

					<!--Overlaying gradient for easier viewing-->
					<div class="ls-l" style="
						width: 100%;
						height: 100%;
						left: 50%;
						top: 50%;
						/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,000000+100&0.5+0,0+20,0+80,0.5+100 */
						background: -moz-linear-gradient(left, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0) 20%, rgba(0,0,0,0) 80%, rgba(0,0,0,0.5) 100%); /* FF3.6-15 */
						background: -webkit-linear-gradient(left, rgba(0,0,0,0.5) 0%,rgba(0,0,0,0) 20%,rgba(0,0,0,0) 80%,rgba(0,0,0,0.5) 100%); /* Chrome10-25,Safari5.1-6 */
						background: linear-gradient(to right, rgba(0,0,0,0.5) 0%,rgba(0,0,0,0) 20%,rgba(0,0,0,0) 80%,rgba(0,0,0,0.5) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
						filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#80000000', endColorstr='#80000000',GradientType=1 ); /* IE6-9 */
					">
					</div>

					<!--Thumbnail-->
					<img src="<?php echo $image; ?>" class="ls-tn" alt="Slide thumbnail">

				</div>
			<?php } //END of foreach ?>
			</div><!--END of layerslider-->

			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<div class="row">
				<!-- Custom Fields panel -->
					<div class="col-xs-12 house-specs">
						<h3>Plan Specs</h3>

						<div class="hr-lite"></div>

						<?php
						//Get the custom fields
						$custom_fields = get_post_meta($post->ID);
						?>
						<ul class="house-specs-ul">
							<li><span style="font-family: RalewayRegular;">Interior</span> - <?php echo $custom_fields["square_feet"][0]; ?> sq/ft</li>
							<li><span style="font-family: RalewayRegular;">Garage</span> - <?php echo $custom_fields["garage"][0]; ?></li>
							<li><span style="font-family: RalewayRegular;">Bedrooms</span> - <?php echo $custom_fields["bedrooms"][0]; ?></li>
							<li><span style="font-family: RalewayRegular;">Bathrooms</span> - <?php echo $custom_fields["bathrooms"][0]; ?></li>
							<li><span style="font-family: RalewayRegular;">Plan Style</span> - <?php echo $custom_fields["plan_design_style"][0]; ?></li>
							<li><span style="font-family: RalewayRegular;">Stories</span> - <?php echo $custom_fields["stories"][0]; ?></li>
						</ul>
					</div><!--end of house-specs-->
				</div><!--end of row-->
			</div>

			<?php
				//Load the contact form
				include("inc/contact-form.php");
			?>
			
			<div class="col-xs-12">
							
				<div class="container">
							
						<h2>Our other plans</h2>

						<div class="hr-lite"></div>

						<!--Other Plans Row-->
						<div id="other-homes-large" class="hidden-xxs" style="width: 1000px; height: 400px;">

						<!--Display the other house plans-->
						<?php

							//Get the current post
							$currentID = get_the_ID();

							//Reset the post data
							wp_reset_postdata();

							//Query the rest of them
							$my_query = new WP_Query(
								array(
									'post_type'		=> 'homes',
									'post__not_in'	=> array($currentID)
								)
							);

							//loop through
							while ( $my_query->have_posts()) {

								//set image
								$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');

								$my_query->the_post();

								?>
								<!--Plan slide-->
								<div class="ls-slide" data-ls="transition2d: 1, 11; slidedelay: 6000;">

									<!--Main Image-->
									<div class="ls-l"

										style="
										left: 50%;
										top: 50%;
										width: 100%;
										height: 100%;
										background-image: url('<?php echo $image[0]; ?>');
										background-size: cover;
										background-position: center;
										"
									>
									</div>

									<!--View More button-->
									<div class="ls-l"

									style="
									width: 50%;
									height: 5%;
									top: 75%;
									left: 50%;
									font-size: 25px;
									text-align: center;
									"
									>
									<a href="<?php echo get_permalink(); ?>" class="featured-slideshow-link">View</a>
									</div>

									<!--Semi-transparent background for Featured Plan image-->
									<div class="ls-l"

									style="
									width: 60%;
									height: 12%;
									/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,000000+100&0.65+0,0+100;Neutral+Density */
									background: -moz-linear-gradient(left, rgba(0,0,0,0.65) 0%, rgba(0,0,0,0) 100%); /* FF3.6-15 */
									background: -webkit-linear-gradient(left, rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* Chrome10-25,Safari5.1-6 */
									background: linear-gradient(to right, rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
									filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=1 ); /* IE6-9 */
									left: 0;
									top: 0;
									"
									></div>

									<!--Plan Title-->
									<div class="ls-l"

										style="
										width: 20%;
										left: 30px;
										top: -8px;
										color: #fff;
										font-size: 30px;
										"
										>
										<span style="font-family: RalewayLight;"> <?php echo $post->post_title; ?></span>

									</div>

									<!--Thumbnail-->
									<img src="<?php echo $image[0]; ?>" class="ls-tn" alt="Slide thumbnail">

								</div><!--end of slide-->
						
						<?php
						//end while
						}
						?>

				</div><!--end slider-->

				<!--Other Plans Row-->
				<div id="other-homes-mobile" class="visible-xxs" style="width: 1000px; height: 1000px;">

					<!--Display the other house plans-->
					<?php

						//loop through
						while ( $my_query->have_posts()) {

							//set image
							$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');

							$my_query->the_post();

							?>
							<!--Plan slide-->
							<div class="ls-slide" data-ls="transition2d: 1, 11; slidedelay: 6000;">

								<!--Main Image-->
								<div class="ls-l"

									style="
									left: 50%;
									top: 50%;
									width: 100%;
									height: 100%;
									background-image: url('<?php echo $image[0]; ?>');
									background-size: cover;
									background-position: center;
									"
								>
								</div>

								<!--View More button-->
								<div class="ls-l"

								style="
								width: 50%;
								height: 10%;
								top: 75%;
								left: 50%;
								font-size: 35px;
								text-align: center;
								"
								>
								<a href="<?php echo get_permalink(); ?>" class="featured-slideshow-link">View</a>
								</div>

								<!--Semi-transparent background for Featured Plan image-->
								<div class="ls-l"

								style="
								width: 60%;
								height: 10%;
								/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,000000+100&0.65+0,0+100;Neutral+Density */
								background: -moz-linear-gradient(left, rgba(0,0,0,0.65) 0%, rgba(0,0,0,0) 100%); /* FF3.6-15 */
								background: -webkit-linear-gradient(left, rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* Chrome10-25,Safari5.1-6 */
								background: linear-gradient(to right, rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
								filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=1 ); /* IE6-9 */
								left: 0;
								top: 0;
								"
								></div>

								<!--Plan Title-->
								<div class="ls-l"

									style="
									width: 20%;
									left: 30px;
									top: -8px;
									color: #fff;
									font-size: 50px;
									"
									>
									<span style="font-family: RalewayLight;"> <?php echo $post->post_title; ?></span>

								</div>

								<!--Thumbnail-->
								<img src="<?php echo $image[0]; ?>" class="ls-tn" alt="Slide thumbnail">

							</div><!--end of slide-->

					<?php
					//end while
					}
					?>

					</div><!--end slider-->

				<div class="bottom-spacer"></div>

			</div><!--end container-->

		</div><!--end of col-->

	</div><!--end row-->

</div><!-- /.blog-main -->

</div>


      

	<?php get_footer(); ?>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

?>

	<!--Large Slideshow -->
	<div id="hp-layerslider-featured-mobile" style="width: 1000px; height: 1000px;">
	<?php

	//Query the featured slideshow
	$args = array(
		'post_type'		=> 'homes',
		'meta_key'		=> 'featured_plan',
		'meta_value'	=> 'featured'
	);

	$the_query = new WP_Query ( $args );

	//make sure the query found results
	if ($the_query->have_posts() ) {
		$i = 1;
		 while ( $the_query->have_posts() && $i == 1) {
			 
			//update $post();
			$the_query->the_post();

			// Make sure the post has a gallery in it
			if( !  has_shortcode( $post->post_content, 'gallery' ) ) {

				return;

			}

			//Get the custom fields
			$custom_fields = get_post_meta($post->ID);


			// Retrieve the first gallery in the post
			$gallery = get_post_gallery_images( $post );

			//define the upload directory
			$upload_dir = wp_upload_dir();

			//loop through each gallery image
			foreach ($gallery as $image) {
			?>
				<div class="ls-slide" data-ls="transition2d: 1, 11; slidedelay: 6000;">

					<!--Link covering whole slide-->
					<a  class="ls-l" style="width: 100%; height: 100%; top: 50%; left: 50%;" href="http://jshomesok.com/homes/plan-4298/"></a>

					<!--Main Image-->
					<div class="ls-l"
					data-ls="
					offsetxin: 500;
					offsetxout: -500;
					durationout: 2500;
					durationin: 1000;
					easingin: easeOutSine;
					easingout: easeInSine;
					"
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

					<!--Semi-transparent background for Featured Plan image-->
					<div class="ls-l"
					data-ls="
					duration:8000;
					durationin:0;
					durationout:0;
					fadein:false;
					fadeout:false;
					"
					style="
					width: 70%;
					height: 15%;
					/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,000000+100&0.65+0,0+100;Neutral+Density */
					background: -moz-linear-gradient(left, rgba(0,0,0,0.65) 0%, rgba(0,0,0,0) 100%); /* FF3.6-15 */
					background: -webkit-linear-gradient(left, rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* Chrome10-25,Safari5.1-6 */
					background: linear-gradient(to right, rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
					filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=1 ); /* IE6-9 */
					left: 0;
					top: 0;
					"
					></div>

					<!--Featured Plan Image-->
					<div class="ls-l"
						data-ls="
						duration:8000;
						durationin:0;
						durationout:0;
						fadein:false;
						"
						style="
						width: 20%;
						left: 30px;
						top: -8px;
						color: #fff;
						font-size: 75px;
						">
						
						<span style="font-family: RalewayExtraBold;">Featured:</span>
						<span style="font-family: RalewayLight;"> <?php echo $post->post_title; ?></span>

					</div>

					<!--View More button-->
					<div class="ls-l"

						data-ls="
						duration:8000;
						durationin:0;
						durationout:0;
						fadein:false;
						"
					
						style="
						width: 50%;
						height: 10%;
						top: 80%;
						left: 50%;
						font-size: 50px;
						text-align: center;
						"
					>
						<a href="<?php echo get_permalink(); ?>" class="featured-slideshow-link">View</a>
					</div>

					<!--Thumbnail-->
					<img src="<?php echo $image; ?>" class="ls-tn" alt="Slide thumbnail">


				</div>

			<?php
			}

			?>
			</div>
		<?php
		//break the while loop
		$i++;
		} //endwhile
	
	//clear the post data
	wp_reset_postdata();

	//End if $featured_plan queried a result
}
?>
<div style="display: block; margin-top: 50px;"></div>


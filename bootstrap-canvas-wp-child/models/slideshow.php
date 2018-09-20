<?php

//	This will write two LayerSlider galleries for each post queried in the WP_Query loop,
//	one optimized for desktops and one optimized for mobile. They are given responsive CSS
//	so that only the one that bests fit the screen appears.
//
//
//	Options:
//
//	$slider_id_large will be the inline HTML ID for the large (desktop) slider
//
//	$slider_id_mobile will be the inline HTML ID for the mobile slider
//
//	$slider_class_large will be the inline HTML ID for the large (desktop) slider
//
//	$slider_class_mobile will be the inline HTML ID for the mobile slider
//
//	$slider_style_large will be the inline HTML stlye for the large (dektop) slider
//
//	$slider_style_mobile will be the inline HTML stlye for the mobile slider
//
//	$wp_args will be the args for the WP_Query loop. This needs to be ar=n array.
//
//	$image_option has two options: "thumbnail" and "gallery"
//	-> "thumbnail" will only load the posts' featured image only
//	-> "gallery" will load the gallery images in the post to create the slideshow
//	-> Giving no argument will default to "gallery". If the post has no gallery,
//	-> it will load the featured image. If there is no featured image is set,
//	-> it will not load the slideshow for that post.





function slideshow($slider_id_large, $slider_id_mobile, $slider_class_large, $slider_class_mobile, $slider_style_large, $slider_style_mobile, $wp_args, $image_option) {

	$TEMPLATE_PATH = get_template_directory_uri(); 
	$TEMPLATE_PATH = parse_url($TEMPLATE_PATH, PHP_URL_PATH);

	$the_query = new WP_Query ( $wp_args );

	//make sure the query found results
	if ($the_query->have_posts() ) {

		 while ( $the_query->have_posts()) {
			 
			//update $post();
			$post = $the_query->the_post();

			//Get the custom fields
			$custom_fields = get_post_meta(get_the_id());



			if ($image_option == "gallery" || !isset($image_option)) {

				// Retrieve the first gallery in the post
				$images = get_post_gallery_images();

				//define the upload directory
				$upload_dir = wp_upload_dir();
			}



			else if ($image_option == "thumbnail") {

				//set image
				$images = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');

				$domain = get_site_url(); // returns something like http://domain.com
				$relative_url = str_replace( $domain, '', $images[0] );
				$images = array($relative_url);

			}

			//Load the views
			include($_SERVER['DOCUMENT_ROOT'] . $TEMPLATE_PATH . '/views/slideshow_large.php');
			include($_SERVER['DOCUMENT_ROOT'] . $TEMPLATE_PATH . '/views/slideshow_mobile.php');

		} //endwhile
	
	//clear the post data
	wp_reset_postdata();
}

}//End of slidshow_large function
?>


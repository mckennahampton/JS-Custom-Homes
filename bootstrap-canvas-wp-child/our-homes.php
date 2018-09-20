<?php

/*
Template Name: Our Homes
*/
/**
 * Template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */

  get_header();

  $args = array(
    'post_type'		=> 'homes',
  );

  $the_query = new WP_Query ( $args );
  
  //make sure the query found results
	if ($the_query->have_posts() ) {

    while ( $the_query->have_posts() ) {

      //update $post();
      $the_query->the_post();

			//Get the custom fields
      $custom_fields = get_post_meta(get_the_id());

      //set image
      $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');

      $domain = get_site_url(); // returns something like http://domain.com
      $relative_url = str_replace( $domain, '', $image );
      $image = $relative_url;
      

      ?>

       <div class="row padded house-row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
          <div class="col-xs-12 col-sm-6 col-inline">
            <img src="<?php echo $image[0]; ?>" style="width: 95%; height: 0 auto; margin: 0 auto;">
          </div><!--
    --><div class="col-xs-12 col-sm-6 col-inline" style="position: relative; text-align: center;">
            <h2 style="display: inline-block;"><?php echo get_the_title(); ?></h2>
            <br>
            <ul>
              <li><span style="font-family: RalewayRegular;">Interior</span> - <?php echo $custom_fields["square_feet"][0]; ?> sq/ft</li>
              <li><span style="font-family: RalewayRegular;">Garage</span> - <?php echo $custom_fields["garage"][0]; ?></li>
              <li><span style="font-family: RalewayRegular;">Bedrooms</span> - <?php echo $custom_fields["bedrooms"][0]; ?></li>
              <li><span style="font-family: RalewayRegular;">Bathrooms</span> - <?php echo $custom_fields["bathrooms"][0]; ?></li>
              <li><span style="font-family: RalewayRegular;">Plan Style</span> - <?php echo $custom_fields["plan_design_style"][0]; ?></li>
              <li><span style="font-family: RalewayRegular;">Stories</span> - <?php echo $custom_fields["stories"][0]; ?></li>
            </ul>
            <br>
            <span class="award"><a class="view-button" href="<?php echo get_the_permalink(); ?>">View</a></span>
          </div>
        </div>
       </div>
       <div class="hr-lite"></div>

      <?php

    }

  }

  ?>
<div class="row padded">
  <?php
    //Load the contact form
    include("inc/contact-form.php");
  ?>
</div>
      
	<?php get_footer(); ?>
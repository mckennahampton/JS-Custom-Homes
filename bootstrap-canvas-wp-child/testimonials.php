<?php

/*
Template Name: Testimonials
*/

	get_header();

?>

<div class="row padded">

	<div class="col-xs-12 col-sm-8 col-sm-offset-2 blog-main">

	<?php
	
	/*Query for the testimonials*/
	$testimonials = $wpdb->get_results("SELECT * from testimonials ORDER BY ID DESC", ARRAY_A);
	
	$i=1;
	
	foreach ($testimonials as $t) {	

		if ($i != count($testimonials)) {
			$hr = "<div class=\"t-hr\"></div>";	
		}

		else {
			$hr = null;
		}
		
	?>
		
		<div class="testimonial-con">
			<p>"<?php echo $t["testimonial"]; ?>"</p>
			<h4>- <?php echo $t["name"]; ?></h4>
		</div>
		
	<?php
		echo $hr;
		$i++;
	} //END foreach

	?>

	</div>

</div>

<?php

	get_footer(); ?>
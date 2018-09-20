<?php
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

?>

	<!--Large Slideshow -->
    <?php
    
    slideshow(

        //$slider_id_large
        'hp-layerslider-featured-large',

        //$slider_id_mobile
        '',

        //$slider_class_large
        "hidden-xxs homes-large",

        //$slider_class_mobile
        "visible-xxs homes-mobile",
        
        //$slider_style_large,
        "width: 2000px; height: 800px; margin-bottom: 70px;",

        //$slider_class_mobile
        "width: 1000px; height: 1000px;",
        
        //$wp_args
        array(
			'post_type'		=> 'homes',
			'meta_key'		=> 'featured_plan',
			'meta_value'	=> 'featured'
		),
        
        //$image_option
        "gallery"
    );

    ?>
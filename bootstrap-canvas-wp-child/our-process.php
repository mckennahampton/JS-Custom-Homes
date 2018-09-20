<?php

/*
Template Name: Our Process
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
  ?>

    <div class="our-process row">

  <?php

  $steps = array(
    //foundation
    array(
        "image"     =>  "/img/Our Process/Foundation-s.jpg",
        "caption"   =>  "We begin by laying your foundation."
    ),
    //pour the slab
    array(
        "image"     =>  "/img/Our Process/Pouring-Floors.jpg",
        "caption"   =>  "Then we pour the slab."
    ),
    //framing phase
    array(
        "image"     =>  "/img/Our Process/Framing-s.jpg",
        "caption"   =>  "Next, we frame your home."
    ),
    //masonry
    array(
        "image"     =>  "/img/Our Process/Masonry-s.jpg",
        "caption"   =>  "Once the frame is complete, the masonry begins."
    ),
    //flooring and masonry
    array(
        "image"     =>  "/img/Our Process/Masonry-2-s.jpg",
        "caption"   =>  "We then do your interior woodwork & flooring"
    ),
    //Storm shelter
    array(
        "image"     =>   "/img/Our Process/Shelter-s.jpg",
        "caption"   =>  "We can also install storm shelters."
    ),
    //Final
    array(
        "image"      =>  "/img/Our Process/Final.jpg",
        "caption"   =>  "After your home passes final inspection, it's ready to be moved into.")
  );

  $steps_count = count($steps);
  $i = 1;

foreach ($steps as $step) {
    ?>

    
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 our-process-panel">
        <div class="row">
            <div class="col-xs-12 col-md-6" style="text-align: center;">
                <img src="<?php echo $step['image']; ?>" style="display: inline-block; vertical-align: middle; width: 90%; height: auto; margin: 0 auto; max-width: 500px;">
            </div><!--
            --><div class="col-xs-12 col-md-6" style="text-align: center;">
                <table>
                    <h2><?php echo $step['caption']; ?></h2>
                </table>
            </div>
        </div>
        <?php
            if ($steps_count == $i) {} else {
        ?>
            <div class="hr-lite"></div>
        <?php
    }
    ?>
    </div>
    <?php
    $i++;
} //end foreach

    ?>
    </div><!--end of .our-process-->
    <?php

get_footer(); ?>
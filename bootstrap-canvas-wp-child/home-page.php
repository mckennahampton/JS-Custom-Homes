<?php

/*
Template Name: JS Home Page
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
  
  if ($_GET["contact-submitted"] == "true") {
    //email sent successfully
    ?>
      <div class="alert alert-success" role="alert">
        <strong>Thank you!</strong> We'll get back to you as soon as we can.
      </div>
    <?php
  } elseif ($_GET["contact-submitted"] == "true") {
    //there was an error
    ?>
      <div class="alert alert-danger" role="alert">
        <strong>Oh no!</strong> There was an error submitting that contact form. Please call Jared directly at (405)-630-0888, or email him at jared@jshomesok.com (maybe you should mention the contact form stopeed working too).
      </div>
    <?php

  }
  
  ?>

    <div id="featured-area">
    <div style="height: 200px; width: 100%; display: block;"></div>
    <div stlye="
      width:100%;
      height: 600px;
      position: relative;
      display: block;
      vertical-align: middle;
      text-align: center;">
      <div style="
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      width: auto;
      float: none;
      overflow: none;
      font-size: 30px;
      font-family: RalewayRegular;
      text-align: center;
      ">
        <img style="display: inline-block;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/45.gif" alt="Loading Animation">
        <br>Loading...
      </div>
    </div>
    <div style="height: 300px; width: 100%; display: block;"></div>
  </div>

<div class="row padded">
  <h1 class="centered-title">Work with us, and we'll treat you like family.</h1>
  <div class="col-xs-12 col-md-6 col-inline">
    <div class="video-container">
      <iframe src="https://player.vimeo.com/video/245280659?title=0&byline=0&portrait=0" width="1500" height="844" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
  </div><!--
      --><div class="col-xs-12 col-md-6 main-page-block col-inline">
        <p>We're a husband and wife didicated to building top-quality homes, customized to your exact desires and requirements.
        We'll work with you every step of the way to ensure your satisfaction.</p>
  </div>
</div><!-- /.row -->

<div class="row padded">
  <h1 class="centered-title">Where we've built</h1>
  <div id="map">
  </div>
</div>

<div class="row padded">
  <?php
    //Load the contact form
    include("inc/contact-form.php");
  ?>
</div>
      
	<?php get_footer(); ?>
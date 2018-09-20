<?php
header('Content-Type: application/javascript');
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
?>

(function ($) {

  $(document).ready(function () {

    $('#searchsubmit, #commentform #submit').addClass('btn btn-default');

	$('button, html input[type="button"], input[type="reset"], input[type="submit"]').addClass('btn btn-default');

	$('input:not(button, html input[type="button"], input[type="reset"], input[type="submit"]), input[type="file"], select, textarea').addClass('form-control');

	if ($('label').parent().not('div')) {

	  $('label:not(#searchform label,#commentform label)').wrap('<div></div>');

	}

    $('table').addClass('table table-bordered');

    $('.attachment-thumbnail').addClass('thumbnail');

    $('embed-responsive-item,iframe,embed,object,video').parent().addClass('embed-responsive embed-responsive-16by9');

	$('.navbar-nav').addClass('blog-nav');

	$('.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus').closest('.navbar-nav').removeClass('blog-nav');



	$(document).ready(featured_content);
	
	//var resizeTimer;

	//$(window).on('resize', function(e) {

		//clearTimeout(resizeTimer);
  		//resizeTimer = setTimeout(function() {
			  //featured_content();
			//}, 250);
		//});

	function featured_content() {
	  if ( $(window).width() > 900 ) {   
		//Add your javascript for large screens here 
		$.ajax({
		  url: '<?php echo get_stylesheet_directory_uri(); ?>/inc/feature-slideshow-large.php',
		  type: 'post',
		  dataType: "html",
		  data: {},
		  success: function (data, status) {
			//console.log("Success!!");
			//console.log(status);
			$('#featured-area').html(data).fadeIn(500);
			//Featured Slideshow
			$('#hp-layerslider-featured-large').layerSlider({
				thumbnailNavigation: 'always',
				imgPreload: false,
				tnContainerWidth: '100%'
			});
		  }
		});
	  } 
	  else {
		$.ajax({
			url: '<?php echo get_stylesheet_directory_uri(); ?>/inc/feature-slideshow-mobile.php',
			type: 'post',
			dataType: "html",
			data: {},
			success: function (data, status) {
			  //console.log("Success!!");
			  //console.log(status);
			  $('#featured-area').html(data).fadeIn(500);
			  //Featured Slideshow
			  $('#hp-layerslider-featured-mobile').layerSlider({
				  thumbnailNavigation: 'always',
				  imgPreload: false,
				  tnContainerWidth: '100%'
			  });
			}
		  });
	  }
	}

			//Validate the contact form
			$('#contact-form').validator();

			// Calling LayerSlider on the target element with adding custom slider options
			$('#hp-layerslider-small').layerSlider({
				pauseOnHover: false,
				layersContainer: 1000,
				startInViewport: false,
				navButtons: false,
				globalBGColor: "#000000",
				showBarTimer: true,
				twoWaySlideshow: true,
				responsive: false, 
				loops: 0,
				responsiveUnder: 1000, 
				hideUnder: 100,
				navStartStop: false,
				yourLogo: 'http://jshomesok.com/mckenna/wp-content/uploads/2015/05/logo-ls.png',
				yourLogoStyle: 'left:90%; top: 80%; width: 10%; height: auto;',
			});

			// Calling LayerSlider on the target element with adding custom slider options
			$('#hp-layerslider-mobile').layerSlider({
				pauseOnHover: false,
				layersContainer: 750,
				startInViewport: false,
				globalBGColor: "#000000",
				navButtons: false,
				showBarTimer: true,
				twoWaySlideshow: true,
				responsive: false, 
				loops: 0,
				responsiveUnder: 750, 
				hideUnder: 100,
				navStartStop: false,
				yourLogo: 'http://jshomesok.com/mckenna/wp-content/uploads/2015/05/logo-ls.png',
				yourLogoStyle: 'left:90%; top: 80%; width: 10%; height: auto;',
			});

			// Calling LayerSlider on the target element with adding custom slider options
			$('#single-home-post-ls-large').layerSlider({
				autoStart: false,
				hoverPrevNext: false,
				globalBGColor: "#000000",
				navStartStop: false,
				showCircleTimer: false,
				responsive: true,
				thumbnailNavigation: 'always',
				imgPreload: false,
				tnContainerWidth: '100%',
				yourLogo: 'http://jshomesok.com/mckenna/wp-content/uploads/2015/05/logo-ls.png',
				yourLogoStyle: 'left:90%; top: 85%; width: 10%; height: auto;',
			});

			// Calling LayerSlider on the target element with adding custom slider options
			$('#single-home-post-ls-mobile').layerSlider({
				autoStart: false,
				hoverPrevNext: false,
				globalBGColor: "#000000",
				navStartStop: false,
				showCircleTimer: false,
				responsive: true,
				thumbnailNavigation: 'always',
				imgPreload: false,
				tnContainerWidth: '100%',
				yourLogo: 'http://jshomesok.com/mckenna/wp-content/uploads/2015/05/logo-ls.png',
				yourLogoStyle: 'left:90%; top: 85%; width: 10%; height: auto;',
			});

			// Calling LayerSlider on the target element with adding custom slider options
			$('#single-home-post-ls-small').layerSlider({
				autoStart: false,
				hoverPrevNext: false,
				globalBGColor: "#000000",
				navStartStop: false,
				showCircleTimer: false,
				responsive: true,
				thumbnailNavigation: 'always',
				imgPreload: false,
				tnContainerWidth: '100%',
				yourLogo: 'http://jshomesok.com/mckenna/wp-content/uploads/2015/05/logo-ls.png',
				yourLogoStyle: 'left:90%; top: 85%; width: 15%; height: auto;',

			});

			// Calling LayerSlider on the target element with adding custom slider options
			$('.homes-large').layerSlider({
				autoStart: true,
				hoverPrevNext: true,
				navStartStop: true,
				showCircleTimer: true,
				globalBGColor: "#000000",
				responsive: true,
				imgPreload: false
			});

			// Calling LayerSlider on the target element with adding custom slider options
			$('.homes-mobile').layerSlider({
				autoStart: true,
				hoverPrevNext: true,
				navStartStop: true,
				showCircleTimer: true,
				globalBGColor: "#000000",
				responsive: true,
				imgPreload: false
			});

			// Calling LayerSlider on the target element with adding custom slider options
			$('#other-homes-large').layerSlider({
				autoStart: true,
				hoverPrevNext: true,
				navStartStop: true,
				showCircleTimer: true,
				globalBGColor: "#000000",
				responsive: true,
				imgPreload: false
			});

			// Calling LayerSlider on the target element with adding custom slider options
			$('#other-homes-mobile').layerSlider({
				autoStart: true,
				hoverPrevNext: true,
				navStartStop: true,
				showCircleTimer: true,
				globalBGColor: "#000000",
				responsive: true,
				imgPreload: false
			});

});

}) (jQuery);
<?php

//Import parent theme's css
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


/*
* Creating a function to create our custom "homes" post type
*/

function my_custom_post_homes() {

  // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x( 'Homes', 'Post Type General Name' ),
          'singular_name'       => _x( 'Home', 'Post Type Singular Name' ),
          'menu_name'           => __( 'Homes' ),
          'parent_item_colon'   => __( 'Parent Neighborhood' ),
          'all_items'           => __( 'All Homes' ),
          'view_item'           => __( 'View Home' ),
          'add_new_item'        => __( 'Add New Home' ),
          'add_new'             => __( 'Add New Home' ),
          'edit_item'           => __( 'Edit Home' ),
          'update_item'         => __( 'Update Home' ),
          'search_items'        => __( 'Search Homes' ),
          'not_found'           => __( 'Not Found' ),
          'not_found_in_trash'  => __( 'Not found in Trash' )
      );
      
  // Set other options for Custom Post Type
      
      $args = array(
          'label'               => __( 'homes' ),
          'description'         => __( 'Our latest custom homes.' ),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
          // You can associate this CPT with a taxonomy or custom taxonomy. 
          'taxonomies'          => array( 'neighborhoods' ),
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */	
          'hierarchical'        => false,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 5,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'page',
      );
      
      // Registering your Custom Post Type
      register_post_type( 'homes', $args );

  
    $labels = array(
      'name'              => _x( 'Neighborhoods', 'taxonomy general name' ),
      'singular_name'     => _x( 'Neighborhoods', 'taxonomy singular name' ),
      'search_items'      => __( 'Search Neighborhoods' ),
      'all_items'         => __( 'All Neighborhoods' ),
      'parent_item'       => __( 'Parent Neighborhood' ),
      'parent_item_colon' => __( 'Parent Neighborhood:' ),
      'edit_item'         => __( 'Edit Neighborhood' ),
      'update_item'       => __( 'Update Neighborhood' ),
      'add_new_item'      => __( 'Add New Neighborhood' ),
      'new_item_name'     => __( 'New Neighborhood' ),
      'menu_name'         => __( 'Neighborhoods' ),
    );
    $args = array(
      'labels' => $labels,
      'hierarchical' => true,
      'query_var' => true,
    );
    register_taxonomy( 'homes_category', 'homes', $args );
    $labels = array(
      'name'              => _x( 'Availability', 'taxonomy general name' ),
      'singular_name'     => _x( 'Availability', 'taxonomy singular name' ),
      'search_items'      => __( 'Search Availability' ),
      'all_items'         => __( 'All Availability' ),
      'parent_item'       => __( 'Parent Availability' ),
      'parent_item_colon' => __( 'Parent Availability:' ),
      'edit_item'         => __( 'Edit Availability' ),
      'update_item'       => __( 'Update Availability' ),
      'add_new_item'      => __( 'Add New Availability' ),
      'new_item_name'     => __( 'New Availability' ),
      'menu_name'         => __( 'Availability' ),
    );
    $args = array(
      'labels' => $labels,
      'hierarchical' => true,
      'query_var' => true,
    );
    register_taxonomy( 'availability', 'homes', $args );
  
  
  }
  
  /* Hook into the 'init' action so that the function
  * Containing our post type registration is not 
  * unnecessarily executed. 
  */
  
  add_action( 'init', 'my_custom_post_homes');
  
  add_action( 'after_setup_theme', 'register_my_menu' );
  function register_my_menu() {
    register_nav_menu( 'footer_primary', __( 'Footer Primary Menu', 'bootstrap-canvas-wp' ) );
  }



//Register my scripts & styles
//#########################################
//-----------------------------------------

function mh_scripts_styles() {

    //wp_deregister_script('jquery');

    /*   REGISTER ALL JS FOR SITE */
	//wp_register_script('googlemaps_locations',get_stylesheet_directory_uri().'/js/googlemaps_locations.js');
	//wp_register_script('googlemaps_api',get_stylesheet_directory_uri().'/js/googlemaps_api.js');
   // wp_register_script('ls_greenshock',get_stylesheet_directory_uri().'/layerslider/js/greenshock.js');
   // wp_register_script('ls_transitions',get_stylesheet_directory_uri().'/layerslider/js/layerslider.transitions.js');
    //wp_register_script('ls_kreaturamedia_jquery',get_stylesheet_directory_uri().'/layerslider/js/layerslider.kreaturamedia.jquery.js');
   /// wp_register_script('aplayer_jplayer',get_stylesheet_directory_uri().'/js/jquery.jplayer.min.js');
   // wp_register_script('aplayer',get_stylesheet_directory_uri().'/js/ttw-music-player-min.js');
   // wp_register_script('aplayer_playlists',get_stylesheet_directory_uri().'/js/playlists.js');
   // wp_register_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js');
    //wp_register_script('myjs',get_stylesheet_directory_uri().'/js/myjs.js');


    //wp_register_script('google-map-api','https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false');



    /*   REGISTER ALL CSS FOR SITE */
   // wp_register_style('main_style',get_stylesheet_directory_uri().'/style.css');
   // wp_register_style('ls_style',get_stylesheet_directory_uri().'/layerslider/css/layerslider.css');



    /*   CALL ALL CSS AND SCRIPTS FOR SITE */
	//wp_enque_script('googlemaps_locations','','','',true);
	//wp_enque_script('googlemaps_api','','','',true);
   // wp_enqueue_script('jquery');
   /// wp_enqueue_script('pls_greenshock');
   // wp_enqueue_script('ls_transitions');
   // wp_enqueue_script('ls_kreaturamedia_jquery');
   // wp_enqueue_script('aplayer_jplayer','','','',true);
   // wp_enqueue_script('aplayer','','','',true);
   // wp_enqueue_script('aplayer_playlists','','','',true);
    //wp_enqueue_script('myjs');


   // wp_enqueue_style('main_style');
   // wp_enqueue_style('ls_style');
}
add_action( 'wp_enqueue_scripts', 'mh_scripts_styles' );

?>
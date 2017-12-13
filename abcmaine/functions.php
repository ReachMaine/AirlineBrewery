<?php

//add_action( 'after_setup_theme', 'be_themes_child_theme_setup' );
//function be_themes_child_theme_setup() {
    load_child_theme_textdomain( 'be-themes', get_stylesheet_directory() . '/languages' );
//}

// function be_restore_default_gallery() {
// remove_shortcode('gallery');
// add_shortcode('gallery','gallery_shortcode');
// remove_shortcode('video');
// add_shortcode('video','wp_video_shortcode');
// }
// add_action( 'init', 'be_restore_default_gallery');

  require_once(get_stylesheet_directory().'/custom/branding.php');
  require_once(get_stylesheet_directory().'/custom/tribe_events.php');
  require_once(get_stylesheet_directory().'/custom/hide_thumb_metabox.php');
  //require_once(get_stylesheet_directory().'/custom/bottom-CTA.php');


  add_filter( 'flamingo_map_meta_cap', 'reach_flamingo_map_meta_cap' );

  function reach_flamingo_map_meta_cap( $meta_caps ) {
  	$meta_caps = array_merge( $meta_caps, array(

  		'flamingo_edit_inbound_messages' => 'edit_pages', // allow on admin sidebar  - works, but cant do anything.
      'flamingo_edit_inbound_message' => 'edit_posts', // allow editor to see it
  		'flamingo_delete_inbound_message' => 'delete_pages',
  		'flamingo_delete_inbound_messages' => 'delete_pages',
  		'flamingo_spam_inbound_message' => 'delete_pages',
  		'flamingo_unspam_inbound_message' => 'delete_pages',

  	) );

  	return $meta_caps;
  }
?>

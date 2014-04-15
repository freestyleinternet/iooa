<?php

/****************************************
Theme Setup
*****************************************/

require_once( get_template_directory() . '/lib/init.php' );
require_once( get_template_directory() . '/lib/theme-helpers.php' );
require_once( get_template_directory() . '/lib/theme-functions.php' );
require_once( get_template_directory() . '/lib/theme-comments.php' );


/****************************************
Require Plugins
*****************************************/

require_once( get_template_directory() . '/lib/class-tgm-plugin-activation.php' );
require_once( get_template_directory() . '/lib/theme-require-plugins.php' );

add_action( 'tgmpa_register', 'mb_register_required_plugins' );


/****************************************
Misc Theme Functions
*****************************************/

// truncate function
function truncate($string, $limit, $break=" ", $pad="...")
{
	// Remove any formatting first
	$string = strip_tags($string);
	if(strlen($string) <= $limit) return $string;
	if(false !== ($breakpoint = strpos($string, $break, $limit)))
	{
		if($breakpoint < strlen($string) - 1)
		{
			$string = substr($string, 0, $breakpoint) . $pad;
		}
	}
	return $string;
}


add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

// add featured image support
function custom_image_sizes() {
    add_theme_support('post-thumbnails');
	add_image_size('pagefeature', 248, 9999, TRUE);
	add_image_size('sponsor', 183, 9999, TRUE);
	add_image_size('judge', 139, 139, TRUE);
	add_image_size('winnerbanner', 630, 161, TRUE);
	add_image_size('walltile', 400, 250, TRUE);
	add_image_size('bigslide', 300, 165, TRUE);
	add_image_size('slidethumb', 69, 38, TRUE);
}
add_action('after_setup_theme', 'custom_image_sizes');

/**
 * Allow SVG file upload in Wordpress Admin area
 */
function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

/**
 * Define custom post type capabilities for use with Members
 */
function mb_add_post_type_caps() {
	// mb_add_capabilities( 'portfolio' );
}

/**
 * Filter Yoast SEO Metabox Priority
 */
add_filter( 'wpseo_metabox_prio', 'mb_filter_yoast_seo_metabox' );
function mb_filter_yoast_seo_metabox() {
	return 'low';
}

 /*-----------------------------------------------------------------------------------*/
/* Custom post type added by Annemarie
/*-----------------------------------------------------------------------------------*/
add_action('init', 'feature_init');
function feature_init() 
{
	//Default arguments
	$args = array
	(
		'public' 						=> true,
		'publicly_queryable'		=> true,
		'show_ui' 			   		=> true, 
		'query_var' 			 	=> true,
		'rewrite' 			   		=> true,
		'capability_type' 	   		=> 'post',
		'has_archive' 		   		=> true, 
		'hierarchical' 		  		=> false,
		'menu_position' 		 	=> NULL,
	);
	
	/* ----------------------------------------------------
	Award Categories Home page and page
	---------------------------------------------------- */
	
	$labels = array
	(
		'name'						=> 'Award Category',
		'singular_name' 			=> 'Award Category',
		'add_new' 			  		=> _x('Add New', 'Award Category'),
		'add_new_item' 		 	=> 'Add Award Category',
		'edit_item' 					=> 'Edit Award Category',
		'new_item' 			 	=> 'New Award Category',
		'view_item' 				=> 'View Award Categories',
		'search_items' 		 	=> 'Search Award Categories',
		'not_found' 				=> 'No Award Categories found',
		'not_found_in_trash'  => 'No Award Categories found in Trash',
		'parent_item_colon' 	=> '',
		'menu_name' 				=> 'Award Categories'
	);
	
	$args['labels'] 				= $labels;
	$args['supports'] 		  	= array('title','editor','thumbnail');
	$args['rewrite']		   		= array('slug' => 'awards');
	$args['menu_icon']		 	= get_bloginfo('template_directory').'/assets/images/bubble.png';
	$args['show_in_menu']	= true;
	$args['has_archive']	    = true;
	
	register_post_type('awardcategories', $args);
	
	flush_rewrite_rules();
	
	/* ----------------------------------------------------
	Judges
	---------------------------------------------------- */
	
	$labels = array
	(
		'name'						=> 'Judge',
		'singular_name' 			=> 'Judge',
		'add_new' 			  		=> _x('Add New', 'Judge'),
		'add_new_item' 		 	=> 'Add Judge',
		'edit_item' 					=> 'Edit Judge',
		'new_item' 			 	=> 'New Judge',
		'view_item' 				=> 'View Judges',
		'search_items' 		 	=> 'Search Judges',
		'not_found' 				=> 'No Judges found',
		'not_found_in_trash'  => 'No Judges found in Trash',
		'parent_item_colon' 	=> '',
		'menu_name' 				=> 'Judges'
	);
	
	$args['labels'] 				= $labels;
	$args['supports'] 		  	= array('title','editor','thumbnail');
	$args['rewrite']		   		= array('slug' => 'judges');
	$args['menu_icon']		 	= get_bloginfo('template_directory').'/assets/images/people.png';
	$args['show_in_menu']	= true;
	$args['has_archive']	    = true;
	
	register_post_type('judges', $args);
	
	flush_rewrite_rules();
	
	/* ----------------------------------------------------
	Past Winners
	---------------------------------------------------- */
	
	$labels = array
	(
		'name'						=> 'Winner',
		'singular_name' 			=> 'Winner',
		'add_new' 			  		=> _x('Add New', 'Winner'),
		'add_new_item' 		 	=> 'Add Winner',
		'edit_item' 					=> 'Edit Winner',
		'new_item' 			 	=> 'New Winner',
		'view_item' 				=> 'View Winners',
		'search_items' 		 	=> 'Search Winners',
		'not_found' 				=> 'No Winners found',
		'not_found_in_trash'  => 'No Winners found in Trash',
		'parent_item_colon' 	=> '',
		'menu_name' 				=> 'Past Winners'
	);
	
	$args['labels'] 				= $labels;
	$args['supports'] 		  	= array('title','editor','thumbnail');
	$args['rewrite']		   		= array('slug' => 'winner');
	$args['menu_icon']		 	= get_bloginfo('template_directory').'/assets/images/people.png';
	$args['show_in_menu']	= true;
	$args['has_archive']	    = true;
	
	register_post_type('winner', $args);
	
	flush_rewrite_rules();
	
	/* ----------------------------------------------------
	Our Sponsors
	---------------------------------------------------- */
	
	$labels = array
	(
		'name'						=> 'Sponsor',
		'singular_name' 			=> 'Sponsor',
		'add_new' 			  		=> _x('Add New', 'Sponsor'),
		'add_new_item' 		 	=> 'Add Sponsor',
		'edit_item' 					=> 'Edit Sponsor',
		'new_item' 			 	=> 'New Sponsor',
		'view_item' 				=> 'View Sponsors',
		'search_items' 		 	=> 'Search Sponsors',
		'not_found' 				=> 'No Sponsors found',
		'not_found_in_trash'  => 'No Sponsors found in Trash',
		'parent_item_colon' 	=> '',
		'menu_name' 				=> 'Our Sponsors'
	);
	
	$args['labels'] 				= $labels;
	$args['supports'] 		  	= array('title','editor','thumbnail');
	$args['rewrite']		   		= array('slug' => 'sponsors');
	$args['menu_icon']		 	= get_bloginfo('template_directory').'/assets/images/bubble.png';
	$args['show_in_menu']	= true;
	$args['has_archive']	    = true;
	
	register_post_type('sponsors', $args);
	
	flush_rewrite_rules();
	
}


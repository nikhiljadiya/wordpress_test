<?php

add_action( 'init', 'themeCustomPostType' );

function themeCustomPostType() {


	############### News ###############


	$custom_grid_name = "Jobs";

	$custom_form_name = "Jobs";

	$custom_type_name = "jobs";


	$labels = array(

		'name' => __( $custom_grid_name ),

		'singular_name' => __( $custom_grid_name ),

		'menu_name' => __( $custom_grid_name ),

		'add_new' => __( 'Add New' ),

		'add_new_item' => __( 'Add New ' . $custom_form_name ),

		'edit' => __( 'Edit' ),

		'edit_item' => __( 'Edit ' . $custom_form_name ),

		'new_item' => __( 'New ' . $custom_form_name ),

		'view' => __( 'View' ),

		'view_item' => __( 'View ' . $custom_form_name ),

		'search_items' => __( 'Search ' . $custom_form_name ),

		'not_found' => __( 'No ' . $custom_form_name . ' found' ),

		'not_found_in_trash' => __( 'No ' . $custom_form_name . ' found in Trash' ),

		'parent' => __( 'Parent ' . $custom_form_name ),

		'featured_image' => __( $custom_form_name . ' Image' ),

		'set_featured_image' => __( 'Set ' . $custom_form_name . ' image' ),

	);


	$args = array(

		'labels' => $labels,

		'public' => true,

		'publicly_queryable' => true,

		'query_var' => true,

		'rewrite' => true,

		'hierarchical' => false,

		'has_archive' => true,

		'_builtin' => false,

		'can_export' => true,

		'exclude_from_search' => true,

		'show_ui' => true,

		'show_in_nav_menus' => false,

		'show_in_menu' => true, //false

		'menu_position' => 29,

		'menu_icon' => 'dashicons-format-aside',

		'_edit_link' => 'post.php?post=%d',

		'capability_type' => 'post',

		'supports' => array( 'title', 'editor' ),

		'taxonomies' => array( '' ),

	);


	register_post_type( $custom_type_name, $args );

}
?>
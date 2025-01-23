<?php

// Register Custom Post Type client_name
function create_client_cpt() {

	$labels = array(
		'name' => _x( 'Client  Image List', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'client_name', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Client Section', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'client_name', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'client_name Archives', 'textdomain' ),
		'attributes' => __( 'client_name Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent client_name:', 'textdomain' ),
		'all_items' => __( 'All client_name', 'textdomain' ),
		'add_new_item' => __( 'Add New Client Item', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Client Image', 'textdomain' ),
		'edit_item' => __( 'Edit Client Name', 'textdomain' ),
		'update_item' => __( 'Update client_name', 'textdomain' ),
		'view_item' => __( 'View client_name', 'textdomain' ),
		'view_items' => __( 'View client_name', 'textdomain' ),
		'search_items' => __( 'Search client_name', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into client_name', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this client_name', 'textdomain' ),
		'items_list' => __( 'client_name list', 'textdomain' ),
		'items_list_navigation' => __( 'client_name list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter client_name list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'client_name', 'textdomain' ),
		'description' => __( 'client section', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array('title', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 11,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'client_section', $args );

}
add_action( 'init', 'create_client_cpt', 0 );
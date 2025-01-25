<?php

// Register Custom Post Type portfolio
if(!function_exists('create_portfolio_cpt')){
    function create_portfolio_cpt() {

        $labels = array(
            'name' => _x( 'portfolio', 'Post Type General Name', 'textdomain' ),
            'singular_name' => _x( 'portfolio', 'Post Type Singular Name', 'textdomain' ),
            'menu_name' => _x( 'Our portfolio', 'Admin Menu text', 'textdomain' ),
            'name_admin_bar' => _x( 'portfolio', 'Add New on Toolbar', 'textdomain' ),
            'archives' => __( 'portfolio Archives', 'textdomain' ),
            'attributes' => __( 'portfolio Attributes', 'textdomain' ),
            'parent_item_colon' => __( 'Parent portfolio:', 'textdomain' ),
            'all_items' => __( 'All portfolio', 'textdomain' ),
            'add_new_item' => __( 'Add New portfolio', 'textdomain' ),
            'add_new' => __( 'Add New', 'textdomain' ),
            'new_item' => __( 'New portfolio', 'textdomain' ),
            'edit_item' => __( 'Edit portfolio', 'textdomain' ),
            'update_item' => __( 'Update portfolio', 'textdomain' ),
            'view_item' => __( 'View portfolio', 'textdomain' ),
            'view_items' => __( 'View portfolio', 'textdomain' ),
            'search_items' => __( 'Search portfolio', 'textdomain' ),
            'not_found' => __( 'Not found', 'textdomain' ),
            'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
            'featured_image' => __( 'Featured Image', 'textdomain' ),
            'set_featured_image' => __( 'Set featured image', 'textdomain' ),
            'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
            'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
            'insert_into_item' => __( 'Insert into portfolio', 'textdomain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this portfolio', 'textdomain' ),
            'items_list' => __( 'portfolio list', 'textdomain' ),
            'items_list_navigation' => __( 'portfolio list navigation', 'textdomain' ),
            'filter_items_list' => __( 'Filter portfolio list', 'textdomain' ),
        );
        $args = array(
            'label' => __( 'portfolio', 'textdomain' ),
            'description' => __( 'portfolio', 'textdomain' ),
            'labels' => $labels,
            'menu_icon' => '',
            'supports' => array('title', 'author', 'excerpt'),
            'taxonomies' => array(),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 25,
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
        register_post_type( 'portfolio', $args );
    
    }
}
add_action( 'init', 'create_portfolio_cpt', 0 );
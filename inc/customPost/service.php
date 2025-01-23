<?php

if(!function_exists('serviceCustomPost')){
    function serviceCustomPost(){
        register_post_type( 'servicePost', 
        array(
            'labels' => array(
                'name' => __( 'Service List', 'textdomain' ),
                'singular_name' => __( 'SingularName', 'textdomain' ),
                'menu_name' => __( 'Service Item', 'textdomain' ),
                'all_items' => __( 'Service List', 'textdomain' ),
                'add_new_item' => __( 'Add new service', "textdomain"),
                'edit_item' => __( 'Update service Item', "textdomain")
            ),
            'public' => true,
            'supports' => array(
                'title', 'author', 'excerpt'
            ),
            'capability_type' => 'post',
            'menu_position' => 6 
        ));
    }
}

add_action( 'init', 'serviceCustomPost');

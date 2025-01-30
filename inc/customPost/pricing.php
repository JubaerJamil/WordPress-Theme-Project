<?php

if(!function_exists('my_pricing_cbm')){
    function my_pricing_cbm(){
        register_post_type( 'pricing', array(
            'labels' => array(
                'name' => __( 'Pricing List', 'textdomain' ),
                'singular_name' => __( 'SingularName_price', 'textdomain' ),
                'menu_name' => __( 'Pricing', 'textdomain' ),
                'all_items' => __( 'My Pricing List', 'textdomain' ),
                'add_new_item' => __( 'Add new Item', "textdomain"),
                'edit_item' => __( 'Update Pricing Item', "textdomain")
            ),
            'public' => true,
            'supports' => array(
                'title', 'author'
            ),
            'capability_type' => 'post',
            'menu_position' => 8
        ));
    }
}

add_action( 'init', 'my_pricing_cbm');
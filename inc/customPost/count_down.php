<?php

if(!function_exists('count_down_section')){
    function count_down_section(){
        register_post_type( 'count_down', array(
            'labels' => array(
                'name' => __( 'Count Down List', 'textdomain' ),
                'singular_name' => __( 'SingularName', 'textdomain' ),
                'menu_name' => __( 'Count Down Section', 'textdomain' ),
                'all_items' => __( 'Count Down List', 'textdomain' ),
                'add_new_item' => __( 'Add new Count Down Item', "textdomain"),
                'edit_item' => __( 'Update Count Down Item', "textdomain")
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

add_action( 'init', 'count_down_section');
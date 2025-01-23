<?php

if(!function_exists('myCustomPost')){
    function myCustomPost(){
        register_post_type( 'MyOwnSlider', 
        array(
            'labels' => 
            array(
                'name' => __( "Sliders List", "textdomain"),
                'singular_name' => __( "singularName", "textdomain"),
                'menu_name' => __( "My sliders", "textdomain"),
                'all_items' => __( "Slider List", "textdomain"),
                'add_new_item' => __( "Add new slider", "textdomain"),
                'edit_item' => __( 'Update slider Item', "textdomain")
            ),
            'public' => true,
            'supports' => array(
                'title', 'editor', 'thumbnail', 'author', 'comments', 'excerpt'
            ),
            'capability_type' => 'post',
            'menu_position' => 5,
        ) );
    }
}

add_action( 'init', 'myCustomPost');


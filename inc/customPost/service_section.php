<?php

if(!function_exists('my_service_section')){
    function my_service_section(){
        register_post_type( 'my_service', array(
            'labels' => array(
                'name' => __( 'My Service List', 'textdomain' ),
                'singular_name' => __( 'SingularName_Service', 'textdomain' ),
                'menu_name' => __( 'My Services', 'textdomain' ),
                'all_items' => __( 'My Service List', 'textdomain' ),
                'add_new_item' => __( 'Add new My Service Item', "textdomain"),
                'edit_item' => __( 'Update My Service Item', "textdomain")
            ),
            'public' => true,
            'supports' => array(
                'title', 'author', 'editor'
            ),
            'capability_type' => 'post',
            'menu_position' => 7
        ));
    }
}

add_action( 'init', 'my_service_section');
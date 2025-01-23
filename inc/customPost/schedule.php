<?php

if(!function_exists('schedule_section')){
    function schedule_section(){
        register_post_type( 'my_schedule', array(
            'labels' => array(
                'name' => __( 'Schedule List', 'textdomain' ),
                'singular_name' => __( 'SingularName_Schedule', 'textdomain' ),
                'menu_name' => __( 'My Schedule', 'textdomain' ),
                'all_items' => __( 'My Schedule List', 'textdomain' ),
                'add_new_item' => __( 'Add new Schedule Item', "textdomain"),
                'edit_item' => __( 'Update Schedule Item', "textdomain")
            ),
            'public' => true,
            'supports' => array(
                'title', 'author', 'editor', 'excerpt'
            ),
            'capability_type' => 'post',
            'menu_position' => 8
        ));
    }
}

add_action( 'init', 'schedule_section');
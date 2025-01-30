<?php

if(!function_exists('myMenus')){
    // add class in li
    function add_class_on_menu_li($classes, $item, $args) {
        if(isset($args->add_li_class)) {
            $classes[] = $args->add_li_class;
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'add_class_on_menu_li', 1, 3);

    // add class in anchor tag in meny
    function add_link_atts($atts) {
        $atts['class'] = "a_tag_class";
        return $atts;
      }
      add_filter( 'nav_menu_link_attributes', 'add_link_atts');


    // active menu item
    function activeMenu($menu_items){
        $menu_items[1]->classes[] = 'active';
        return $menu_items;
    }
    add_filter( 'wp_nav_menu_objects', 'activeMenu');


    function myMenus(){
        register_nav_menus(array(
            'top_menu' => __('Top menu', 'textdomain'),
            'primary_menu' => __('Primary menu', 'textdomain'),
            'footer_menu' => __('Footer menu', 'textdomain')
        ));
    }
}

add_action( 'init', 'myMenus');
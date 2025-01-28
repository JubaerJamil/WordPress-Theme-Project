<?php

add_action( 'after_setup_theme', 'doctortheme');

if(!function_exists('doctortheme')){
    function doctortheme(){

        // add_theme_support('post-thumbnails', array('post', 'page'));
        add_theme_support('post-thumbnails');
        add_theme_support( 'post-formats', array('aside', 'image', 'video', 'gallery', 'quote') );

        add_action('wp_enqueue_scripts', 'wpdesignscript');

        if(!function_exists('wpdesignscript')){
            function wpdesignscript(){

                wp_enqueue_style( 'main_css_file', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'), 'all');
                wp_enqueue_style( 'main_css', get_parent_theme_file_uri('assets/css/main.css'), array(), wp_get_theme()->get('Version'), 'all');
                wp_add_inline_style('main_css', '');

                // Bootstrap CSS
                wp_enqueue_style( 'bootstrap_css', get_parent_theme_file_uri('assets/css/bootstrap.min.css'), array(), wp_get_theme()->get('Version'), 'all');
                // Nice Select CSS
                wp_enqueue_style( 'nice_select_css', get_parent_theme_file_uri('assets/css/nice-select.css'), array(), wp_get_theme()->get('Version'), 'all');
                // Font Awesome CSS 
                wp_enqueue_style( 'font_awesome_css', get_parent_theme_file_uri('assets/css/font-awesome.min.css'), array(), wp_get_theme()->get('Version'), 'all');
                // icofont CSS
                wp_enqueue_style( 'icofont_css', get_parent_theme_file_uri('assets/css/icofont.css'), array(), wp_get_theme()->get('Version'), 'all');
                // Slicknav
                wp_enqueue_style( 'slicknav_css', get_parent_theme_file_uri('assets/css/slicknav.min.css'), array(), wp_get_theme()->get('Version'), 'all');
                // Owl Carousel CSS
                wp_enqueue_style( 'owl_carousel_css', get_parent_theme_file_uri('assets/css/owl-carousel.css'), array(), wp_get_theme()->get('Version'), 'all');
                // Datepicker CSS
                wp_enqueue_style( 'datepicker_css', get_parent_theme_file_uri('assets/css/datepicker.css'), array(), wp_get_theme()->get('Version'), 'all');
                // Animate CSS
                wp_enqueue_style( 'animate_css', get_parent_theme_file_uri('assets/css/animate.min.css'), array(), wp_get_theme()->get('Version'), 'all');
                // Magnific Popup CSS
                wp_enqueue_style( 'magnific_popup_css', get_parent_theme_file_uri('assets/css/magnific-popup.css'), array(), wp_get_theme()->get('Version'), 'all');
                //Medipro CSS
                wp_enqueue_style( 'normalize_css', get_parent_theme_file_uri('assets/css/normalize.css'), array(), wp_get_theme()->get('Version'), 'all');
                wp_enqueue_style( 'style_css', get_parent_theme_file_uri('assets/css/style.css'), array(), wp_get_theme()->get('Version'), 'all');
                wp_enqueue_style( 'responsive_css', get_parent_theme_file_uri('assets/css/responsive.css'), array(), wp_get_theme()->get('Version'), 'all');
                // custom CSS
                wp_enqueue_style( 'custom_css', get_parent_theme_file_uri('assets/css/custom.css'), array(), wp_get_theme()->get('Version'), 'all');


                // js link
                wp_enqueue_script( 'wp_main_js', get_template_directory_uri().'/assets/js/wp-main.js', array(), wp_get_theme()->get('Version'), true );
                wp_add_inline_script( 'wp_main_js', '' );

                // Enqueue jQuery Min JS
                wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), wp_get_theme()->get('Version'), true );
                // Enqueue jQuery Migrate JS
                wp_enqueue_script( 'jquery_migrate_js', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.0.js', array(), wp_get_theme()->get('Version'), true );
                // Enqueue jQuery UI JS
                wp_enqueue_script( 'jquery_ui_js', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array(), wp_get_theme()->get('Version'), true );
                // Enqueue Easing JS
                wp_enqueue_script( 'easing_js', get_template_directory_uri() . '/assets/js/easing.js', array(), wp_get_theme()->get('Version'), true );
                // Enqueue Colors JS
                wp_enqueue_script( 'colors_js', get_template_directory_uri() . '/assets/js/colors.js', array(), wp_get_theme()->get('Version'), true );
                // Enqueue Popper JS
                wp_enqueue_script( 'popper_js', get_template_directory_uri() . '/assets/js/popper.min.js', array(), wp_get_theme()->get('Version'), true );
                // Enqueue Bootstrap Datepicker JS
                wp_enqueue_script( 'bootstrap_datepicker_js', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js', array(), wp_get_theme()->get('Version'), true );
                // Enqueue jQuery Nav JS
                wp_enqueue_script( 'jquery_nav_js', get_template_directory_uri() . '/assets/js/jquery.nav.js', array(), wp_get_theme()->get('Version'), true );
                // Enqueue Slicknav JS
                wp_enqueue_script( 'slicknav_js', get_template_directory_uri() . '/assets/js/slicknav.min.js', array(), wp_get_theme()->get('Version'), true );
                // Enqueue ScrollUp JS
                wp_enqueue_script( 'scrollup_js', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array(), wp_get_theme()->get('Version'), true );
                // Enqueue Niceselect JS
                wp_enqueue_script( 'niceselect_js', get_template_directory_uri() . '/assets/js/niceselect.js', array(), wp_get_theme()->get('Version'), true );
                // Enqueue Tilt Jquery JS
                wp_enqueue_script( 'tilt_jquery_js', get_template_directory_uri() . '/assets/js/tilt.jquery.min.js', array(), wp_get_theme()->get('Version'), true );
                // Enqueue Owl Carousel JS
                wp_enqueue_script( 'owl_carousel_js', get_template_directory_uri() . '/assets/js/owl-carousel.js', array(), wp_get_theme()->get('Version'), true );
                // Enqueue CounterUp JS
                wp_enqueue_script( 'counterup_js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), wp_get_theme()->get('Version'), true );
                // Enqueue Steller JS
                wp_enqueue_script( 'steller_js', get_template_directory_uri() . '/assets/js/steller.js', array(), wp_get_theme()->get('Version'), true );
                // Enqueue Wow JS
                wp_enqueue_script( 'wow_js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), wp_get_theme()->get('Version'), true );
                // Enqueue Magnific Popup JS
                wp_enqueue_script( 'magnific_popup_js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), wp_get_theme()->get('Version'), true );
                // Enqueue Counter Up CDN JS
                wp_enqueue_script( 'counter_up_cdn_js', 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array(), null, true );
                // Enqueue Bootstrap JS
                wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), wp_get_theme()->get('Version'), true );
                // Enqueue Main JS
                wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/main.js', array(), wp_get_theme()->get('Version'), true );

    
            }
        }

    }
}

if(!function_exists('myMenus')){
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





    // for custom post page not found error solve
flush_rewrite_rules( false );

    // codestar frameword
require_once get_theme_file_path(). '/inc/theme-option/codestar-framework.php';
require_once get_theme_file_path(). '/inc/theme-option/samples/codeStarFrameword.php';
// require_once get_theme_file_path(). '/inc/theme-option/samples/admin-options.php';

    // all meta box function
require get_template_directory()."/inc/customPost/all_meta_box.php";

    // all custop post type function
require get_template_directory()."/inc/customPost/slider.php";
require get_template_directory()."/inc/customPost/service.php";
require get_template_directory()."/inc/customPost/count_down.php";
require get_template_directory()."/inc/customPost/service_section.php";
require get_template_directory()."/inc/customPost/schedule.php";
require get_template_directory()."/inc/customPost/portfolio.php";
require get_template_directory()."/inc/customPost/client.php";

<?php

if(!function_exists('callBackFunction')){
    function callBackFunction(){
        add_shortcode( 'myShortCode', 'shortCodeFunction' );

        if(!function_exists('shortCodeFunction')){
            function shortCodeFunction($arrys = [], $content = null){
                $content = "My Short Code";
                return $content;
            }
        }
    }

}

add_action( 'init', 'callBackFunction');
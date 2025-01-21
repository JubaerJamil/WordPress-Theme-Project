<?php

// service meta box start
if(!function_exists('serviceMetaBox')){
    function serviceMetaBox(){
        add_meta_box('serviceMetaId', 'Add Icon', 'addhtml', 'servicePost');
    }
}

if(!function_exists('addhtml')){
    function addhtml($post){
            $iconValue = get_post_meta( $post->ID, 'unique_Key', true)
        ?>
        <input type="text" name="add_icon" id="add_icon" class="form-control" value="<?php echo $iconValue; ?>">

        <?php
    }
}
add_action( 'add_meta_boxes', 'serviceMetaBox');


if(!function_exists('saveIcon')){
    function saveIcon($post_id){
        if(isset($_POST['add_icon'])){
            update_post_meta(
                $post_id,
                'unique_Key', 
                sanitize_text_field($_POST['add_icon'])
            );
        }
    }
}
add_action('save_post', 'saveIcon');
// service meta box end


// count down meta box start
if(!function_exists('countDownMetaBox')){
    function countDownMetaBox(){
        add_meta_box( 'countDownMetaId', 'Add Icon', 'count_down_html', 'count_down');
    }
}

if(!function_exists('count_down_html')){
    function count_down_html($post){
            $iconValueCount = get_post_meta( $post->ID, 'count_Down_Unique_Key', true)
        ?>
            <input type="text" name="add_icon_count_down" id="add_icon_count_down" class="form-control" value="<?php echo $iconValueCount; ?>">
        <?php
    }
}

add_action('add_meta_boxes', 'countDownMetaBox');


if(!function_exists('save_count_down')){
    function save_count_down($post_id){
        if(isset($_POST['add_icon_count_down'])){
            update_post_meta( 
                $post_id,
                'count_Down_Unique_Key',
                sanitize_text_field($_POST['add_icon_count_down'])
            );
        }
    }
}

add_action( 'save_post', 'save_count_down');

// count down meta box end
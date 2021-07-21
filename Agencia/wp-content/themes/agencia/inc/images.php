<?php
add_theme_support( 'post-thumbnails' );
add_action('after_setup_theme', function(){
    set_post_thumbnail_size(250,250,true);
    add_image_size('property_carousel', 777, 444, true);
});
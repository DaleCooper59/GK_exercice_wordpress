<?php
defined('ABSPATH') or die('');

add_action('after_support_theme', function(){
    add_theme_support('title-tag');
    add_theme_support('html5');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
});

add_filter('upload_mimes', function($mimes){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});
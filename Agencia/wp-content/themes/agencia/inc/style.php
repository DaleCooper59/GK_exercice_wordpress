<?php
add_filter('next_posts_link_attributes', function($attrs, $class=''){
    return $attrs .  'class=btn '. $class;
});
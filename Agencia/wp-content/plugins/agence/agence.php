<?php

/**
 * Plugin Name : Agence plugin
 */
add_action('init', function(){
    register_post_type('bien', [
        'label' => 'Bien',
        'labels' => [
            'name'                     => __('Property', 'agence'),
            'singular_name'            => __('Property', 'agence'),
            'edit_item'                  => __('Edit property', 'agence'),
            'new_item'                 =>__('New property', 'agence'),
            'view_item'                => __('View property', 'agence'),
            'view_items'               =>__('New properties', 'agence'),
            'search_items'             =>__('Search properties', 'agence'),
            'not_found'                => __('No properties found', 'agence'),
            'not_found_in_trash'       =>__('No properties found in trash', 'agence'),
            'all_items'                => __('All properties', 'agence'),
            'archives'                 => __('Property archives', 'agence'),
            'attributes'               =>__('Property attributes', 'agence'),
            'insert_into_item'         =>__('Insert into property', 'agence'),
            'uploaded_to_this_item'    =>__('Upload to this property', 'agence'),
            'filter_items_list'        =>__('Filter properties list', 'agence'),
            'items_list_navigation'    =>__('Properties list navigation', 'agence'),
            'items_list'               =>__('Properties list', 'agence'),
            'item_published'           =>__('Property published', 'agence'),
            'item_published_privately' =>__('Property published privately', 'agence'),
            'item_reverted_to_draft'   =>__('Property revert to draft', 'agence'),
            'item_scheduled'           =>__('Property scheduled', 'agence'),
            'item_updated'             =>__('Property updated', 'agence'),
        ],
        'public' => true,
        'hierarchical' => false,
        'exclude_from_serach' => false,
        'supports' => ['title', 'editor', 'excerpt', 'thumbnails'],
    ]);
});

register_activation_hook(__FILE__, 'flush_rewrite_rules');
register_deactivation_hook(__FILE__, 'flush_rewrite_rules');
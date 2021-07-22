<?php

defined('ABSPATH') or die('Rien à voir');

/**
 * Fichier pour déclarer filtres supllémentaires pour filter les biens
 */

//Filtre les biens à acheter ou louer via param property-catégory
add_filter('query_vars', function(array $params):array{
    $params[]= 'property_category';
    return $params;
});

add_action('pre_get_posts', function(WP_Query $query){
    if(is_admin() || !$query->is_main_query() || !is_post_type_archive('archive')){
        return;
    }
    $values=['buy','rent'];
    if(in_array(get_query_var('property_category'), $values)){
        $meta_query = $query->get('meta_query', []);
        $meta_query[]=[
            'key'=> 'property_category',
            'value' => get_query_var('property_category')
        ];
        $query->set('meta_query', $meta_query);
    };
});

//reeciture d'url
add_action('init', function(){
    add_rewrite_rule('property/(buy|rent)/?$', 'index.php?post_type=property&property_category=$matches[1]', 'top');
});
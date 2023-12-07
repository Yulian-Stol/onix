<?php

//------------------Register Custom Post Destionation----------------------
function destination_post_type()
{

    $labels = array(
        'name'                  => _x('Destination', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Destination', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Destination', 'text_domain'),
        'all_items'             => __('Destination', 'text_domain'),
        'add_new_item'          => __('add Destination', 'text_domain'),
        'add_new'               => __('add Destination', 'text_domain'),
    );
    $args = array(
        'label'                 => __('Destination', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'thumbnail', 'editor', 'excerpt', 'comments'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 4,
        'menu_icon'             => 'dashicons-images-alt2',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('destination', $args);
}
add_action('init', 'destination_post_type', 0);

register_taxonomy("destination-cat", array("destination"), array("hierarchical" => true, "label" => "Category", "singular_label" => "activity item", "rewrite" => true));

register_taxonomy(
    "destination-tag",
    array("destination"),
    array(
        "hierarchical" => false,
        "label" => "Tags",
        "singular_label" => "Tag",
        "rewrite" => true,
    )
);

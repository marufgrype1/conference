<?php
function conference_register_post_types() {

    register_post_type( 'ml_conference',
    // CPT Options
        array(
            'labels' => array(
                'name' => __('Conference'),
                'singular_name' => __('Conference'),
                'add_new' => __('Add new'),
                'add_new_item' => __('Add New Conference'),
                'edit_item' => __('Edit Conference'),
                'new_item' => __('New Conference'),
                'view_item' => __('View Conference'),
                'search_items' => __('Search Conference'),
                'not_found' => __('No Conference Found'),
                'not_found_in_trash' => __('No entries found in Trash'),
                'menu_name' => __('Conference'),
                'parent_item_colon' => '',

            ),
            'public' => true,
            'supports' => array( 'title','editor','thumbnail' ),
            'has_archive' => true,
            'rewrite' => array('slug' => 'conference-archive'),
            'menu_icon' => 'dashicons-awards',
        )
    );
}
add_action( 'init', 'conference_register_post_types' );
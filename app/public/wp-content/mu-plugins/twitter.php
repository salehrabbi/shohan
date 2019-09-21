<?php
add_filter( 'the_content', function( $content ) {
    return $content . '<p>Thank you for reading this post! zczc</p>';
} );


// Register Custom Post Type test
function create_test_cpt() {

	$labels = array(
		'name' => _x( 'tests', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'test', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'tests', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'test', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'test Archives', 'textdomain' ),
		'attributes' => __( 'test Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent test:', 'textdomain' ),
		'all_items' => __( 'All tests', 'textdomain' ),
		'add_new_item' => __( 'Add New test', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New test', 'textdomain' ),
		'edit_item' => __( 'Edit test', 'textdomain' ),
		'update_item' => __( 'Update test', 'textdomain' ),
		'view_item' => __( 'View test', 'textdomain' ),
		'view_items' => __( 'View tests', 'textdomain' ),
		'search_items' => __( 'Search test', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into test', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this test', 'textdomain' ),
		'items_list' => __( 'tests list', 'textdomain' ),
		'items_list_navigation' => __( 'tests list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter tests list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'test', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array(),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'test', $args );

}
add_action( 'init', 'create_test_cpt', 0 );
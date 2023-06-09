<?php
// Register Custom Post Type Service
function create_service_cpt() {

	$labels = array(
		'name' => _x( 'Services', 'Post Type General Name', 'my-theme' ),
		'singular_name' => _x( 'Service', 'Post Type Singular Name', 'my-theme' ),
		'menu_name' => _x( 'Services', 'Admin Menu text', 'my-theme' ),
		'name_admin_bar' => _x( 'Service', 'Add New on Toolbar', 'my-theme' ),
		'archives' => __( 'Service Archives', 'my-theme' ),
		'attributes' => __( 'Service Attributes', 'my-theme' ),
		'parent_item_colon' => __( 'Parent Service:', 'my-theme' ),
		'all_items' => __( 'All Services', 'my-theme' ),
		'add_new_item' => __( 'Add New Service', 'my-theme' ),
		'add_new' => __( 'Add New', 'my-theme' ),
		'new_item' => __( 'New Service', 'my-theme' ),
		'edit_item' => __( 'Edit Service', 'my-theme' ),
		'update_item' => __( 'Update Service', 'my-theme' ),
		'view_item' => __( 'View Service', 'my-theme' ),
		'view_items' => __( 'View Services', 'my-theme' ),
		'search_items' => __( 'Search Service', 'my-theme' ),
		'not_found' => __( 'Not found', 'my-theme' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'my-theme' ),
		'featured_image' => __( 'Featured Image', 'my-theme' ),
		'set_featured_image' => __( 'Set featured image', 'my-theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'my-theme' ),
		'use_featured_image' => __( 'Use as featured image', 'my-theme' ),
		'insert_into_item' => __( 'Insert into Service', 'my-theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'my-theme' ),
		'items_list' => __( 'Services list', 'my-theme' ),
		'items_list_navigation' => __( 'Services list navigation', 'my-theme' ),
		'filter_items_list' => __( 'Filter Services list', 'my-theme' ),
	);
	$args = array(
		'label' => __( 'Service', 'my-theme' ),
		'description' => __( 'Custom Post Type Services', 'my-theme' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-businessman',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'comments', 'post-formats'),
		'taxonomies' => array('category', 'post_tag'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'Blogs', $args );

}
add_action( 'init', 'create_service_cpt', 0 );




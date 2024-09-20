<?php

/**
 *Plugin Name: Hamy Vosugh CPT
 *Plugin URI: https://Hamyvosugh.net/user/Hamyvosugh
 *Description: Special Plugin for create Albums Post Type
 *Author: Hamy Vosugh
 *Author URI: https://Hamyvosugh.us
 *Version: 1.0.0
 *Text Domain: HamyVosugh
 *License: GPLv2+
*/

/*
 * Register custom post type for special use
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Albums post type
if ( ! function_exists( 'albums_register' ) ) {

	function albums_register() {

		$labels = array(
			'name'                  => _x( 'Albums', 'Post Type General Name', 'HamyVosugh' ),
			'singular_name'         => _x( 'Album', 'Post Type Singular Name', 'HamyVosugh' ),
			'menu_name'             => __( 'Albums', 'HamyVosugh' ),
			'name_admin_bar'        => __( 'Album', 'HamyVosugh' ),
			'archives'              => __( 'Album Archives', 'HamyVosugh' ),
			'attributes'            => __( 'Album Attributes', 'HamyVosugh' ),
			'parent_item_colon'     => __( 'Parent Item:', 'HamyVosugh' ),
			'all_items'             => __( 'All Albums', 'HamyVosugh' ),
			'add_new_item'          => __( 'Add New Album', 'HamyVosugh' ),
			'add_new'               => __( 'Add Album', 'HamyVosugh' ),
			'new_item'              => __( 'New Album', 'HamyVosugh' ),
			'edit_item'             => __( 'Edit Album', 'HamyVosugh' ),
			'update_item'           => __( 'Update Album', 'HamyVosugh' ),
			'view_item'             => __( 'View Album', 'HamyVosugh' ),
			'view_items'            => __( 'View Albums', 'HamyVosugh' ),
			'search_items'          => __( 'Search Album', 'HamyVosugh' ),
			'not_found'             => __( 'Not found', 'HamyVosugh' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'HamyVosugh' ),
			'featured_image'        => __( 'Featured Image', 'HamyVosugh' ),
			'set_featured_image'    => __( 'Set featured image', 'HamyVosugh' ),
			'remove_featured_image' => __( 'Remove featured image', 'HamyVosugh' ),
			'use_featured_image'    => __( 'Use as featured image', 'HamyVosugh' ),
			'insert_into_item'      => __( 'Insert into album', 'HamyVosugh' ),
			'uploaded_to_this_item' => __( 'Uploaded to this album', 'HamyVosugh' ),
			'items_list'            => __( 'Albums list', 'HamyVosugh' ),
			'items_list_navigation' => __( 'Albums list navigation', 'HamyVosugh' ),
			'filter_items_list'     => __( 'Filter albums list', 'HamyVosugh' ),
		);
		$args = array(
			'label'                 => __( 'Album', 'HamyVosugh' ),
			'description'           => __( 'Add albums here', 'HamyVosugh' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 6,
			'menu_icon'             => 'dashicons-images-alt2',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => false,		
			'exclude_from_search'   => true,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
		);
		register_post_type( 'albums', $args );
	}
}
add_action( 'init', 'albums_register' );

// Albums category
if ( ! function_exists( 'albums_taxonomies' ) ) {

	function albums_taxonomies() {
	    $labels = array(
	        'name'              => _x( 'Categories', 'taxonomy general name', 'HamyVosugh' ),
	        'singular_name'     => _x( 'Category', 'taxonomy singular name', 'HamyVosugh' ),
	        'search_items'      => __( 'Search Categories', 'HamyVosugh' ),
	        'all_items'         => __( 'All Categories', 'HamyVosugh' ),
	        'parent_item'       => __( 'Parent Category', 'HamyVosugh' ),
	        'parent_item_colon' => __( 'Parent Category:', 'HamyVosugh' ),
	        'edit_item'         => __( 'Edit Category', 'HamyVosugh' ),
	        'update_item'       => __( 'Update Category', 'HamyVosugh' ),
	        'add_new_item'      => __( 'Add New Category', 'HamyVosugh' ),
	        'new_item_name'     => __( 'New Category Name', 'HamyVosugh' ),
	        'menu_name'         => __( 'Categories', 'HamyVosugh' ),
	    );

	    $args = array(
	        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
	        'labels'            => $labels,
	        'show_ui'           => true,
	        'show_admin_column' => true,
	        'query_var'         => true,
	        'rewrite'           => array( 'slug' => 'categories' ),
	    );

	    register_taxonomy( 'albums_categories', array( 'albums' ), $args );
	}
}
add_action( 'init', 'albums_taxonomies', 0 );
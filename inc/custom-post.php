<?php
/**
@todo Custom post types: Employment,Education,Portfolio,testimonial,Section
@todo Sections: Welcome, Intro, Milestone,
 */


//Section

add_action( 'init', 'whoami_register_section' );
function whoami_register_section() {
	$labels = array(
		'name'               => _x( 'Sections', 'post type general name', 'whoami' ),
		'singular_name'      => _x( 'Section', 'post type singular name', 'whoami' ),
		'menu_name'          => _x( 'Sections', 'admin menu', 'whoami' ),
		'name_admin_bar'     => _x( 'Section', 'add new on admin bar', 'whoami' ),
		'add_new'            => _x( 'Add New', 'book', 'whoami' ),
		'add_new_item'       => __( 'Add New Section', 'whoami' ),
		'new_item'           => __( 'New Section', 'whoami' ),
		'edit_item'          => __( 'Edit Section', 'whoami' ),
		'view_item'          => __( 'View Section', 'whoami' ),
		'all_items'          => __( 'All Sections', 'whoami' ),
		'search_items'       => __( 'Search Sections', 'whoami' ),
		'parent_item_colon'  => __( 'Parent Sections:', 'whoami' ),
		'not_found'          => __( 'No sections found.', 'whoami' ),
		'not_found_in_trash' => __( 'No sections found in Trash.', 'whoami' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'whoami' ),
		'public'             => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'capability_type'    => 'post',
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail')
	);

	register_post_type( 'whoami_section', $args );
}


//Employment

add_action( 'init', 'whoami_register_employment' );
function whoami_register_employment() {
	$labels = array(
		'name'               => _x( 'J. Histories', 'post type general name', 'whoami' ),
		'singular_name'      => _x( 'Section', 'post type singular name', 'whoami' ),
		'menu_name'          => _x( 'J. Histories', 'admin menu', 'whoami' ),
		'name_admin_bar'     => _x( 'Section', 'add new on admin bar', 'whoami' ),
		'add_new'            => _x( 'Add New', 'book', 'whoami' ),
		'add_new_item'       => __( 'Add New position', 'whoami' ),
		'new_item'           => __( 'New Position', 'whoami' ),
		'edit_item'          => __( 'Edit Position', 'whoami' ),
		'view_item'          => __( 'View Position', 'whoami' ),
		'all_items'          => __( 'All J. Histories', 'whoami' ),
		'search_items'       => __( 'Search J. History', 'whoami' ),
		'parent_item_colon'  => __( 'Parent J. Histories:', 'whoami' ),
		'not_found'          => __( 'No history found.', 'whoami' ),
		'not_found_in_trash' => __( 'No history found in Trash.', 'whoami' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'whoami' ),
		'public'             => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'capability_type'    => 'post',
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail')
	);

	register_post_type( 'whoami_employment', $args );
}


//Education

add_action( 'init', 'whoami_register_education' );
function whoami_register_education() {
	$labels = array(
		'name'               => _x( 'Educations', 'post type general name', 'whoami' ),
		'singular_name'      => _x( 'Education', 'post type singular name', 'whoami' ),
		'menu_name'          => _x( 'Educations', 'admin menu', 'whoami' ),
		'name_admin_bar'     => _x( 'Educations', 'add new on admin bar', 'whoami' ),
		'add_new'            => _x( 'Add Education', 'book', 'whoami' ),
		'add_new_item'       => __( 'Add New education', 'whoami' ),
		'all_items'          => __( 'Educations', 'whoami' ),
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'whoami' ),
		'public'             => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'capability_type'    => 'post',
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail')
	);

	register_post_type( 'whoami_education', $args );
}


//Portfolio

add_action( 'init', 'whoami_register_portfolio' );
function whoami_register_portfolio() {
	$labels = array(
		'name'               => _x( 'Portfolios', 'post type general name', 'whoami' ),
		'singular_name'      => _x( 'Portfolio', 'post type singular name', 'whoami' ),
		'menu_name'          => _x( 'Portfolios', 'admin menu', 'whoami' ),
		'name_admin_bar'     => _x( 'Portfolios', 'add new on admin bar', 'whoami' ),
		'add_new'            => _x( 'Add portfolio', 'book', 'whoami' ),
		'add_new_item'       => __( 'Add New portfolio', 'whoami' ),
		'all_items'          => __( 'Portfolios', 'whoami' ),
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'whoami' ),
		'public'             => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'capability_type'    => 'post',
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail')
	);

	register_post_type( 'whoami_portfolio', $args );
}


//Portfolio

add_action( 'init', 'whoami_register_testimonial' );
function whoami_register_testimonial() {
	$labels = array(
		'name'               => _x( 'Testimonials', 'post type general name', 'whoami' ),
		'singular_name'      => _x( 'Testimonial', 'post type singular name', 'whoami' ),
		'menu_name'          => _x( 'Testimonials', 'admin menu', 'whoami' ),
		'name_admin_bar'     => _x( 'Testimonials', 'add new on admin bar', 'whoami' ),
		'add_new'            => _x( 'Add testimonial', 'book', 'whoami' ),
		'add_new_item'       => __( 'Add New portfolio', 'whoami' ),
		'all_items'          => __( 'Testimonials', 'whoami' ),
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'whoami' ),
		'public'             => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'capability_type'    => 'post',
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail')
	);

	register_post_type( 'whoami_testimonial', $args );
}
<?php

/**
 * Registers the `chapter` taxonomy,
 * for use with 'book'.
 */
function chapter_init() {
	register_taxonomy( 'chapter', array( 'book' ), array(
		'hierarchical'      => false,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => true,
		'capabilities'      => array(
			'manage_terms'  => 'edit_posts',
			'edit_terms'    => 'edit_posts',
			'delete_terms'  => 'edit_posts',
			'assign_terms'  => 'edit_posts',
		),
		'labels'            => array(
			'name'                       => __( 'Chapters', 'my-plugin' ),
			'singular_name'              => _x( 'Chapter', 'taxonomy general name', 'my-plugin' ),
			'search_items'               => __( 'Search Chapters', 'my-plugin' ),
			'popular_items'              => __( 'Popular Chapters', 'my-plugin' ),
			'all_items'                  => __( 'All Chapters', 'my-plugin' ),
			'parent_item'                => __( 'Parent Chapter', 'my-plugin' ),
			'parent_item_colon'          => __( 'Parent Chapter:', 'my-plugin' ),
			'edit_item'                  => __( 'Edit Chapter', 'my-plugin' ),
			'update_item'                => __( 'Update Chapter', 'my-plugin' ),
			'view_item'                  => __( 'View Chapter', 'my-plugin' ),
			'add_new_item'               => __( 'Add New Chapter', 'my-plugin' ),
			'new_item_name'              => __( 'New Chapter', 'my-plugin' ),
			'separate_items_with_commas' => __( 'Separate chapters with commas', 'my-plugin' ),
			'add_or_remove_items'        => __( 'Add or remove chapters', 'my-plugin' ),
			'choose_from_most_used'      => __( 'Choose from the most used chapters', 'my-plugin' ),
			'not_found'                  => __( 'No chapters found.', 'my-plugin' ),
			'no_terms'                   => __( 'No chapters', 'my-plugin' ),
			'menu_name'                  => __( 'Chapters', 'my-plugin' ),
			'items_list_navigation'      => __( 'Chapters list navigation', 'my-plugin' ),
			'items_list'                 => __( 'Chapters list', 'my-plugin' ),
			'most_used'                  => _x( 'Most Used', 'chapter', 'my-plugin' ),
			'back_to_items'              => __( '&larr; Back to Chapters', 'my-plugin' ),
		),
		'show_in_rest'      => true,
		'rest_base'         => 'chapter',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	) );

}
add_action( 'init', 'chapter_init' );

/**
 * Sets the post updated messages for the `chapter` taxonomy.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `chapter` taxonomy.
 */
function chapter_updated_messages( $messages ) {

	$messages['chapter'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => __( 'Chapter added.', 'my-plugin' ),
		2 => __( 'Chapter deleted.', 'my-plugin' ),
		3 => __( 'Chapter updated.', 'my-plugin' ),
		4 => __( 'Chapter not added.', 'my-plugin' ),
		5 => __( 'Chapter not updated.', 'my-plugin' ),
		6 => __( 'Chapters deleted.', 'my-plugin' ),
	);

	return $messages;
}
add_filter( 'term_updated_messages', 'chapter_updated_messages' );

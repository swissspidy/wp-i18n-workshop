<?php

/**
 * Registers the `book` post type.
 */
function book_init() {
	register_post_type(
		'book',
		array(
			'labels'                => array(
				'name'                  => __( 'Books', 'my-plugin' ),
				'singular_name'         => __( 'Book', 'my-plugin' ),
				'all_items'             => __( 'All Books', 'my-plugin' ),
				'archives'              => __( 'Book Archives', 'my-plugin' ),
				'attributes'            => __( 'Book Attributes', 'my-plugin' ),
				'insert_into_item'      => __( 'Insert into book', 'my-plugin' ),
				'uploaded_to_this_item' => __( 'Uploaded to this book', 'my-plugin' ),
				'featured_image'        => _x( 'Featured Image', 'book', 'my-plugin' ),
				'set_featured_image'    => _x( 'Set featured image', 'book', 'my-plugin' ),
				'remove_featured_image' => _x( 'Remove featured image', 'book', 'my-plugin' ),
				'use_featured_image'    => _x( 'Use as featured image', 'book', 'my-plugin' ),
				'filter_items_list'     => __( 'Filter books list', 'my-plugin' ),
				'items_list_navigation' => __( 'Books list navigation', 'my-plugin' ),
				'items_list'            => __( 'Books list', 'my-plugin' ),
				'new_item'              => __( 'New Book', 'my-plugin' ),
				'add_new'               => __( 'Add New', 'my-plugin' ),
				'add_new_item'          => __( 'Add New Book', 'my-plugin' ),
				'edit_item'             => __( 'Edit Book', 'my-plugin' ),
				'view_item'             => __( 'View Book', 'my-plugin' ),
				'view_items'            => __( 'View Books', 'my-plugin' ),
				'search_items'          => __( 'Search books', 'my-plugin' ),
				'not_found'             => __( 'No books found', 'my-plugin' ),
				'not_found_in_trash'    => __( 'No books found in trash', 'my-plugin' ),
				'parent_item_colon'     => __( 'Parent Book:', 'my-plugin' ),
				'menu_name'             => __( 'Books', 'my-plugin' ),
			),
			'public'                => true,
			'hierarchical'          => false,
			'show_ui'               => true,
			'show_in_nav_menus'     => true,
			'supports'              => array( 'title', 'editor' ),
			'has_archive'           => true,
			'rewrite'               => true,
			'query_var'             => true,
			'menu_icon'             => 'dashicons-admin-post',
			'show_in_rest'          => true,
			'rest_base'             => 'book',
			'rest_controller_class' => 'WP_REST_Posts_Controller',
		)
	);

}
add_action( 'init', 'book_init' );

/**
 * Sets the post updated messages for the `book` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `book` post type.
 */
function book_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['book'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'Book updated. <a target="_blank" href="%s">View book</a>', 'my-plugin' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'my-plugin' ),
		3  => __( 'Custom field deleted.', 'my-plugin' ),
		4  => __( 'Book updated.', 'my-plugin' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Book restored to revision from %s', 'my-plugin' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'Book published. <a href="%s">View book</a>', 'my-plugin' ), esc_url( $permalink ) ),
		7  => __( 'Book saved.', 'my-plugin' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'Book submitted. <a target="_blank" href="%s">Preview book</a>', 'my-plugin' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9  => sprintf(
			/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
			__( 'Book scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview book</a>', 'my-plugin' ),
			date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ),
			esc_url( $permalink )
		),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'Book draft updated. <a target="_blank" href="%s">Preview book</a>', 'my-plugin' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'book_updated_messages' );

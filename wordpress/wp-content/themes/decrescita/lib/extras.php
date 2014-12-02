<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'decrescita') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);

function post_type_persone() {

	$labels = array(
		'name'                => _x( 'Persone', 'Post Type General Name', 'decrescita' ),
		'singular_name'       => _x( 'Persona', 'Post Type Singular Name', 'decrescita' ),
		'menu_name'           => __( 'Persone', 'decrescita' ),
		'parent_item_colon'   => __( 'Parent Item:', 'decrescita' ),
		'all_items'           => __( 'Tutte le persone', 'decrescita' ),
		'view_item'           => __( 'Visualizza persona', 'decrescita' ),
		'add_new_item'        => __( 'Aggiungi persona', 'decrescita' ),
		'add_new'             => __( 'Aggiungi nuova', 'decrescita' ),
		'edit_item'           => __( 'Modifica persona', 'decrescita' ),
		'update_item'         => __( 'Aggiorna persona', 'decrescita' ),
		'search_items'        => __( 'Cerca persona', 'decrescita' ),
		'not_found'           => __( 'Non trovato', 'decrescita' ),
		'not_found_in_trash'  => __( 'Non trovato nel cestino', 'decrescita' ),
	);
	$args = array(
		'label'               => __( 'persone_cpt', 'decrescita' ),
		'description'         => __( 'Persone della decrescita', 'decrescita' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'trackbacks', 'revisions', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 10,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'persone_cpt', $args );

}

add_action( 'init', 'post_type_persone', 0 );

function tipo_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Tipi di contenuto', 'Taxonomy General Name', 'decrescita' ),
		'singular_name'              => _x( 'Tipo di contenuto', 'Taxonomy Singular Name', 'decrescita' ),
		'menu_name'                  => __( 'Tipo di contenuto', 'decrescita' ),
		'all_items'                  => __( 'Tutti i tipi', 'decrescita' ),
		'parent_item'                => __( 'Parent Item', 'decrescita' ),
		'parent_item_colon'          => __( 'Parent Item:', 'decrescita' ),
		'new_item_name'              => __( 'Nuovo tipo', 'decrescita' ),
		'add_new_item'               => __( 'Aggiungi tipo', 'decrescita' ),
		'edit_item'                  => __( 'Modifica tipo', 'decrescita' ),
		'update_item'                => __( 'Aggiorna tipo', 'decrescita' ),
		'separate_items_with_commas' => __( 'Tipi separati da virgola', 'decrescita' ),
		'search_items'               => __( 'Cerca tipi', 'decrescita' ),
		'add_or_remove_items'        => __( 'Aggiungi o elimina tipi', 'decrescita' ),
		'choose_from_most_used'      => __( 'Scegli tra i più utilizzati', 'decrescita' ),
		'not_found'                  => __( 'Non trovato', 'decrescita' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'tipo_contenuto', array( 'post' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'tipo_taxonomy', 0 );
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

function temi_taxonomy() {
	$labels = array(
		'name'                       => _x( 'Temi', 'Taxonomy General Name', 'decrescita' ),
		'singular_name'              => _x( 'Tema', 'Taxonomy Singular Name', 'decrescita' ),
		'menu_name'                  => __( 'Temi', 'decrescita' ),
		'all_items'                  => __( 'Tutti i temi', 'decrescita' ),
		'parent_item'                => __( 'Parent Item', 'decrescita' ),
		'parent_item_colon'          => __( 'Parent Item:', 'decrescita' ),
		'new_item_name'              => __( 'Nuovo tema', 'decrescita' ),
		'add_new_item'               => __( 'Aggiungi tema', 'decrescita' ),
		'edit_item'                  => __( 'Modifica tema', 'decrescita' ),
		'update_item'                => __( 'Aggiorna tema', 'decrescita' ),
		'separate_items_with_commas' => __( 'Temi separati da virgola', 'decrescita' ),
		'search_items'               => __( 'Cerca temi', 'decrescita' ),
		'add_or_remove_items'        => __( 'Aggiungi o elimina temi', 'decrescita' ),
		'choose_from_most_used'      => __( 'Scegli tra i più utilizzati', 'decrescita' ),
		'not_found'                  => __( 'Non trovato', 'decrescita' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true
	);
	register_taxonomy('temi', array('post'), $args);
}
add_action('init', 'temi_taxonomy', 0);

function persone_taxonomy() {
	$labels = array(
		'name'                       => _x( 'Persone', 'Taxonomy General Name', 'decrescita' ),
		'singular_name'              => _x( 'Persona', 'Taxonomy Singular Name', 'decrescita' ),
		'menu_name'                  => __( 'Persone', 'decrescita' ),
		'all_items'                  => __( 'Tutte le persone', 'decrescita' ),
		'parent_item'                => __( 'Parent Item', 'decrescita' ),
		'parent_item_colon'          => __( 'Parent Item:', 'decrescita' ),
		'new_item_name'              => __( 'Nuova persona', 'decrescita' ),
		'add_new_item'               => __( 'Aggiungi persona', 'decrescita' ),
		'edit_item'                  => __( 'Modifica persona', 'decrescita' ),
		'update_item'                => __( 'Aggiorna persona', 'decrescita' ),
		'separate_items_with_commas' => __( 'Persone separate da virgola', 'decrescita' ),
		'search_items'               => __( 'Cerca persona', 'decrescita' ),
		'add_or_remove_items'        => __( 'Aggiungi o elimina persone', 'decrescita' ),
		'choose_from_most_used'      => __( 'Scegli tra i più utilizzati', 'decrescita' ),
		'not_found'                  => __( 'Non trovato', 'decrescita' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true
	);
	register_taxonomy('persone', array('post'), $args );
}
add_action('init', 'persone_taxonomy', 0);


<?php
/**
 * Roots initial setup and constants
 */
function roots_setup() {
  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/roots-translations
  load_theme_textdomain('decrescita', get_template_directory() . '/lang');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus(array(
    'primary_navigation' => __('Primary Navigation', 'decrescita')
  ));

  // Add post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Add post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio'));

  // Add HTML5 markup for captions
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', array('caption', 'comment-form', 'comment-list'));

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style('/assets/css/editor-style.css');

  add_image_size('1170x365', 1170, 365, true);
  add_image_size('750x350', 750, 350, true);
  add_image_size('360x350', 360, 350, true);
  add_image_size('360x200', 360, 200, true);
  add_image_size('280x180', 280, 180, true);
}
add_action('after_setup_theme', 'roots_setup');

/**
 * Register sidebars
 */
function roots_widgets_init() {
  register_sidebar(array(
    'name'          => __('Sidebar home', 'decrescita'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar(array(
    'name'          => __('Sidebar', 'decrescita'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar(array(
    'name'          => __('Testo Footer', 'decrescita'),
    'id'            => 'text-footer',
    'before_widget' => '<div class="col-md-6"><section class="widget %1$s %2$s">',
    'after_widget'  => '</section></div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar(array(
    'name'          => __('Widget Footer', 'decrescita'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<div class="col-md-3"><section class="widget %1$s %2$s">',
    'after_widget'  => '</section></div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
}
add_action('widgets_init', 'roots_widgets_init');

/**
* activate custom taxonomies
*/
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


define('ACF_LITE', true);
add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path( $path ) {
    $path = get_stylesheet_directory() . '/acf/';
    return $path;
}
add_filter('acf/settings/dir', 'my_acf_settings_dir'); 
function my_acf_settings_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/acf/';
    return $dir;
}
add_filter('acf/settings/show_admin', '__return_false');
include_once( get_stylesheet_directory() . '/acf/acf.php' );
if(function_exists("register_field_group"))
{
  $cat_eventi = get_category_by_slug('eventi'); 
  register_field_group(array (
    'id' => 'acf_data-e-luogo-eventi',
    'title' => 'Data e luogo eventi',
    'fields' => array (
      array (
        'key' => 'field_548ef5e65996c',
        'label' => 'Quando',
        'name' => 'quando',
        'type' => 'text',
        'instructions' => 'inserire un testo per indicare quando avverrà l\'evento',
        'required' => 1,
        'default_value' => '',
        'placeholder' => 'per esempio: dal 15 al 18 giugno 2014',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_548f1b4c2a64c',
        'label' => 'Data',
        'name' => 'data',
        'type' => 'date_picker',
        'instructions' => 'inserire la data di inizio dell\'evento',
        'required' => 1,
        'date_format' => 'yymmdd',
        'display_format' => 'dd/mm/yy',
        'first_day' => 1,
      ),
      array (
        'key' => 'field_548ef60b5996d',
        'label' => 'Luogo',
        'name' => 'luogo',
        'type' => 'google_map',
        'instructions' => 'luogo dell\'evento',
        'center_lat' => '41.2924601',
        'center_lng' => '12.5736108',
        'zoom' => 6,
        'height' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
          'order_no' => 0,
          'group_no' => 0,
        ),
        array (
          'param' => 'post_category',
          'operator' => '==',
          'value' => $cat_eventi->term_id,
          'order_no' => 1,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
  register_field_group(array (
    'id' => 'acf_home-in-evidenza',
    'title' => 'Home - In evidenza',
    'fields' => array (
      array (
        'key' => 'field_548f1be90157c',
        'label' => 'In evidenza',
        'name' => 'in_evidenza',
        'type' => 'true_false',
        'instructions' => 'Mostrare questo articolo nella sezione "in evidenza"? (max 3 articoli)',
        'message' => '',
        'default_value' => 0,
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'side',
      'layout' => 'default',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
  register_field_group(array (
    'id' => 'acf_note',
    'title' => 'Note',
    'fields' => array (
      array (
        'key' => 'field_54919dd4126f6',
        'label' => 'Note',
        'name' => 'note',
        'type' => 'wysiwyg',
        'instructions' => 'Inserisci le note per questo contenuto, appariranno nella sidebar di destra.',
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'yes',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
          'order_no' => 0,
          'group_no' => 1,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}


function add_post_formats() {
    add_theme_support('post-formats', array( 'gallery', 'quote', 'video'));
}
add_action( 'after_setup_theme', 'add_post_formats', 20 );
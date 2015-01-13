<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more() {
  return ' <a href="' . get_permalink() . '">&rarr;</a>';
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

function page_navi($before = '', $after = '') {
  global $wpdb, $wp_query;
  $request = $wp_query->request;
  $posts_per_page = intval(get_query_var('posts_per_page'));
  $paged = intval(get_query_var('paged'));
  $numposts = $wp_query->found_posts;
  $max_page = $wp_query->max_num_pages;
  if ( $numposts <= $posts_per_page ) { return; }
  if(empty($paged) || $paged == 0) {
    $paged = 1;
  }
  $pages_to_show = 7;
  $pages_to_show_minus_1 = $pages_to_show-1;
  $half_page_start = floor($pages_to_show_minus_1/2);
  $half_page_end = ceil($pages_to_show_minus_1/2);
  $start_page = $paged - $half_page_start;
  if($start_page <= 0) {
    $start_page = 1;
  }
  $end_page = $paged + $half_page_end;
  if(($end_page - $start_page) != $pages_to_show_minus_1) {
    $end_page = $start_page + $pages_to_show_minus_1;
  }
  if($end_page > $max_page) {
    $start_page = $max_page - $pages_to_show_minus_1;
    $end_page = $max_page;
  }
  if($start_page <= 0) {
    $start_page = 1;
  }
  echo $before.'<ul class="pagination">'."";
  if ($paged > 1) {
    $first_page_text = "<span class='glyphicon glyphicon-home'></span>";
    echo '<li class="prev"><a href="'.get_pagenum_link().'" title="First">'.$first_page_text.'</a></li>';
  }
  $prevposts = get_previous_posts_link('&laquo;');
  if($prevposts) { echo '<li>' . $prevposts  . '</li>'; }
  else { echo '<li class="disabled"><a href="#">&laquo;</a></li>'; }
  for($i = $start_page; $i  <= $end_page; $i++) {
    if($i == $paged) {
      echo '<li class="active"><a href="#">'.$i.'</a></li>';
    } else {
      echo '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
    }
  }
  echo '<li class="">';
  next_posts_link('&raquo;');
  echo '</li>';
  if ($end_page < $max_page) {
    $last_page_text = "»";
    echo '<li class="next"><a href="'.get_pagenum_link($max_page).'" title="Last">'.$last_page_text.'</a></li>';
  }
  echo '</ul>'.$after."";
}

function attachments_decrescita( $attachments )
{
  $args = array(

    // title of the meta box (string)
    'label'         => 'Allegati',

    // all post types to utilize (string|array)
    'post_type'     => array( 'post', 'page' ),

    // allowed file type(s) (array) (image|video|text|audio|application)
    'filetype'      => null,  // no filetype limit

    // text for 'Attach' button in meta box (string)
    'button_text'   => __( 'Allega', 'decrescita' ),

    // text for modal 'Attach' button (string)
    'modal_text'    => __( 'Allega', 'decrescita' ),

    /**
     * Fields for the instance are stored in an array. Each field consists of
     * an array with three keys: name, type, label.
     *
     * name  - (string) The field name used. No special characters.
     * type  - (string) The registered field type.
     *                  Fields available: text, textarea
     * label - (string) The label displayed for the field.
     */

    'fields'        => array(
      array(
        'name'  => 'title',                          // unique field name
        'type'  => 'text',                           // registered field type
        'label' => __( 'Titolo', 'decrescita' ),     // label to display
      ),
    ),

  );

  $attachments->register('attachments', $args);
}

add_action('attachments_register', 'attachments_decrescita');



add_filter( 'get_comment_date', 'new_comment_date_format' ); 
function new_comment_date_format( $d ) {
    $d = date("j/n/Y"); 
    return $d;
}

function disable_comment_url($fields) { 
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','disable_comment_url');
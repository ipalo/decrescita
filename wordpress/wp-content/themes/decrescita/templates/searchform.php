<?php
	$args = array();
	$page_ricerca = get_page_by_path('ricerca');
	$args['form'] = array('action' => get_permalink($page_ricerca->ID));

	$args['wp_query'] = array('post_type' => 'post',
                            'posts_per_page' => 5,
                            'order' => 'DESC',
                            'orderby' => 'date');

	$args['fields'][] = array('type' => 'search',
                            'label' => 'Cerca',
                            'placeholder' => 'cosa stai cercando?',
                            'class' => 'form-control');

	$args['fields'][] = array('type' => 'submit',
	                        'value' => 'Cerca',
	                        'class' => '');


	$search = new WP_Advanced_Search($args);
	$search->the_form();
?>
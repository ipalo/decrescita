<?php
/*
Template Name: Ricerca avanzata
*/
define('WPAS_DEBUG', false);
?>

<div id="advanced-search-form" class="row">
	<div class="col-md-12">
		<h1><?php the_title(); ?></h1>

		<?php 

			$args = array();

			$args['wp_query'] = array('post_type' => 'post',
		                            'posts_per_page' => 5,
		                            'order' => 'DESC',
		                            'orderby' => 'date');

			$args['fields'][] = array('type' => 'search',
		                            'label' => 'Cerca',
		                            'placeholder' => 'cosa stai cercando?',
		                            'class' => 'form-control');				

			$args['fields'][] = array('type' => 'taxonomy',
		                            'label' => 'Categoria',
		                            'taxonomy' => 'category',
		                            'format' => 'multi-select',
		                            'operator' => 'AND',
		                            'class' => 'form-control');

			$args['fields'][] = array('type' => 'taxonomy',
		                            'label' => 'Tema',
		                            'taxonomy' => 'temi',
		                            'format' => 'multi-select',
		                            'operator' => 'AND',
		                        	'class' => 'form-control');

			$args['fields'][] = array('type' => 'taxonomy',
		                            'label' => 'Tags',
		                            'taxonomy' => 'post_tag',
		                            'format' => 'multi-select',
		                            'operator' => 'IN',
		                        	'class' => 'form-control');

			$args['fields'][] = array('type' => 'taxonomy',
		                            'label' => 'Persone',
		                            'taxonomy' => 'persone',
		                            'format' => 'multi-select',
		                            'operator' => 'IN',
		                        	'class' => 'form-control');

			$args['fields'][] = array('type' => 'submit',
		                            'value' => 'Cerca');

			$search = new WP_Advanced_Search($args);

			$search->the_form();

			$temp_query = $wp_query;
			$wp_query = $search->query();

			if(!empty($wp_query->query['s']) OR !empty($wp_query->query['tax_query'])) :
		?>
	</div>
</div>
	
<div class="row">
	<div class="page-header col-md-12">
		<?php if(have_posts()) : ?>
			<h1><?php printf(__('%s risultati', 'decrescita'), $wp_query->found_posts); ?></h1>
		<?php else: ?>
			<h1><?php _e('Nessun contenuto trovato.', 'decrescita'); ?></h1>
		<?php endif; ?>
	</div>
</div>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content'); ?>
<?php endwhile; ?>


<?php if ($wp_query->max_num_pages > 1) : ?>
  <?php page_navi(); ?>
<?php endif; ?>

<?php 	
	endif;

	$wp_query = $temp_query;
	wp_reset_query();
?>
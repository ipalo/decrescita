<div class="page-header">
	<div class="row" id="sponsored">
		<?php $sticky = get_option( 'sticky_posts' );
		rsort( $sticky );
		$sticky = array_slice($sticky, 0, 2);
		$sticky = new WP_Query(array('post__in'  => $sticky, 'ignore_sticky_posts' => 1));
		while ( $sticky->have_posts() ) : $sticky->the_post(); ?>
			<div class="col-md-<?php echo $sticky->current_post==0 ? 8 : 4 ?>">
				<div class="description">
					<?php the_category( ' ' ); ?>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				</div>
				<?php the_post_thumbnail($sticky->current_post==0 ? '750x350' : '360x350'); ?>
			</div>
		<?php endwhile;
		wp_reset_query(); ?>
	</div>
</div>

<div class="row" class="articles">

	<?php global $query_string; query_posts($query_string.'&ignore_sticky_posts=1'); ?>
	
	<div class="col-md-6">
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('templates/content'); ?>
		<?php endwhile; ?>
	</div>

	<div id="in_evidenza_home" class="col-md-4">		
		<?php $eventi = new WP_Query(array(
			'ignore_sticky_posts' => true,
			'category_name' => 'eventi',
			'posts_per_page' => '2',
			'meta_key' => 'data',
			'orderby' => 'meta_value',
			'order' => 'ASC',
			'meta_query' => array(
				array(
					'key' => 'data',
					'value' => date('Y-m-d'),
					'compare' => '>=',
					'type' => 'DATE'
				)
			)
		)); ?>
		<?php if($eventi->have_posts()) : ?>
			<article <?php post_class(); ?> id="eventi-home">
				<h4>I prossimi eventi</h4>
				<ul class="list-unstyled">
				<?php while ( $eventi->have_posts() ) : $eventi->the_post(); ?>
					<li>
						<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
						<p class="time quando"><?php the_field('quando'); ?></p>
						<?php the_excerpt(); ?>
					</li>
				<?php endwhile;
				wp_reset_query();
				wp_reset_postdata(); ?>
				</ul>
			</article>
		<?php endif; ?>

		<?php $in_evidenza = new WP_Query(array(
			'ignore_sticky_posts' => true,
			'posts_per_page' => '3',
			'meta_query' => array(
				array(
					'key' => 'in_evidenza',
					'value' => 1,
					'compare' => '='
				)
			)
		)); ?>
		<?php while($in_evidenza->have_posts()) : $in_evidenza->the_post(); ?>
			<article <?php post_class('in-evidenza-home'); ?>>
				<?php if(has_post_thumbnail()) : ?>
					<h4><a href="<?php the_permalink(); ?>"><mark><?php the_title(); ?></mark></a></h4>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('360x200'); ?></a>
				<?php else : ?>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<?php the_excerpt(); ?>
				<?php endif; ?>
			</article>
		<?php endwhile;
		wp_reset_query();
		wp_reset_postdata(); ?>
	</div>

	<div class="col-md-2">
		<?php $glossario = get_tags();
			shuffle($glossario);
			if(!empty($glossario) && !is_wp_error($glossario)) : ?>
			<div id="glossario">
				<h4>Glossario</h4>
				<a href="<?php echo get_tag_link( $glossario[0]->term_id ); ?>" title="<?php sprintf( __( 'View all post filed under %s', 'decrescita' ), $glossario[0]->name ); ?>"><?php echo $glossario[0]->name; ?></a>
				<p><?php $tag_description = get_extended($glossario[0]->description); echo do_shortcode($tag_description['main']); ?></p>
			</div>
		<?php endif; ?>
		<?php $persona = get_terms('persone');
			shuffle($persona);
			if(!empty($persona) && !is_wp_error($persona)) : ?>
			<div id="persone">
				<h4>Persone</h4>
				<a href="<?php echo get_term_link( $persona[0] ); ?>" title="<?php sprintf( __( 'View all post filed under %s', 'decrescita' ), $persona[0]->name ); ?>"><?php echo $persona[0]->name; ?></a>
				<p><?php $term_description = get_extended($persona[0]->description); echo do_shortcode($term_description['main']); ?></p>
			</div>
		<?php endif; ?>
	</div>
</div>

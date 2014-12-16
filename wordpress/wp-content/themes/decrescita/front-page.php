<div class="page-header">
	<div class="row" id="sponsored">
		<div class="col-md-8">
			<div class="description">
				<a class="label" href="#">ARTICOLI</a>
				<h4>
					<a href="#">Maschile plurale, riunione nazionale a Roma</a>
				</h4>
				<p class="author">di Marco Deriu</p>
			</div>
			<img src="http://placehold.it/750x350">
		</div>
		<div class="col-md-4">
			<div class="description">
				<a class="label" href="#">PUBBLICAZIONI</a>
				<h4>
					<a href="#">Le vie di fuga dall’annunciata apocalisse, viste da Bonaiuti</a>
				</h4>
				<p class="author">di Marco Deriu</p>
			</div>
			<img src="http://placehold.it/360x350">
		</div>
	</div>
</div>

<div class="row" class="articles">
	<div class="col-md-6">
		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class(); ?>>
				<header>
					<?php get_template_part('templates/entry-categories'); ?>
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				</header>
				<div class="entry-content">
					<?php the_excerpt(); ?>
				</div>
				<footer>
					<?php get_template_part('templates/entry-footer'); ?>
				</footer>
			</article>
		<?php endwhile; ?>
	</div>
	<div class="col-md-4">		
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
				<h3>I prossimi eventi</h3>
				<ul class="list-unstyled">
				<?php while ( $eventi->have_posts() ) : $eventi->the_post(); ?>
					<li>
						<em class="time quando"><?php the_field('quando'); ?></em>
						<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
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
		<?php while ( $in_evidenza->have_posts() ) : $in_evidenza->the_post(); ?>
			<article <?php post_class('in-evidenza-home'); ?>>
				<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?>
			</article>
		<?php endwhile;
		wp_reset_query();
		wp_reset_postdata(); ?>
		<article <?php post_class('in-evidenza-home'); ?>>
			<h3>Articolo di esempio con l'immagine</h3>
			<img src="http://placehold.it/360x240" />
		</article>
	</div>

	<div class="col-md-2">
		<?php $glossario = get_tags('number=1');
			if(!empty($glossario) && !is_wp_error($glossario)) : ?>
			<div id="glossario">
				<h4>Glossario</h4>
				<?php foreach ($glossario as $tag) : ?>
					<a href="<?php echo get_tag_link( $tag->term_id ); ?>" title="<?php sprintf( __( 'View all post filed under %s', 'decrescita' ), $tag->name ); ?>"><?php echo $tag->name; ?></a>
					<p><?php echo $tag->description; ?></p>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
		<?php $persona = get_terms('persone', 'number=1');
			if(!empty($persona) && !is_wp_error($persona)) : ?>
			<div id="persone">
				<h4>Persone</h4>
				<?php foreach ($persona as $term ) : ?>
					<a href="<?php echo get_term_link( $term ); ?>" title="<?php sprintf( __( 'View all post filed under %s', 'decrescita' ), $term->name ); ?>"><?php echo $term->name; ?></a>
					<p><?php echo $term->description; ?></p>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</div>

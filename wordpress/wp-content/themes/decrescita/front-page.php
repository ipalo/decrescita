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
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<footer>
					<?php get_template_part('templates/entry-footer'); ?>
				</footer>
			</article>
		<?php endwhile; ?>
	</div>
	<div class="col-md-4">
		<div id="box-home">
			<img src="http://placehold.it/360x240"/>
			<h2><mark>Venezia 2012</mark></h2>
		</div>
		
		<?php $eventi = new WP_Query( 'category_name=eventi&posts_per_page=2' ); ?>
		<?php if($eventi) : ?>
			<div id="eventi-home">
				<h3>I prossimi eventi</h3>
				<ul class="list-unstyled">
				<?php while ( $eventi->have_posts() ) : $eventi->the_post(); ?>
					<li>
						<em>Parma, 12 giugno 2014</em>
						<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
						<p>In una terra lontana, dietro le montagne
							Parole, lontani dalle terre di Vocalia e
							Consonantia, vivono i testi casuali.</p>
					</li>
				<?php endwhile; 
				wp_reset_postdata(); ?>
				</ul>
			</div>
		<?php endif; ?>
		
		<div id="in-evidenza-home">
			<h3>elementi in evidenza</h3>
			<h4>Titolo titolo titolo</h4>
			<p>In una terra lontana, dietro le montagne
						Parole, lontani dalle terre di Vocalia e
						xConsonantia, vivono i testi casuali.</p>
		</div>
	</div>
	<div class="col-md-4">
		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class(); ?>>
				<header>
					<?php get_template_part('templates/entry-meta'); ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
	<div class="col-md-2">
		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class(); ?>>
				<header>
					<?php get_template_part('templates/entry-meta'); ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
</div>



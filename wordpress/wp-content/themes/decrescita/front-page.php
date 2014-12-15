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
		    	<?php get_template_part('templates/entry-taxonomies'); ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
		      	<?php get_template_part('templates/entry-meta'); ?>
		    </header>
		    <div class="entry-content">
		      <?php the_content(); ?>
		    </div>
		  </article>
		<?php endwhile; ?>
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

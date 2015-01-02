<article <?php post_class(); ?>>
	<header>
		<?php get_template_part('templates/entry-categories'); ?>
		<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	</header>
	<div class="entry-content">
		<?php if(has_post_format('gallery') OR has_post_format('video')) {
				if(has_post_thumbnail()) { the_post_thumbnail('280x180'); }
		} ?>
		<?php the_excerpt(); ?>
	</div>
	<footer>
		<?php get_template_part('templates/entry-footer'); ?>
	</footer>
</article>
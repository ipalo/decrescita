<article <?php post_class(); ?>>
	<?php if(!has_post_format('quote')) : ?>
		<header>
			<?php get_template_part('templates/entry-categories'); ?>
			<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		</header>
	<?php endif; ?>
	<div class="entry-content">
		<?php if(has_post_format('gallery') OR has_post_format('video')) {
				if(has_post_thumbnail()) { the_post_thumbnail('280x180'); }
		} ?>
		<?php the_excerpt(); ?>
	</div>
	<footer>
		<?php if(!has_post_format('quote')) : ?>
			<?php get_template_part('templates/entry-footer'); ?>
		<?php else: ?>
			<?php get_template_part('templates/entry-persone'); ?>
		<?php endif; ?>
	</footer>
</article>
<p class="byline author vcard temi">
	<?php
	$terms = get_the_terms($post->ID, 'temi');
	if(!empty($terms)) {
		foreach($terms as $term) {
			echo '<a class="label label-categoria" href="'.get_term_link($term->slug, 'temi').'" title="'.esc_attr(sprintf(__( "View all posts in %s", 'decrescita'), $term->name)).'">'.$term->name.'</a> ';
		}
	}?>
	&mdash; <?php echo __('Scritto da', 'decrescita'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?> il <time class="updated" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time></a>
</p>
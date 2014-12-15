<p class="byline author vcard temi">
	<?php
	$terms = get_the_terms($post->ID, 'temi');
	if(!empty($terms)) {
		foreach($terms as $term) {
			echo '<a class="label label-categoria" href="'.get_term_link($term->slug, 'temi').'" title="'.esc_attr(sprintf(__( "View all posts in %s", 'decrescita'), $term->name)).'">'.$term->name.'</a> ';
		}
	}?>
</p>
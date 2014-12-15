<p class="byline author vcard temi">
	<?php
	if(!empty(get_the_category())) {
		foreach(get_the_terms($post->ID, 'temi') as $term) {
			echo '<a class="label label-categoria" href="'.get_term_link($term->slug, 'temi').'" title="'.esc_attr(sprintf(__( "View all posts in %s", 'decrescita'), $term->name)).'">'.$term->name.'</a> ';
		}
	}?>
</p>
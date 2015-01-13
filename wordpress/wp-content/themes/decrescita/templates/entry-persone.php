<p class="persone">
	<?php
	$terms = get_the_terms($post->ID, 'persone');
	if(!empty($terms)) {
		foreach($terms as $term) {
			echo '<a class="label label-categoria" href="'.get_term_link($term->slug, 'persone').'" title="'.esc_attr(sprintf(__( "Tutti gli articoli in %s", 'decrescita'), $term->name)).'">'.$term->name.'</a> ';
		}
	}?>
</p>
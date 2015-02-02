<?php
$terms = get_the_terms($post->ID, 'persone');
if(!empty($terms)) : ?>
	<p class="persone">
		<?php if(is_single()) {
			echo '<span class="group-persone">persone:</span> ';
		}
		foreach($terms as $term) {
			echo '<a class="label label-persone" href="'.get_term_link($term->slug, 'persone').'" title="'.esc_attr(sprintf(__( "Tutti gli articoli in %s", 'decrescita'), $term->name)).'">'.$term->name.'</a> ';
		} ?>
	</p>
<?php endif; ?>
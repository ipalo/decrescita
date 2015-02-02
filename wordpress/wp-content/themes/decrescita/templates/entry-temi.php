<?php
$terms = get_the_terms($post->ID, 'temi');
if(!empty($terms)) : ?>
	<p class="temi">
		<?php if(is_single()) {
			echo '<span class="group-temi">temi:</span> ';
		}
		foreach($terms as $term) {
			echo '<a class="label label-categoria" href="'.get_term_link($term->slug, 'temi').'" title="'.esc_attr(sprintf(__( "Tutti gli articoli in %s", 'decrescita'), $term->name)).'">'.$term->name.'</a> ';
		} ?>
	</p>
<?php endif; ?>
<?php
$terms = get_the_tags($post->ID);
if(!empty($terms)) : ?>
	<p class="glossario">
		<?php if(is_single()) {
			echo '<span class="group-glossario">glossario:</span> ';
		}
		foreach($terms as $term) {
			echo '<a class="label label-glossario" href="'.get_tag_link($term->slug).'" title="'.esc_attr(sprintf(__( "Tutti gli articoli in %s", 'decrescita'), $term->name)).'">'.$term->name.'</a> ';
		} ?>
	</p>
<?php endif; ?>

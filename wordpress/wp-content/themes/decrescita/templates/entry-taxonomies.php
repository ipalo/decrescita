<p class="post categories">
	<?php
	foreach(get_the_category() as $category) {
		echo '<a class="label label-categoria" href="'.get_category_link($category->term_id).'" title="'.esc_attr(sprintf(__( "View all posts in %s", 'decrescita'), $category->name)).'">'.$category->cat_name.'</a> ';
	}?>
</p>
<p class="post temi">
	<?php
	foreach(get_the_terms($post->ID, 'temi') as $term) {
		echo '<a class="label label-categoria" href="'.get_term_link($term->slug, 'temi').'" title="'.esc_attr(sprintf(__( "View all posts in %s", 'decrescita'), $term->name)).'">'.$term->name.'</a> ';
	}
	?>
</p>

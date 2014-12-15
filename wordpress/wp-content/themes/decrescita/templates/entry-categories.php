<p class="post categories">
	<?php
	$categories = get_the_category();
	if(!empty($categories)) {
		foreach($categories as $category) {
			echo '<a class="label label-categoria" href="'.get_category_link($category->term_id).'" title="'.esc_attr(sprintf(__( "View all posts in %s", 'decrescita'), $category->name)).'">'.$category->cat_name.'</a> ';
		}
	}?>
</p>

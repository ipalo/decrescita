<?php
$categories = get_the_category();
if(!empty($categories)) : ?>
	<p class="post categories">
		<?php if(is_single()) {
			echo '<span class="group-categorie">archiviato in:</span> ';
		}
		foreach($categories as $category) {
			echo '<a class="label label-categoria" href="'.get_category_link($category->term_id).'" title="'.esc_attr(sprintf(__( "View all posts in %s", 'decrescita'), $category->name)).'">'.$category->cat_name.'</a> ';
		} ?>
	</p>	
<?php endif; ?>

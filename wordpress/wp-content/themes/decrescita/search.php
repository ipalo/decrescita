<div class="row">
	<div class="col-md-12">
		<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url(home_url('/')); ?>">
			<div class="form-group">
			  <label class="sr-only"><?php _e('Ricerca:', 'decrescita'); ?></label>
			  <div class="input-group">
			    <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Cosa stai cercando?', 'decrescita'); ?>" required>
			    <span class="input-group-btn">
			      <button type="submit" class="search-submit btn btn-default"><?php _e('Cerca', 'decrescita'); ?></button>
			    </span>
			  </div>
			</div>
			<div class="form-group">
				<label for="category_name"><?php _e('Categorie:', 'decrescita'); ?></label>
				<select multiple class="form-control" name="category_name">
				  <?php
				  $categories = get_categories();
				  foreach ($categories as $category) {
				      echo '<option value="', $category->slug, '">', $category->name, "</option>\n";
				  }
				  ?>
				</select>
			</div>
			<div class="form-group">
				<label for="tag"><?php _e('Tags:', 'decrescita'); ?></label>
				<select multiple class="form-control" name="tag">
				  <?php
				  $tags = get_tags();
				  foreach ($tags as $tag) {
				      echo '<option value="', $tag->slug, '">', $tag->name, "</option>\n";
				  }
				  ?>
				</select>
			</div>
		</form>
	</div>
</div>


<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Nessun contenuto trovato.', 'decrescita'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content'); ?>
<?php endwhile; ?>


<?php if ($wp_query->max_num_pages > 1) : ?>
  <?php page_navi(); ?>
<?php endif; ?>

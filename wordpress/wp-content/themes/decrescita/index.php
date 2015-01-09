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

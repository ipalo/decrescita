<?php get_template_part('templates/page', 'header'); ?>

<div class="alert alert-warning">
  <?php _e('Purtroppo quello che stai cercando non si trova qui.', 'decrescita'); ?>
</div>

<p><?php _e('Probabilmente il problema è dovuto a:', 'decrescita'); ?></p>
<ul>
  <li><?php _e('un errore di digitazione dell\'indirizzo della pagina', 'decrescita'); ?></li>
  <li><?php _e('un link non valido', 'decrescita'); ?></li>
</ul>

<?php get_search_form(); ?>

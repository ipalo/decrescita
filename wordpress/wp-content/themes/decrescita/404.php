<?php get_template_part('templates/page', 'header'); ?>

<p><?php _e('Purtroppo quello che stai cercando non si trova qui.', 'decrescita'); ?> <?php _e('Probabilmente il problema è dovuto a:', 'decrescita'); ?></p>
<ul>
  <li><?php _e('un errore di digitazione dell\'indirizzo della pagina', 'decrescita'); ?></li>
  <li><?php _e('un link non valido', 'decrescita'); ?></li>
</ul>

<?php get_template_part('advanced-search'); ?>

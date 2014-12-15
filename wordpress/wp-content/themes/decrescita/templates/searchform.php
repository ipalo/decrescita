<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Ricerca:', 'decrescita'); ?></label>
  <div class="input-group">
    <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Cosa stai cercando?', 'decrescita'); ?>" required>
    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-default"><?php _e('Cerca', 'decrescita'); ?></button>
    </span>
  </div>
</form>
<p class="byline author-info vcard"><?php echo __('Pubblicato da', 'decrescita'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a> il <time class="updated" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time></p>

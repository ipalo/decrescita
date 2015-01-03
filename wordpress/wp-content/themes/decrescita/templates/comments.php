<?php
  if (post_password_required()) {
    return;
  }
?>

<section id="comments" class="comments">
  <?php if (have_comments()) : ?>
    <h2><?php printf(_nx('Un commento', '%1$s commenti', get_comments_number(), 'decrescita'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>'); ?></h2>

    <ol class="comment-list">
      <?php wp_list_comments(array('style' => 'ol', 'short_ping' => true)); ?>
    </ol>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
      <nav>
        <ul class="pager">
          <?php if (get_previous_comments_link()) : ?>
            <li class="previous"><?php previous_comments_link(__('&larr; Older comments', 'decrescita')); ?></li>
          <?php endif; ?>
          <?php if (get_next_comments_link()) : ?>
            <li class="next"><?php next_comments_link(__('Newer comments &rarr;', 'decrescita')); ?></li>
          <?php endif; ?>
        </ul>
      </nav>
    <?php endif; ?>
  <?php endif; // have_comments() ?>

  <?php if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments')) : ?>
    <div class="alert alert-warning">
      <?php _e('Comments are closed.', 'decrescita'); ?>
    </div>
  <?php endif; ?>

  <?php comment_form(array('fields' => array('author', 'email'), 'comment_notes_after' => '')); ?>
</section>

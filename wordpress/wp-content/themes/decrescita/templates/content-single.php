<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('col-xs-12 col-sm-8 col-sm-offset-2'); ?>>
    <header>
      <p class="post categories">
        <?php
        $categories = get_the_category();
        if(!empty($categories)) {
        foreach($categories as $category) {
        echo '<a class="label label-categoria" href="'.get_category_link($category->term_id).'" title="'.esc_attr(sprintf(__( "View all posts in %s", 'decrescita'), $category->name)).'">'.$category->cat_name.'</a> ';
        }
      }?>
      </p>
      <h2 class="entry-title"><?php the_title(); ?></h2>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'decrescita'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>

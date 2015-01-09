<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
  	<div class="row">
	    <header class="col-md-12">
	      <?php get_template_part('templates/entry-categories'); ?>
	      <h2 class="entry-title"><?php the_title(); ?></h2>
	      <?php get_template_part('templates/entry-meta'); ?>
	    </header>
    </div>

    <div class="row">
	    <div class="col-xs-12 col-sm-8">
	      <div class="entry-content">
	        <?php the_content(); ?>
	      </div>
	      <footer>
	        <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'decrescita'), 'after' => '</p></nav>')); ?>
	      </footer>
	    </div>
	    <aside class="sidebar" role="complementary">
	      <?php $note = get_field("note");
	      if($note) : ?>
	        <div id="note">
	          <?php if(get_field("note")) {the_field( "note");} ?>
	        </div>
	      <?php endif; ?>

	      <?php $attachments = new Attachments( 'attachments' ); ?>
	      <?php if( $attachments->exist() ) : ?>
	        <div id="allegati">
	          <h4>Materiali scaricabili (<?php echo $attachments->total(); ?>)</h4>
	          <ul>
	            <?php while( $attachments->get() ) : ?>
	              <li>
	                <a href="<?php echo $attachments->url(); ?>" title="<?php echo $attachments->field( 'title' ); ?>"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> <?php echo $attachments->field( 'title' ); ?></a> <span class="file-size"><?php echo $attachments->filesize(); ?></span>
	              </li>
	            <?php endwhile; ?>
	          </ul>
	        </div>
	      <?php endif; ?>
	    </aside>
	</div>

	<div class="row">
    	<?php comments_template('/templates/comments.php'); ?>
    </div>

  </article>
<?php endwhile; ?>

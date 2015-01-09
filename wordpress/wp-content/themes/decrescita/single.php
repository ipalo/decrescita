<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
  	<div class="row">
	    <header class="col-md-12">
	      	<?php get_template_part('templates/entry-categories'); ?>
	      	<h2 class="entry-title"><?php the_title(); ?></h2>
	      	<?php if(get_field("quando")) : ?>
	      		<p class="quando"><?php the_field('quando'); ?></p>
	  		<?php endif; ?>
	      	<?php get_template_part('templates/entry-meta'); ?>
	    </header>
    </div>

    <div class="row">
	    <div class="col-xs-12 col-sm-8">
	      <div class="entry-content">
	      	<?php 
	      		$luogo = get_field('luogo');
	      		if(!empty($luogo)):
	      			//get_template_part('templates/render-map');
	      	?>
		      	<div class="acf-map">
		      		<div class="marker" data-title="<?php echo $luogo['address']; ?>" data-lat="<?php echo $luogo['lat']; ?>" data-lng="<?php echo $luogo['lng']; ?>">
		      			<div id="gmap-bodyContent" style="max-width: 400px;line-height: normal;white-space: nowrap;overflow: auto;">
		      				<p style="line-height:1.3;margin:20px 0;"><?php echo $luogo['address']; ?><br/><a href="http://maps.google.com/maps?daddr=<?php echo urlencode($luogo['address']); ?>" title="Ottieni indicazioni stradali" target="_blank">Indicazioni stradali</a></p>
		      				<div class="clear clearfix"></div>
		      			</div>
  						
  					</div>
		      	</div>
	      	<?php endif; ?>

	        <?php the_content(); ?>
	      </div>
	      <footer>
	      	<?php get_template_part('templates/entry-temi'); ?>
	        <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'decrescita'), 'after' => '</p></nav>')); ?>
	      </footer>
	    </div>
	    <aside class="sidebar" role="complementary">
	      <?php $note = get_field("note");
	      if($note) : ?>
	        <div id="note">
	          <?php if(get_field("note")) { the_field("note"); } ?>
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

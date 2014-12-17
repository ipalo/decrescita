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
		  <h3>Attachments</h3>
		  <p>Total Attachments: <?php echo $attachments->total(); ?></p>
		  <ul>
		    <?php while( $attachments->get() ) : ?>
		      <li>
		        Subtype: <?php echo $attachments->subtype(); ?><br />
		        URL: <?php echo $attachments->url(); ?><br />
		        Image: <?php echo $attachments->image( 'thumbnail' ); ?><br />
		        Source: <?php echo $attachments->src( 'full' ); ?><br />
		        Size: <?php echo $attachments->filesize(); ?><br />
		        Title Field: <?php echo $attachments->field( 'title' ); ?><br />
		        Caption Field: <?php echo $attachments->field( 'caption' ); ?>
		      </li>
		    <?php endwhile; ?>
		  </ul>
		</div>
	<?php endif; ?>

	<?php dynamic_sidebar('sidebar-primary'); ?>
</aside>
<?php get_template_part('templates/content', 'single'); ?>
<aside class="sidebar" role="complementary">
	<?php if(is_single()) : ?>
		<?php $note = get_field("note");
		if($note) : ?>
			<div id="note">
				<?php if(get_field("note")) {the_field( "note");} ?>
			</div>
		<?php endif; ?>

		<?php $attachments = new Attachments( 'attachments' ); ?>
		<?php if( $attachments->exist() ) : ?>
			<div id="allegati">
			  <h4>Materiali scaricabili</h4>
			  <!--<p>Totale documenti: <?php //echo $attachments->total(); ?></p>-->
			  <ul>
			    <?php while( $attachments->get() ) : ?>
			      <li>
			      	<a href="<?php echo $attachments->url(); ?>" title="<?php echo $attachments->field( 'title' ); ?>"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> <?php echo $attachments->field( 'title' ); ?></a> <span class="file-size"><?php echo $attachments->filesize(); ?></span>
			        <!--Subtype: <?php //echo $attachments->subtype(); ?><br />
			        URL: <?php //echo $attachments->url(); ?><br />
			        Image: <?php //echo $attachments->image( 'thumbnail' ); ?><br />
			        Source: <?php //echo $attachments->src( 'full' ); ?><br />
			        Title Field:<span class="glyphicon glyphicon-file" aria-hidden="true"></span><?php echo $attachments->field( 'title' ); ?>
			        Caption Field:<?php echo $attachments->field( 'caption' ); ?> 
			        Size:<span class="file-size"><?php echo $attachments->filesize(); ?></span>-->
			      </li>
			    <?php endwhile; ?>
			  </ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>
</aside>
<div class="row">
	<div class="page-header col-md-12">
	  <h1>
	    <?php echo roots_title(); ?>
	  </h1>
	  <?php if(taxonomy_exists('persone') OR taxonomy_exists('tag')) : ?>
	  	<div id="taxonomy_description">
	  		<?php echo do_shortcode(term_description()); ?>
	  	</div>
	  <?php endif; ?>
	</div>
</div>
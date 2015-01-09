<div class="row">
	<div class="page-header col-md-12">
	  <h1>
	    <?php echo roots_title(); ?>
	  </h1>
	  <?php if((is_category() OR is_tag() OR is_tax()) AND !empty(term_description())) : ?>
	  	<div id="taxonomy_description">
	  		<?php echo do_shortcode(term_description()); ?>
	  	</div>
	  <?php endif; ?>
	</div>
</div>
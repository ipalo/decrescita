<div class="row">
	<div class="col-md-12">
		<h1>Tutte le categorie</h1>
	</div>
</div>
<div class="row">
	<?php $terms = get_terms('category'); ?>
	<?php foreach ( $terms as $term ) : ?>
		<div class="col-md-3">
			<h4 class="term-name"><a href="<?php echo get_term_link( $term ); ?>" title="<?php echo $term->name; ?>"><?php echo $term->name; ?></a></h4>
			<p class="term-count"><?php echo $term->count; ?> articoli</p>
			<p class="term-description"><?php echo $term->description; ?></p>
		</div>
	<?php endforeach; ?>
</div>
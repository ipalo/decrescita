<div class="row">
	<div class="col-md-12">
		<h1>Persone</h1>
	</div>
</div>
<div class="row">
	<?php
		$terms = get_terms('persone');
		$letters = array();
		foreach ($terms as $term)
		{
			$firstLetter = substr($term->name, 0, 1);
			$letters[$firstLetter][] = $term;
		}
	?>

	<div class="col-md-12">
		<p>
		<?php foreach($letters as $letter => $terms) : ?>
			<span class="lettera-vocaboli"><?php echo $letter; ?></span>
			<?php $out = ''; foreach($terms as $term) : ?>
				<?php $out .= ', <a href="'.get_term_link( $term ).'" title="'.$term->name.'">'.$term->name.'</a>'; ?>
			<?php endforeach; ?>
			<?php echo substr($out, 2); ?>
		<?php endforeach; ?>
		</p>
	</div>
</div>
<section class="side-favorite">
	<h3><img src="<?php bloginfo('template_directory');?>/img/content/icon-cat.png" alt="category">Category</h3>
	<?php
	$termchildren02 = get_terms( 'category', array( 'child_of' => 1 ) );
	echo '<ul>';
	foreach ( $termchildren02 as $child ) {
		// $term02 = get_term_by( 'id', $child, $taxonomy_name02 );
		echo '<li><a href="' . get_term_link( $child, $taxonomy_name02 ) . '">' . $child->name . '</a></li>';
	}
	echo '</ul>';
	?>
</section>
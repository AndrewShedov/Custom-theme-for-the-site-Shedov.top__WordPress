<?php


$posts_pagination = get_the_posts_pagination(
	array(
		'mid_size'  => 1,
		'prev_text'    => __('back'),
		'next_text'    => __('next'),
	)
);

// If we're not outputting the previous page link, prepend a placeholder with `visibility: hidden` to take its place.
if ( strpos( $posts_pagination, 'prev page-numbers' ) === false ) {
	$posts_pagination = str_replace( '<div class="nav-links">', '<div class="nav-links"><span class="prev page-numbers placeholder" aria-hidden="true">' . $prev_text . '</span>', $posts_pagination );
}

// If we're not outputting the next page link, append a placeholder with `visibility: hidden` to take its place.
if ( strpos( $posts_pagination, 'next page-numbers' ) === false ) {
	$posts_pagination = str_replace( '</div>', '<span class="next page-numbers placeholder" aria-hidden="true">' . $next_text . '</span></div>', $posts_pagination );
}

if ( $posts_pagination ) { ?>

	<div class="pagination-wrapper section-inner">

	

		<?php echo $posts_pagination; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- already escaped during generation. ?>

	</div>

	<?php
}

<?php
/**
 * Title: Hero
 * Slug: falcontwstarter/banner-hero
 * Categories: banner, call-to-action, featured
 * Viewport width: 1400
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","contentSize":"565px"}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"textAlign":"center","fontSize":"x-large","level":1} -->
		<h1 class="wp-block-heading has-text-align-center"><?php echo esc_html_x( 'A commitment to innovation and sustainability', 'Heading of the hero section', 'twentytwentyfour' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:spacer {"height":"1.25rem"} -->
		<div style="height:1.25rem" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html_x( 'Études is a pioneering firm that seamlessly merges creativity and functionality to redefine architectural excellence.', 'Content of the hero section', 'twentytwentyfour' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"1.25rem"} -->
		<div style="height:1.25rem" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button">
				<a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'About us', 'Button text of the hero section', 'twentytwentyfour' ); ?></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|3","style":{"layout":{}}} -->
	<div style="height:var(--wp--preset--spacing--3)" aria-hidden="true" class="wp-block-spacer">
	</div>
	<!-- /wp:spacer -->

	<!-- wp:image {"align":"wide","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
	<figure class="wp-block-image alignwide size-full is-style-rounded">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/default-image-two.png" alt="<?php esc_attr_e( 'Building exterior in Toronto, Canada', 'twentytwentyfour' ); ?>" />
	</figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->

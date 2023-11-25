<?php

/**
 * Title: Footer  default
 * Slug: falcontwstarter/footer
 * Categories: footer
 */
?>

<!-- wp:group {"className":"sticky bottom-0 bg-gray-50"} -->
<div class="wp-block-group sticky bottom-0 bg-gray-50">
	<!-- wp:group {"className":"container flex justify-between mx-auto text-center text-gray-500 h-20 place-items-center"} -->
	<div
		class="wp-block-group container flex justify-between mx-auto text-center text-gray-500 h-20 place-items-center">
		<!-- wp:site-logo /-->

		<!-- wp:paragraph {"className":"has-text-align-center has-secondary-color has-text-color has-link-color has-small-font-size"} -->
		<p class="has-text-align-center has-secondary-color has-text-color has-link-color has-small-font-size">
		&copy; <?php echo date_i18n('Y'); ?> - <?php echo get_bloginfo('name'); ?> </p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

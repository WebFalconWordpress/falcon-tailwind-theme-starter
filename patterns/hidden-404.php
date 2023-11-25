<?php

/**
 * Title: 404
 * Slug: falcontwstarter/hidden-404
 * Inserter: YES
 */
?>

<!-- wp:group {"className":" container flex flex-col h-full mx-auto"} -->
<div class="wp-block-group container flex flex-col h-full mx-auto">

	<!-- wp:group {"tagName":"section", "className":"flex flex-col justify-center flex-grow bg-white"} -->
	<section class="wp-block-group flex flex-col justify-center flex-grow bg-white">

		<!-- wp:group {"className":"max-w-screen-xl px-4 mx-auto py-7 lg:py-16 lg:px-6"} -->
		<div class="wp-block-group max-w-screen-xl px-4 mx-auto py-7 lg:py-16 lg:px-6">

			<!-- wp:group {"className":"max-w-screen-md mx-auto text-center"} -->
			<div class="wp-block-group max-w-screen-md mx-auto text-center">

				<!-- wp:heading {"level":1,"className":"mb-4 font-extrabold tracking-tight text-base text-7xl lg:text-9xl dark:text-base-500"} -->
				<h1 class="wp-block-heading mb-4 font-extrabold tracking-tight text-base text-7xl lg:text-9xl dark:text-base-500">404</h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"mb-4 text-3xl font-bold tracking-tight text-gray-900 md:text-4x"} -->
				<p class="mb-4 text-3xl font-bold tracking-tight text-gray-900 md:text-4x"><?php echo esc_html_x("Something's missing.", 'falcontwstarter') ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"mb-4 text-lg font-light text-dark"} -->
				<p class="mb-4 text-lg font-light text-dark"><?php echo esc_html_x("Sorry, we can't find that page. You'll find lots to explore on the home page.", 'falcontwstarter') ?></p>
				<!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"backgroundColor":"base","className":"is-style-fill text-white font-medium text-sm"} -->
                    <div class="wp-block-button is-style-fill text-white font-medium text-sm"><a
                            class="wp-block-button__link has-base-background-color has-background wp-element-button"
                            href="/"><?php echo esc_html_x("Back to Homepage", 'falcontwstarter') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->

			</div> 
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</section>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
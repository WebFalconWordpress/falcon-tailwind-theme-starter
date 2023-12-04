<?php

/**
 * Title: 404
 * Slug: falcontwstarter/hidden-404
 * Inserter: YES
 */
?>

<!-- wp:group {"className":" container flex flex-col h-full mx-auto"} -->
<div class="container flex flex-col h-full mx-auto wp-block-group">

	<!-- wp:group {"tagName":"section", "className":"flex flex-col justify-center flex-grow bg-white"} -->
	<section class="flex flex-col justify-center flex-grow bg-white wp-block-group">

		<!-- wp:group {"className":"max-w-screen-xl px-4 mx-auto py-7 lg:py-16 lg:px-6"} -->
		<div class="max-w-screen-xl px-4 mx-auto wp-block-group py-7 lg:py-16 lg:px-6">

			<!-- wp:group {"className":"max-w-screen-md mx-auto text-center"} -->
			<div class="max-w-screen-md mx-auto text-center wp-block-group">

				<!-- wp:heading {"level":1,"className":"mb-4 font-extrabold tracking-tight text-base text-7xl lg:text-9xl dark:text-base-500"} -->
				<h1 class="mb-4 text-base font-extrabold tracking-tight wp-block-heading text-7xl lg:text-9xl dark:text-base-500">404</h1>
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
                    <div class="text-sm font-medium text-white wp-block-button is-style-fill"><a
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
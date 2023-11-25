<?php

/**
 * Title: Header default
 * Slug: falcontwstarter/header
 * Categories: header
 */
?>

<div class="bg-gray-50">
	<div class="container py-4 mx-auto  lg:flex lg:justify-between lg:items-center">

		<div class="flex items-center justify-between">
			<?php if (has_custom_logo()) { ?>
				<!-- wp:site-logo {"height":150 } /-->

			<?php } else { ?>
				<!-- wp:site-title {"level":0} /-->
			<?php } ?>
			<a class="lg:hidden" href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
				<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
						<g id="icon-shape">
							<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
						</g>
					</g>
				</svg>
			</a>
		</div>

		<?php
		wp_nav_menu([
			'container_id' => 'primary-menu',
			'container' => 'div',
			'container_class' => 'reset-list pt-[28px] lg:mt-0 lg:p-0 lg:bg-transparent hidden lg:block',
			'menu_class' => 'lg:flex lg:-mx-4',
			'theme_location' => 'primary',
			'li_class' => 'font-bold text-contrast hover:text-dark leading-[32px] px-4',
			'fallback_cb' => false
		]);
		?>
	</div>
</div>
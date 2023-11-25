<?php

/**
 * Title: Post navigation
 * Slug: falcontwstarter/hidden-post-navigation
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"nav","ariaLabel":"<?php esc_attr_e('Posts', 'falcontwstarter'); ?>","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<nav class="wp-block-group py-4" aria-label="<?php esc_attr_e('Posts', 'falcontwstarter'); ?>">
	<!-- wp:post-navigation-link {"type":"previous","label":"<?php echo esc_html_x('Previous: ', 'Label before the title of the previous post. There is a space after the colon.', 'falcontwstarter'); ?>","showTitle":true,"linkLabel":true,"arrow":"arrow"} /-->
	<!-- wp:post-navigation-link {"label":"<?php echo esc_html_x('Next: ', 'Label before the title of the next post. There is a space after the colon.', 'falcontwstarter'); ?>","showTitle":true,"linkLabel":true,"arrow":"arrow"} /-->
</nav>
<!-- /wp:group -->
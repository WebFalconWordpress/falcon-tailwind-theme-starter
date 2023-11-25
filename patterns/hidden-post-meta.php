<?php
/**
 * Title: Post meta
 * Slug: falcontwstarter/hidden-post-meta
 * Inserter: no
 */
?>

<!-- wp:group -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.3em"}},"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-group">
		<!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0.3em"}},"layout":{"type":"flex","justifyContent":"left"}} -->
		<div >
			<!-- wp:paragraph -->
			<p ><?php echo esc_html_x( 'by', 'Prefix for the post author block: By author name', 'falcontwstarter' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:post-author-name {"isLink":true} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:post-terms {"term":"category","prefix":"<?php echo esc_html_x( 'in ', 'Prefix for the post category block: in category name', 'falcontwstarter' ); ?>"} /-->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

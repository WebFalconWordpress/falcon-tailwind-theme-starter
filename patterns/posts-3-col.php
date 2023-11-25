<?php

/**
 * Title: Falcon Tailwind Default Posts 3 Columns
 * Slug: falcontwstarter/posts-3-columns
 * Categories: posts
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"className":"wp-block-query","layout":{"type":"default"}} -->
<div class="wp-block-group wp-block-query">
	<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
	<div class="wp-block-query">
		<!-- wp:query-no-results -->
		<!-- wp:paragraph -->
		<p>No posts were found.</p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"spacing":{"margin":{"bottom":"0"},"padding":{"bottom":"var:preset|spacing|20"}},"color":{"duotone":"unset"}}} /-->

			<!-- wp:group {"className":"flex gap-2 mt-2 pt-0 flex-nowrap flex-col items-start"} -->
			<div class="flex flex-col items-start gap-2 pt-0 mt-2 wp-block-group flex-nowrap"><!-- wp:template-part {"slug":"post-meta","theme":"falcontwstarter"} /-->

				<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

				<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":41,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} /-->
			</div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:group -->

		<!-- wp:spacer {"height":"var:preset|spacing|20","className":"m-0 p-0"} -->
		<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="p-0 m-0 wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
<?php
/**
 * Title: Latest posts grid
 * Slug: zapline/posts-grid
 * Categories: zapline, featured, query
 * Keywords: posts, blog, query, latest
 * Viewport width: 1400
 *
 * @package Zapline
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"zapline-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull zapline-section"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"zapline-eyebrow"} -->
<p class="zapline-eyebrow"><?php esc_html_e( 'From the journal', 'zapline' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Latest posts', 'zapline' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"zapline-posts","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide zapline-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"isLink":true,"level":3} /-->

<!-- wp:post-excerpt {"excerptLength":22} /-->

<!-- wp:post-date /-->

<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:pattern {"slug":"zapline/hidden-no-results"} /-->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

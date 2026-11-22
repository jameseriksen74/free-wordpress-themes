<?php
/**
 * Title: Latest posts grid
 * Slug: petalpost/posts-grid
 * Categories: petalpost, featured, query
 * Keywords: posts, blog, query, latest
 * Viewport width: 1400
 *
 * @package Petalpost
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"petalpost-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull petalpost-section"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"petalpost-eyebrow"} -->
<p class="petalpost-eyebrow"><?php esc_html_e( 'From the journal', 'petalpost' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Latest posts', 'petalpost' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"petalpost-posts","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide petalpost-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"isLink":true,"level":3} /-->

<!-- wp:post-excerpt {"excerptLength":22} /-->

<!-- wp:post-date /-->

<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:pattern {"slug":"petalpost/hidden-no-results"} /-->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

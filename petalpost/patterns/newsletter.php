<?php
/**
 * Title: Newsletter call to action
 * Slug: petalpost/newsletter
 * Categories: petalpost, featured, call-to-action
 * Keywords: newsletter, subscribe, cta
 * Viewport width: 1400
 *
 * @package Petalpost
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"petalpost-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull petalpost-section"><!-- wp:group {"align":"wide","className":"petalpost-newsletter","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide petalpost-newsletter has-surface-background-color has-background"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Join the list', 'petalpost' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'New posts, early news and the occasional treat. No spam, ever.', 'petalpost' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Subscribe', 'petalpost' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

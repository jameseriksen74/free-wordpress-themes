<?php
/**
 * Title: Newsletter call to action
 * Slug: stillroom/newsletter
 * Categories: stillroom, featured, call-to-action
 * Keywords: newsletter, subscribe, cta
 * Viewport width: 1400
 *
 * @package Stillroom
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"stillroom-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull stillroom-section"><!-- wp:group {"align":"wide","className":"stillroom-newsletter","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide stillroom-newsletter has-surface-background-color has-background"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Join the list', 'stillroom' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'New posts, early news and the occasional treat. No spam, ever.', 'stillroom' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Subscribe', 'stillroom' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

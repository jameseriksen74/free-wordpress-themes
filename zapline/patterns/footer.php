<?php
/**
 * Title: Footer
 * Slug: zapline/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport width: 1400
 *
 * @package Zapline
 * @since 1.0.0
 */

?>
<!-- wp:group {"className":"zapline-footer","layout":{"type":"constrained"}} -->
<div class="wp-block-group zapline-footer"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:site-title {"level":0} /-->

<!-- wp:site-tagline /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Explore', 'zapline' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Say hello', 'zapline' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'We love hearing from readers. Drop us a note any time.', 'zapline' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","className":"zapline-footer__bottom","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide zapline-footer__bottom"><!-- wp:paragraph -->
<p><?php
	/* translators: %s: Theme designer name with link. */
	printf( esc_html__( 'Designed by %s', 'zapline' ), '<a href="https://prettythingsonline.com" rel="designer">Pretty Things Online</a>' );
	?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Proudly powered by WordPress', 'zapline' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

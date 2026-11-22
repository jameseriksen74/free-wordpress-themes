<?php
/**
 * Title: Footer
 * Slug: petalpost/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport width: 1400
 *
 * @package Petalpost
 * @since 1.0.0
 */

?>
<!-- wp:group {"className":"petalpost-footer","layout":{"type":"constrained"}} -->
<div class="wp-block-group petalpost-footer"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:site-title {"level":0} /-->

<!-- wp:site-tagline /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Explore', 'petalpost' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Say hello', 'petalpost' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'We love hearing from readers. Drop us a note any time.', 'petalpost' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","className":"petalpost-footer__bottom","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide petalpost-footer__bottom"><!-- wp:paragraph -->
<p><?php
	/* translators: %s: Theme designer name with link. */
	printf( esc_html__( 'Designed by %s', 'petalpost' ), '<a href="https://prettythingsonline.com" rel="designer">Pretty Things Online</a>' );
	?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Proudly powered by WordPress', 'petalpost' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

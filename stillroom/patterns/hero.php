<?php
/**
 * Title: Hero
 * Slug: stillroom/hero
 * Categories: stillroom, featured, banner
 * Keywords: hero, banner, intro, header
 * Viewport width: 1400
 *
 * @package Stillroom
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"stillroom-section stillroom-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull stillroom-section stillroom-hero"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"stillroom-eyebrow"} -->
<p class="stillroom-eyebrow"><?php esc_html_e( 'The essentials', 'stillroom' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"stillroom-display"} -->
<h1 class="wp-block-heading stillroom-display"><?php esc_html_e( 'Less, but better', 'stillroom' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"stillroom-lede"} -->
<p class="stillroom-lede"><?php esc_html_e( 'Quiet design and clear focus for people who make thoughtful things.', 'stillroom' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Explore the work', 'stillroom' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get in touch', 'stillroom' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/stillroom-art-2.jpg" alt="<?php esc_attr_e( 'A blue cylinder, a sphere and a black block on a pale floor', 'stillroom' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<?php
/**
 * Title: Image and text
 * Slug: stillroom/image-text
 * Categories: stillroom, featured, about
 * Keywords: about, story, media, image
 * Viewport width: 1400
 *
 * @package Stillroom
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"stillroom-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull stillroom-section"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/stillroom-art-3.jpg" alt="<?php esc_attr_e( 'Abstract artwork in the theme colours', 'stillroom' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"stillroom-eyebrow"} -->
<p class="stillroom-eyebrow"><?php esc_html_e( 'Our story', 'stillroom' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Made slowly, chosen carefully', 'stillroom' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Share the story behind your brand, your studio or your craft. Tell people what you care about and why you started.', 'stillroom' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Read our story', 'stillroom' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

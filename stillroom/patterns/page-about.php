<?php
/**
 * Title: About page
 * Slug: stillroom/page-about
 * Categories: stillroom, featured, pages
 * Keywords: about, team, story
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

<!-- wp:group {"align":"full","className":"stillroom-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull stillroom-section"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"stillroom-eyebrow"} -->
<p class="stillroom-eyebrow"><?php esc_html_e( 'Kind words', 'stillroom' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Loved by readers', 'stillroom' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"stillroom-card stillroom-testimonial","layout":{"type":"default"}} -->
<div class="wp-block-group stillroom-card stillroom-testimonial"><!-- wp:paragraph -->
<p><?php esc_html_e( '“The nicest corner of the internet. Every post feels like a little gift.”', 'stillroom' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"stillroom-eyebrow"} -->
<p class="stillroom-eyebrow"><?php esc_html_e( 'Ava M.', 'stillroom' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"stillroom-card stillroom-testimonial","layout":{"type":"default"}} -->
<div class="wp-block-group stillroom-card stillroom-testimonial"><!-- wp:paragraph -->
<p><?php esc_html_e( '“Beautiful, thoughtful and genuinely useful. I read every single issue.”', 'stillroom' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"stillroom-eyebrow"} -->
<p class="stillroom-eyebrow"><?php esc_html_e( 'Jonah R.', 'stillroom' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"stillroom-card stillroom-testimonial","layout":{"type":"default"}} -->
<div class="wp-block-group stillroom-card stillroom-testimonial"><!-- wp:paragraph -->
<p><?php esc_html_e( '“Clean, calm and easy to read. Exactly what I wanted.”', 'stillroom' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"stillroom-eyebrow"} -->
<p class="stillroom-eyebrow"><?php esc_html_e( 'Priya S.', 'stillroom' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

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

<?php
/**
 * Title: About page
 * Slug: zapline/page-about
 * Categories: zapline, featured, pages
 * Keywords: about, team, story
 * Viewport width: 1400
 *
 * @package Zapline
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"zapline-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull zapline-section"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/zapline-art-2.jpg" alt="<?php esc_attr_e( 'Abstract artwork in the theme colours', 'zapline' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"zapline-eyebrow"} -->
<p class="zapline-eyebrow"><?php esc_html_e( 'Our story', 'zapline' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Made slowly, chosen carefully', 'zapline' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Share the story behind your brand, your studio or your craft. Tell people what you care about and why you started.', 'zapline' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Read our story', 'zapline' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"zapline-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull zapline-section"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"zapline-eyebrow"} -->
<p class="zapline-eyebrow"><?php esc_html_e( 'Kind words', 'zapline' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Loved by readers', 'zapline' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"zapline-card zapline-testimonial","layout":{"type":"default"}} -->
<div class="wp-block-group zapline-card zapline-testimonial"><!-- wp:paragraph -->
<p><?php esc_html_e( '“The nicest corner of the internet. Every post feels like a little gift.”', 'zapline' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"zapline-eyebrow"} -->
<p class="zapline-eyebrow"><?php esc_html_e( 'Ava M.', 'zapline' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"zapline-card zapline-testimonial","layout":{"type":"default"}} -->
<div class="wp-block-group zapline-card zapline-testimonial"><!-- wp:paragraph -->
<p><?php esc_html_e( '“Beautiful, thoughtful and genuinely useful. I read every single issue.”', 'zapline' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"zapline-eyebrow"} -->
<p class="zapline-eyebrow"><?php esc_html_e( 'Jonah R.', 'zapline' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"zapline-card zapline-testimonial","layout":{"type":"default"}} -->
<div class="wp-block-group zapline-card zapline-testimonial"><!-- wp:paragraph -->
<p><?php esc_html_e( '“Clean, calm and easy to read. Exactly what I wanted.”', 'zapline' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"zapline-eyebrow"} -->
<p class="zapline-eyebrow"><?php esc_html_e( 'Priya S.', 'zapline' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"zapline-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull zapline-section"><!-- wp:group {"align":"wide","className":"zapline-newsletter","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide zapline-newsletter has-surface-background-color has-background"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Join the list', 'zapline' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'New posts, early news and the occasional treat. No spam, ever.', 'zapline' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Subscribe', 'zapline' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

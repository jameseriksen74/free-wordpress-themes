<?php
/**
 * Title: About page
 * Slug: petalpost/page-about
 * Categories: petalpost, featured, pages
 * Keywords: about, team, story
 * Viewport width: 1400
 *
 * @package Petalpost
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"petalpost-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull petalpost-section"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/petalpost-art-2.jpg" alt="<?php esc_attr_e( 'Abstract artwork in the theme colours', 'petalpost' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"petalpost-eyebrow"} -->
<p class="petalpost-eyebrow"><?php esc_html_e( 'Our story', 'petalpost' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Made slowly, chosen carefully', 'petalpost' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Share the story behind your brand, your studio or your craft. Tell people what you care about and why you started.', 'petalpost' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Read our story', 'petalpost' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"petalpost-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull petalpost-section"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"petalpost-eyebrow"} -->
<p class="petalpost-eyebrow"><?php esc_html_e( 'Kind words', 'petalpost' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Loved by readers', 'petalpost' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"petalpost-card petalpost-testimonial","layout":{"type":"default"}} -->
<div class="wp-block-group petalpost-card petalpost-testimonial"><!-- wp:paragraph -->
<p><?php esc_html_e( '“The nicest corner of the internet. Every post feels like a little gift.”', 'petalpost' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"petalpost-eyebrow"} -->
<p class="petalpost-eyebrow"><?php esc_html_e( 'Ava M.', 'petalpost' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"petalpost-card petalpost-testimonial","layout":{"type":"default"}} -->
<div class="wp-block-group petalpost-card petalpost-testimonial"><!-- wp:paragraph -->
<p><?php esc_html_e( '“Beautiful, thoughtful and genuinely useful. I read every single issue.”', 'petalpost' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"petalpost-eyebrow"} -->
<p class="petalpost-eyebrow"><?php esc_html_e( 'Jonah R.', 'petalpost' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"petalpost-card petalpost-testimonial","layout":{"type":"default"}} -->
<div class="wp-block-group petalpost-card petalpost-testimonial"><!-- wp:paragraph -->
<p><?php esc_html_e( '“Clean, calm and easy to read. Exactly what I wanted.”', 'petalpost' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"petalpost-eyebrow"} -->
<p class="petalpost-eyebrow"><?php esc_html_e( 'Priya S.', 'petalpost' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

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

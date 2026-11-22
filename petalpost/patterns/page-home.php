<?php
/**
 * Title: Home page
 * Slug: petalpost/page-home
 * Categories: petalpost, featured, pages
 * Keywords: home, landing, starter
 * Viewport width: 1400
 *
 * @package Petalpost
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"petalpost-section petalpost-section--hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull petalpost-section petalpost-section--hero"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/petalpost-art-1.jpg","dimRatio":0,"minHeight":680,"contentPosition":"bottom left","isDark":false,"align":"wide","className":"petalpost-hero","layout":{"type":"default"}} -->
<div class="wp-block-cover alignwide is-light has-custom-content-position is-position-bottom-left petalpost-hero" style="min-height:680px"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/petalpost-art-1.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"petalpost-hero__card","layout":{"type":"default"}} -->
<div class="wp-block-group petalpost-hero__card"><!-- wp:paragraph {"className":"petalpost-eyebrow"} -->
<p class="petalpost-eyebrow"><?php esc_html_e( 'New season', 'petalpost' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"petalpost-display"} -->
<h1 class="wp-block-heading petalpost-display"><?php echo wp_kses_post( __( 'Little luxuries, <em>made to keep</em>', 'petalpost' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"petalpost-lede"} -->
<p class="petalpost-lede"><?php esc_html_e( 'Stories, studio notes and thoughtfully chosen things for everyday joy.', 'petalpost' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Read the journal', 'petalpost' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"petalpost-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull petalpost-section"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"petalpost-eyebrow"} -->
<p class="petalpost-eyebrow"><?php esc_html_e( 'Why us', 'petalpost' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'A little about how we work', 'petalpost' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"petalpost-card","layout":{"type":"default"}} -->
<div class="wp-block-group petalpost-card"><!-- wp:paragraph {"className":"petalpost-eyebrow"} -->
<p class="petalpost-eyebrow">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Made with care', 'petalpost' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Every detail is considered, from the first sketch to the final stitch.', 'petalpost' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"petalpost-card","layout":{"type":"default"}} -->
<div class="wp-block-group petalpost-card"><!-- wp:paragraph {"className":"petalpost-eyebrow"} -->
<p class="petalpost-eyebrow">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Small batches', 'petalpost' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'We make a little at a time, so nothing goes to waste.', 'petalpost' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"petalpost-card","layout":{"type":"default"}} -->
<div class="wp-block-group petalpost-card"><!-- wp:paragraph {"className":"petalpost-eyebrow"} -->
<p class="petalpost-eyebrow">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Here to help', 'petalpost' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Real people answer every message, usually within a day.', 'petalpost' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

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

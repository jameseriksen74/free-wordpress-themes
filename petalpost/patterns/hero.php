<?php
/**
 * Title: Hero
 * Slug: petalpost/hero
 * Categories: petalpost, featured, banner
 * Keywords: hero, banner, intro, header
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

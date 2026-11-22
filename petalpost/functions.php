<?php
/**
 * Petalpost functions and definitions.
 *
 * @package Petalpost
 * @since 1.0.0
 */

if ( ! function_exists( 'petalpost_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for WordPress features.
	 */
	function petalpost_setup() {
		add_editor_style( 'style.css' );
		add_theme_support( 'post-thumbnails' );
	}
endif;
add_action( 'after_setup_theme', 'petalpost_setup' );

if ( ! function_exists( 'petalpost_enqueue_styles' ) ) :
	/**
	 * Enqueues the theme stylesheet on the front end.
	 */
	function petalpost_enqueue_styles() {
		wp_enqueue_style(
			'petalpost-style',
			get_stylesheet_uri(),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'petalpost_enqueue_styles' );

if ( ! function_exists( 'petalpost_pattern_categories' ) ) :
	/**
	 * Registers the pattern category used by the theme patterns.
	 */
	function petalpost_pattern_categories() {
		register_block_pattern_category(
			'petalpost',
			array(
				'label'       => __( 'Petalpost', 'petalpost' ),
				'description' => __( 'Patterns included with the Petalpost theme.', 'petalpost' ),
			)
		);
	}
endif;
add_action( 'init', 'petalpost_pattern_categories' );

if ( ! function_exists( 'petalpost_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 */
	function petalpost_block_styles() {
		register_block_style(
			'core/group',
			array(
				'name'         => 'petalpost-card',
				'label'        => __( 'Card', 'petalpost' ),
				'inline_style' => '.wp-block-group.is-style-petalpost-card { background: var(--wp--preset--color--surface); border-radius: 18px; padding: var(--wp--preset--spacing--50); }',
			)
		);
		register_block_style(
			'core/paragraph',
			array(
				'name'         => 'petalpost-eyebrow',
				'label'        => __( 'Eyebrow', 'petalpost' ),
				'inline_style' => '.is-style-petalpost-eyebrow { font-size: var(--wp--preset--font-size--small); letter-spacing: 0.24em; text-transform: uppercase; font-weight: 600; }',
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'         => 'petalpost-framed',
				'label'        => __( 'Framed', 'petalpost' ),
				'inline_style' => '.wp-block-image.is-style-petalpost-framed img { padding: 10px; background: var(--wp--preset--color--surface); }',
			)
		);
	}
endif;
add_action( 'init', 'petalpost_block_styles' );

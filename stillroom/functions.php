<?php
/**
 * Stillroom functions and definitions.
 *
 * @package Stillroom
 * @since 1.0.0
 */

if ( ! function_exists( 'stillroom_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for WordPress features.
	 */
	function stillroom_setup() {
		add_editor_style( 'style.css' );
		add_theme_support( 'post-thumbnails' );
	}
endif;
add_action( 'after_setup_theme', 'stillroom_setup' );

if ( ! function_exists( 'stillroom_enqueue_styles' ) ) :
	/**
	 * Enqueues the theme stylesheet on the front end.
	 */
	function stillroom_enqueue_styles() {
		wp_enqueue_style(
			'stillroom-style',
			get_stylesheet_uri(),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'stillroom_enqueue_styles' );

if ( ! function_exists( 'stillroom_pattern_categories' ) ) :
	/**
	 * Registers the pattern category used by the theme patterns.
	 */
	function stillroom_pattern_categories() {
		register_block_pattern_category(
			'stillroom',
			array(
				'label'       => __( 'Stillroom', 'stillroom' ),
				'description' => __( 'Patterns included with the Stillroom theme.', 'stillroom' ),
			)
		);
	}
endif;
add_action( 'init', 'stillroom_pattern_categories' );

if ( ! function_exists( 'stillroom_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 */
	function stillroom_block_styles() {
		register_block_style(
			'core/group',
			array(
				'name'         => 'stillroom-card',
				'label'        => __( 'Card', 'stillroom' ),
				'inline_style' => '.wp-block-group.is-style-stillroom-card { background: var(--wp--preset--color--surface); border-radius: 4px; padding: var(--wp--preset--spacing--50); }',
			)
		);
		register_block_style(
			'core/paragraph',
			array(
				'name'         => 'stillroom-eyebrow',
				'label'        => __( 'Eyebrow', 'stillroom' ),
				'inline_style' => '.is-style-stillroom-eyebrow { font-size: var(--wp--preset--font-size--small); letter-spacing: 0.24em; text-transform: uppercase; font-weight: 600; }',
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'         => 'stillroom-framed',
				'label'        => __( 'Framed', 'stillroom' ),
				'inline_style' => '.wp-block-image.is-style-stillroom-framed img { padding: 10px; background: var(--wp--preset--color--surface); }',
			)
		);
	}
endif;
add_action( 'init', 'stillroom_block_styles' );

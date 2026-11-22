<?php
/**
 * Zapline functions and definitions.
 *
 * @package Zapline
 * @since 1.0.0
 */

if ( ! function_exists( 'zapline_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for WordPress features.
	 */
	function zapline_setup() {
		add_editor_style( 'style.css' );
		add_theme_support( 'post-thumbnails' );
	}
endif;
add_action( 'after_setup_theme', 'zapline_setup' );

if ( ! function_exists( 'zapline_enqueue_styles' ) ) :
	/**
	 * Enqueues the theme stylesheet on the front end.
	 */
	function zapline_enqueue_styles() {
		wp_enqueue_style(
			'zapline-style',
			get_stylesheet_uri(),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'zapline_enqueue_styles' );

if ( ! function_exists( 'zapline_pattern_categories' ) ) :
	/**
	 * Registers the pattern category used by the theme patterns.
	 */
	function zapline_pattern_categories() {
		register_block_pattern_category(
			'zapline',
			array(
				'label'       => __( 'Zapline', 'zapline' ),
				'description' => __( 'Patterns included with the Zapline theme.', 'zapline' ),
			)
		);
	}
endif;
add_action( 'init', 'zapline_pattern_categories' );

if ( ! function_exists( 'zapline_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 */
	function zapline_block_styles() {
		register_block_style(
			'core/group',
			array(
				'name'         => 'zapline-card',
				'label'        => __( 'Card', 'zapline' ),
				'inline_style' => '.wp-block-group.is-style-zapline-card { background: var(--wp--preset--color--surface); border-radius: 0px; padding: var(--wp--preset--spacing--50); }',
			)
		);
		register_block_style(
			'core/paragraph',
			array(
				'name'         => 'zapline-eyebrow',
				'label'        => __( 'Eyebrow', 'zapline' ),
				'inline_style' => '.is-style-zapline-eyebrow { font-size: var(--wp--preset--font-size--small); letter-spacing: 0.24em; text-transform: uppercase; font-weight: 600; }',
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'         => 'zapline-framed',
				'label'        => __( 'Framed', 'zapline' ),
				'inline_style' => '.wp-block-image.is-style-zapline-framed img { padding: 10px; background: var(--wp--preset--color--surface); }',
			)
		);
	}
endif;
add_action( 'init', 'zapline_block_styles' );

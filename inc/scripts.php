<?php
/**
 * Add all the assets to the theme
 */

/**
 * Enqueue scripts and styles.
 */
function whoami_scripts() {
	wp_enqueue_style( 'whoami-style', get_stylesheet_uri() );

	wp_enqueue_script( 'whoami-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'whoami-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	//Theme Specific assets
	//css
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', '','3.3.1');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', '','3.3.1');
	wp_enqueue_style('typed', get_template_directory_uri() . '/css/typed.css', '','3.3.1');
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', '','3.3.1');

	wp_enqueue_style('theme', get_template_directory_uri() . '/css/theme.css', '','3.3.1');


	//js

	wp_enqueue_script('bootstrap', get_template_directory_uri() .'/js/bootstrap.js', ['jquery'], '3.3.1', true);

	wp_enqueue_script('jquery-easing', get_template_directory_uri() .'/js/jquery.easing-1.3.pack.js', ['jquery'], '3.3.1', true);

	wp_enqueue_script('jquery-parallax', get_template_directory_uri() .'/js/jquery.parallax-1.1.3.js', ['jquery'], '3.3.1', true);

	wp_enqueue_script('magnific-popup', get_template_directory_uri() .'/js/jquery.magnific-popup.js', ['jquery'], '3.3.1', true);

	wp_enqueue_script('typed', get_template_directory_uri() .'/js/typed.js', ['jquery'], '3.3.1', true);

	wp_enqueue_script('easypiechart', get_template_directory_uri() .'/js/jquery.easypiechart.js', ['jquery'], '3.3.1', true);


	wp_enqueue_script('jquery-validate', get_template_directory_uri() .'/js/jquery.validate.js', ['jquery'], '3.3.1', true);

	wp_enqueue_script('theme', get_template_directory_uri() .'/js/theme.js', ['jquery'], '3.3.1', true);




	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'whoami_scripts' );
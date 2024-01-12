<?php

add_action( 'wp_enqueue_scripts', 'test_style' );
add_action( 'wp_enqueue_scripts', 'test_scripts' );
add_action('after_setup_theme', function(){
	// add_theme_support('menus');
	register_nav_menus ([
		'header' => 'Верхняя область',
		'footer' => 'Нижняя область'
	]);
  // add_theme_support( 'title-tag' );
  // add_theme_support( 'post-thumbnails' );
});

function test_style() {
	wp_enqueue_style( 'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );
	wp_enqueue_style( 'select-style', get_template_directory_uri() . '/assets/css/nice-select.css' );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css' );
}



function test_scripts(){
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '/assets/js/jquery-3.6.0.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'mask-script', get_template_directory_uri() . '/assets/js/jquery.maskedinput.js', array('jquery'), null, true);

	wp_enqueue_script( 'select-script', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('jquery'), null, true);

	wp_enqueue_script( 'swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), null, true);

	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/app.js', array('jquery','mask-script','select-script' ), null, true);
}



// function wc_format_phone_number( $phone ) {
// 	if ( ! WC_Validation::is_phone( $phone ) ) {
// 		return '';
// 	}
// 	return preg_replace( '/[^0-9\+\-\(\)\s]/', '-', preg_replace( '/[\x00-\x1F\x7F-\xFF]/', '', $phone ) );
// }


?>

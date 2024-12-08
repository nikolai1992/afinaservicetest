<?php
/* Plugin Name: Convert Bra Size
 Description: A shortcode to convert bra sizes from latin letters into digits.
 Version: 1.0
 Author: Kolya
 Author URI: Your URL */
function convert_bra_size($atts) {
	include("includes/form.php");
}
add_shortcode('convert_bra_size', 'convert_bra_size');

add_action('wp_ajax_convert_bra_size_ajax', 'convert_bra_size_ajax');
add_action( 'wp_ajax_nopriv_convert_bra_size_ajax', 'convert_bra_size_ajax');

function convert_bra_size_ajax($size) {
	$size = sanitize_text_field( $size, false );
	$size = strtolower($size);
	// Example conversion logic
	$sizes = [
		'a' => 1,
		'b' => 2,
		'c' => 3,
		'd' => 4,
		'e' => 5,
		'f' => 6,
		'g' => 7,
		'h' => 8,
		'i' => 9,
		'j' => 10,
	];

	return $sizes[$size] ?? 0;
}

add_action('wp_ajax_my_ajax_action', 'my_ajax_handler');
add_action('wp_ajax_nopriv_my_ajax_action', 'my_ajax_handler');
// For non-logged-in users
function my_ajax_handler() {
	// Check for nonce for security
    if (!wp_verify_nonce($_POST['nonce'], 'my_ajax_nonce') || empty($_POST)) {
		wp_die('Invalid nonce');
	}
	$result = convert_bra_size_ajax($_POST['braSize']);
	// Return the result
	wp_send_json($result);
	wp_die();
 }

add_action( 'admin_menu', 'true_top_menu_page', 25 );

function true_top_menu_page(){

	add_menu_page(
		'Конвертирование размера бюстгалстера', // тайтл страницы
		'Конвертирование размера бюстгалстера', // текст ссылки в меню
		'manage_options', // права пользователя, необходимые для доступа к странице
		'convert-bra-size', // ярлык страницы
		'convert_bra_size_page_callback', // функция, которая выводит содержимое страницы
		'dashicons-calculator', // иконка, в данном случае из Dashicons
		20 // позиция в меню
	);
}

function convert_bra_size_page_callback(){
	return include("includes/admin-form.php");
}
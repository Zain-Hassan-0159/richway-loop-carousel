
<?php

/**
 * Plugin Name:       Richway Loop Carousel
 * Description:       Richway Loop Carousel are created by Zain Hassan.
 * Version:           1.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Zain Hassan
 * Author URI:        https://hassanzain.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       richway-el-carousel
*/

if(!defined('ABSPATH')){
exit;
}



function richway_el_category( $elements_manager ) {

	$elements_manager->add_category(
		'richway-el-widgets',
		[
			'title' => esc_html__( 'Richway Widgets', 'richway-el-carousel' ),
			'icon' => 'fa fa-plug',
		]
	);

}
add_action( 'elementor/elements/categories_registered', 'richway_el_category' );


function register_richway_custom_el_widgets( $widgets_manager ) {
	if(function_exists('liquid_helper')){
		require_once( __DIR__ . '/inc/carousel.php' );
		$widgets_manager->register( new \richway_Loop_Carousel );
	}

}
add_action( 'elementor/widgets/register', 'register_richway_custom_el_widgets' );



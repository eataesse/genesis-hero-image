<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://rdejong.nl
 * @since      1.0.0
 *
 * @package    Genesis_Hero_Image
 * @subpackage Genesis_Hero_Image/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Genesis_Hero_Image
 * @subpackage Genesis_Hero_Image/includes
 * @author     Richard de Jong <info@rdejong.nl>
 */
class Genesis_Hero_Image_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'genesis-hero-image',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

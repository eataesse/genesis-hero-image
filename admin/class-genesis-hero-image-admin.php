<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://rdejong.nl
 * @since      1.0.0
 *
 * @package    Genesis_Hero_Image
 * @subpackage Genesis_Hero_Image/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Genesis_Hero_Image
 * @subpackage Genesis_Hero_Image/admin
 * @author     Richard de Jong <info@rdejong.nl>
 */
class Genesis_Hero_Image_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Genesis_Hero_Image_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Genesis_Hero_Image_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/genesis-hero-image-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Genesis_Hero_Image_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Genesis_Hero_Image_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

        if( 'settings_page_genesis-hero-image' == get_current_screen() -> id ) {
            wp_enqueue_media();
            wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/genesis-hero-image-admin.js', array( 'jquery', 'media-upload' ), $this->version, false );
        }
		//wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/genesis-hero-image-admin.js', array( 'jquery' ), $this->version, false );

	}
    
    /**
	 * Register the administration menu for this plugin into the WordPress Dashboard menu.
	 *
	 * @since    1.0.0
	 */
	public function add_plugin_admin_menu() {

    /*
     * Add a settings page for this plugin to the Settings menu.
     *
     * NOTE:  Alternative menu locations are available via WordPress administration menu functions.
     *
     *        Administration Menus: http://codex.wordpress.org/Administration_Menus
     *
     */
    add_options_page( 'Genesis Hero Image', 'Genesis Hero Image', 'manage_options', $this->plugin_name, array($this, 'display_plugin_setup_page')
    );
}

	 /**
	 * Add settings action link to the plugins page.
	 *
	 * @since    1.0.0
	 */
	 
	public function add_action_links( $links ) {
		/*
		*  Documentation : https://codex.wordpress.org/Plugin_API/Filter_Reference/plugin_action_links_(plugin_file_name)
		*/
	   $settings_link = array(
		'<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_name ) . '">' . __('Settings', $this->plugin_name) . '</a>',
	   );
	   return array_merge(  $settings_link, $links );

	}

	/**
	 * Render the settings page for this plugin.
	 *
	 * @since    1.0.0
	 */
	 
	public function display_plugin_setup_page() {
		include_once( 'partials/genesis-hero-image-admin-display.php' );
	}
	
	/**
	*
	* admin/class-wp-cbf-admin.php
	*
	**/
	 public function options_update() {
		register_setting($this->plugin_name, $this->plugin_name, array($this, 'validate'));
	 }
	
	/**
	*
	* admin/class-wp-cbf-admin.php
	*
	**/
	public function validate($input) {
		// All checkboxes inputs        
		$valid = array();

		//Options
		$valid['hook'] = (isset($input['hook']) && !empty($input['hook'])) ? $input['hook'] : 0;
        $valid['hook_priority'] = (isset($input['hook_priority']) && !empty($input['hook_priority'])) ? $input['hook_priority'] : 0;
		$valid['image'] = (isset($input['image']) && !empty($input['image'])) ? $input['image'] : 0;
        //Standard image
        $valid['standard_img_id'] = (isset($input['standard_img_id']) && !empty($input['standard_img_id'])) ? absint($input['standard_img_id']) : 0;
		
		return $valid;
	 }

}

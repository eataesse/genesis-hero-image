<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://rdejong.nl
 * @since      1.0.0
 *
 * @package    Genesis_Hero_Image
 * @subpackage Genesis_Hero_Image/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Genesis_Hero_Image
 * @subpackage Genesis_Hero_Image/public
 * @author     Richard de Jong <info@rdejong.nl>
 */
class Genesis_Hero_Image_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
        $this->genesis_hero_image_options = get_option($this->plugin_name);

	}
    
    
    
    /**
     * Cleanup functions depending on each checkbox returned value in admin
     *
     * @since    1.0.0
     */
	public function genesis_hero_image() {
        
        $image = $this->genesis_hero_image_options['image'];
        
        switch($image) {
            case 'first':
                $hero_img = $this->genesis_hero_image_get_first_image();
                break;
            case 'featured':
                $hero_img = $this->genesis_hero_image_get_featured_image();
                break;
            case 'standard':
                $hero_img = $this->genesis_hero_image_get_standard_image();
                break;
        }
        	
		echo '<div style="display: block; float: left; width: 100%; height: 200px; background: url(' . $hero_img . ') no-repeat center center; background-size: cover;"></div>';

	}
    
    /**
     * Add the function to the chosen hook
     * If nothing is chosen use the default value genesis_after_header
     * 
     * @since   1.0.0
     */
    public function genesis_hero_image_loader() {
        $hook_priority = 10;
        
        if(isset($this->genesis_hero_image_options['hook_priority']) && ctype_digit((string)$this->genesis_hero_image_options['hook_priority'])) {
            $hook_priority = $this->genesis_hero_image_options['hook_priority'];
        }
        
        $hook = ($this->genesis_hero_image_options['hook']) ? $this->genesis_hero_image_options['hook'] : 'genesis_after_header';
        //hook_priority
        
        add_action(''.$hook.'', array($this, 'genesis_hero_image'), $hook_priority);
    }
    
    /**
     * Load the first image used inside the content of the page/post
     * 
     * @since   1.0.0
     */
    public function genesis_hero_image_get_first_image() {
        global $post;
        
        $page = $post->post_content;
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $page, $matches);
		$first_img = $matches [1] [0];
        
        return $first_img;
    }
    
    /**
     * Load the featured image of the current page/post
     * 
     * @since   1.0.0
     */
    public function genesis_hero_image_get_featured_image() {
        global $post;
        
        $featured_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
        
        return $featured_img;
    }
    
    /**
     * Load the standard image uploaded on the plugin settings page
     * 
     * @since   1.0.0
     */
    public function genesis_hero_image_get_standard_image() {
        if(!empty($this->genesis_hero_image_options['standard_img_id'])) {
            $featured_img = wp_get_attachment_url($this->genesis_hero_image_options['standard_img_id']);
            
            return $featured_img;    
        } else {
            return false;
        }
        
        
    }

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/genesis-hero-image-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/genesis-hero-image-public.js', array( 'jquery' ), $this->version, false );

	}

}

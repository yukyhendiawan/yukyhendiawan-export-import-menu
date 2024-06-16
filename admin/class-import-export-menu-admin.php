<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://yukyhendiawan.com
 * @since      1.0.0
 *
 * @package    Import_Export_Menu
 * @subpackage Import_Export_Menu/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Import_Export_Menu
 * @subpackage Import_Export_Menu/admin
 * @author     Yuky Hendiawan <yukyhendiawan1998@gmail.com>
 */
class Import_Export_Menu_Admin {

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
	 * @param      string $plugin_name       The name of this plugin.
	 * @param      string $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;
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
		 * defined in Import_Export_Menu_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Import_Export_Menu_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/import-export-menu-admin.css', array(), $this->version, 'all' );
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
		 * defined in Import_Export_Menu_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Import_Export_Menu_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/import-export-menu-admin.js', array( 'jquery' ), $this->version, false );
	}

	/**
	 * Adds a new top-level menu page to the WordPress admin area.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function import_export_menu_add_page() {
		/**
		 * Add a top-level menu page.
		 *
		 * @param string $page_title The text to be displayed in the title tags of the page when the menu is selected.
		 * @param string $menu_title The text to be used for the menu.
		 * @param string $capability The capability required for this menu to be displayed to the user.
		 * @param string $menu_slug The slug name to refer to this menu by (should be unique for this menu).
		 * @param callable $callback The function to be called to output the content for this page.
		 * @param string $icon_url The URL to the icon to be used for this menu.
		 * @param int $position The position in the menu order this menu should appear.
		 *
		 * @return void
		 */
		add_menu_page(
			__( 'Import Export', 'import-export-menu' ), // $page_title
			__( 'Import Export', 'import-export-menu' ), // $menu_title
			'manage_options',                            // $capability
			'import-export-menu',                        // $menu_slug
			'import_export_menu_display_page',           // $callback
			'dashicons-admin-generic',                   // $icon_url
			30                                           // $position
		);
	}

	/**
	 * Callback function for Export Import.
	 *
	 * This function is responsible for rendering the content of the "Export Import" admin page.
	 *
	 * @return void
	 */
	public function import_export_menu_display_page() {
		// Include the partial file that contains the HTML content.
		include plugin_dir_path( __FILE__ ) . 'admin/partials/export-import-menu.php';
	}
}

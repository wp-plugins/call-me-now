<?php
/*
	Plugin Name: Call me now Vebonden B.V.
	Plugin URI: http://www.verbonden.nl
	Description: Zorg voor supersnelle call me now activiteiten op je website via de Call me now widget van Verbonden B.V.
	Version: 1.0.1
	Author: Tussendoor internet & marketing
	Author URI: http://www.tussendoor.nl
	Tested up to: 3.9
*/

if ( ! defined('CALL_ME_NOW_DIR')) define('CALL_ME_NOW_DIR', dirname(__FILE__));
if ( ! defined('CALL_ME_NOW_URL')) define('CALL_ME_NOW_URL', plugins_url('call-me-now'));

require_once(CALL_ME_NOW_DIR.'/call-me-now-widget.php');
require_once(CALL_ME_NOW_DIR.'/call-me-now-frame.php');

class CallMeNow {

	public function __construct() {
		add_action('init', array($this, 'init'));
		add_action('admin_menu', array($this, 'admin_menu'));
		add_action('admin_enqueue_scripts', array($this, 'admin_enqueue_scripts'));
		add_shortcode('call_me_now', array($this, 'shortcode'));
		add_action('widgets_init', array($this, 'register_widget'));
	}

	public function init() {

		//Set language folder
		load_plugin_textdomain( 'call_me_now', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
		
		//Register and include the javascript files
		wp_register_script('call_me_now', CALL_ME_NOW_URL . '/resources/call-me-now.js', array('jquery'), '1.0.4');
	}

	public function admin_menu() {
		add_menu_page('Call Me Now', 'Call Me Now', 'manage_options', 'call_me_now', array(&$this, 'about'), CALL_ME_NOW_URL.'/resources/call-me-now_white.png');
		add_submenu_page ('call_me_now', __('Information', 'call_me_now'), __('Information', 'call_me_now'), 'manage_options', 'call_me_now_about', array(&$this, 'about'));
		add_submenu_page ('call_me_now', __('Settings', 'call_me_now'), __('Settings', 'call_me_now'), 'manage_options', 'call_me_now_settings', array(&$this, 'settings'));
		remove_submenu_page('call_me_now', 'call_me_now');
	}

	public function admin_enqueue_scripts() {
		wp_register_style('call_me_now_admin', CALL_ME_NOW_URL . '/resources/style.css');
		wp_enqueue_style('call_me_now_admin');
	}

	public function about() {
		require_once(CALL_ME_NOW_DIR . '/views/admin/about.php');
	}

	public function settings() {
		if( $_POST ) {
			update_option('call_me_now_hash', $_POST['call_me_now_hash']);
		}
		require_once(CALL_ME_NOW_DIR . '/views/admin/settings.php');
	}

	public function shortcode($fields) {
		wp_enqueue_script('call_me_now');
		
		$title 			= isset($fields['title']) ? $fields['title'] : '';
		$label 			= isset($fields['label']) ? $fields['label'] : __('Phonenumber', 'call_me_now');
		$button 		= isset($fields['button']) ? $fields['button'] : __('Call Me Now', 'call_me_now');
		$class 			= isset($fields['class']) ? $fields['class'] : '';
		$before_title 	= isset($fields['before_title']) ? $fields['before_title'] : '<h3>';
		$after_title 	= isset($fields['after_title']) ? $fields['after_title'] : '</h3>';
		$cmn_id 		= 'cmn';
		
		require_once(CALL_ME_NOW_DIR . '/views/frontend/call-me-now.php');
	}

	public function register_widget() {
		register_widget('Call_Me_Now_Widget');
	}

}

new CallMeNow();
?>
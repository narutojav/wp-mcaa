<?php
/*
 * Define Constants
 */
define('WPTUTS_SHORTNAME', 'wptuts'); // used to prefix the individual setting field id see wptuts_options_page_fields()
define('WPTUTS_PAGE_BASENAME', 'wptuts-settings'); // the settings page slug
add_action( 'admin_menu', 'wptuts_add_menu' );

/*
 * The Admin menu page
 */
function wptuts_add_menu(){

    // Display Settings Page link under the "Appearance" Admin Menu
    // add_theme_page( $page_title, $menu_title, $capability, $menu_slug, $function);
    $wptuts_settings_page = add_theme_page(__('Wptuts Options'), __('Wptuts Options','wptuts_textdomain'), 'manage_options', WPTUTS_PAGE_BASENAME, 'wptuts_settings_page_fn');
}
/**
 * Helper function for defining variables for the current page
 *
 * @return array
 */
function wptuts_get_settings() {

    $output = array();

    // put together the output array
    $output['wptuts_option_name']       = ''; // the option name as used in the get_option() call.
    $output['wptuts_page_title']        = __( 'Wptuts Settings Page','wptuts_textdomain'); // the settings page title
    $output['wptuts_page_sections']     = ''; // the setting section
    $output['wptuts_page_fields']       = ''; // the setting fields
    $output['wptuts_contextual_help']   = ''; // the contextual help

return $output;
}
 ?>

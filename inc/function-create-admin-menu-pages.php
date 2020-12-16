<?php 

/* 
	(D) This page contains all the functions to create admin menu pages to provide custom settings for GridAR theme.
		custom function names are initiated with the theme name. in this case its 'gridar_' and the purpose of the function flowws the initiating phrase. 

	(P) Create Admin Menu Pages 
	--------------------------------------------------------------------------------------------------------------------------

*/

// Call the function to register options using setting API 

require( get_template_directory(). '/inc/function-enable-custom-settings.php');


// create a admin menu pages for custom settings for the theme 
function gridar_create_admin_menu_pages(){

	// Generate the main menu page for the theme options
	add_menu_page('General Theme Settings', 'GridAR', 'manage_options', 'gridar_options_general', 'gridar_general_options_admin_page', 'dashicons-admin-customizer', 110);

	// the fisrt submenu. it will appear whenever the main menu is accessed. Generate General options
	add_submenu_page('gridar_options_general', 'General Theme Settings', 'General','manage_options', 'gridar_options_general', 'gridar_general_options_admin_page');

	// Create Header options page 
	add_submenu_page('gridar_options_general', 'Header Options', 'Header','manage_options', 'gridar_options_header', 'gridar_header_options_admin_page');

	// Create Blog options page 
	add_submenu_page('gridar_options_general', 'Blog Options', 'Blog','manage_options', 'gridar_options_blog', 'gridar_blog_options_admin_page');

	// Create Sidebar options page 
	add_submenu_page('gridar_options_general', 'Sidebar Options', 'Sidebar','manage_options', 'gridar_options_sidebar', 'gridar_sidebar_options_admin_page');

	// Create Footer options page 
	add_submenu_page('gridar_options_general', 'Footer Options', 'Footer','manage_options', 'gridar_options_footer', 'gridar_footer_options_admin_page');



	// wordpress hook to activate custom settings. this will help to register our custom theme settings

	// (D) it is inside the create admin menu pages becuse to ensure that the settings register only when it came from our admin pages and not from any other pages.
	add_action( 'admin_init', 'gridar_enable_custom_settings' );

}

// wordpress hook to create the admin menu and menu pages
add_action( 'admin_menu', 'gridar_create_admin_menu_pages' );




/* 
 Callback functions
 -----------------------------------------------------------------------------------------------------------------------
 */

// callback for general setting page
function gridar_general_options_admin_page(){
	require_once (get_template_directory() . '/inc/templates/gridar-general-options-page-template.php');
}

// callback for Header setting page
function gridar_header_options_admin_page(){
	require_once (get_template_directory() . '/inc/templates/gridar-Header-options-page-template.php');
}

// callback for Blog setting page
function gridar_blog_options_admin_page(){
	require_once (get_template_directory() . '/inc/templates/gridar-blog-options-page-template.php');
}

// callback for Sidebar setting page
function gridar_sidebar_options_admin_page(){
	require_once (get_template_directory() . '/inc/templates/gridar-sidebar-options-page-template.php');
}

// callback for Footer setting page
function gridar_footer_options_admin_page(){
	require_once (get_template_directory() . '/inc/templates/gridar-footer-options-page-template.php');
}


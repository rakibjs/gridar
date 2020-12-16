<?php

/*
	(D) This page is responsible for registering gridAR theme option settings and biding them in Database with the help of wordpress core settings API. the hook is called inside  'gridar_create_admin_menu_pages()' found in function-gridar_create_admin_menu_pages.php

	(P) Register custom options using settings API
*/
function gridar_enable_custom_settings(){
	// setting for site layout
	register_setting( 'gridar_general_settings_group', 'gridar_site_layout' );
	add_settings_section( 'gridar_layout_setting_section', 'Site Layout Options', 'gridar_layout_setting_section_callback', 'gridar_options_general' );
	add_settings_field( 'gridar_layout', 'Site Layout', 'gridar_layout_field_callback', 'gridar_options_general', 'gridar_layout_setting_section');


	//setting for fonts
	register_setting( 'gridar_general_settings_group', 'gridar_font_setting_headings' );
	register_setting( 'gridar_general_settings_group', 'gridar_font_setting_body' );

	add_settings_section( 'gridar_fonts_setting_section', 'Font Options', 'gridar_font_setting_section_callback', 'gridar_options_general' );

	add_settings_field( 'gridar_font_headings', 'Headings Font', 'gridar_hedaing_font_field_callback', 'gridar_options_general', 'gridar_fonts_setting_section');
	add_settings_field( 'gridar_font_body', 'Body Font', 'gridar_body_font_field_callback', 'gridar_options_general', 'gridar_fonts_setting_section');


	// setting for comments
	register_setting( 'gridar_general_settings_group', 'gridar_disable_comments_pages' );
	register_setting( 'gridar_general_settings_group', 'gridar_disable_comments_posts' );

	add_settings_section( 'gridar_comments_setting_section', 'Disable Comments', 'gridar_disable_comments_section_callback', 'gridar_options_general' );
	add_settings_field( 'gridar_comments_setting', 'Disable Comments', 'gridar_comment_settings_field_callback', 'gridar_options_general', 'gridar_comments_setting_section');


	// Custom scripts
	register_setting( 'gridar_general_settings_group', 'gridar_custom_css' );
	register_setting( 'gridar_general_settings_group', 'gridar_custom_js' );

	add_settings_section( 'gridar_custom_script_section', 'Custom CSS and Js', 'gridar_custom_script_section_callback', 'gridar_options_general' );
	add_settings_field( 'gridar_custom_css_field', 'Custom CSS', 'gridar_custom_css_field_callback', 'gridar_options_general', 'gridar_custom_script_section');
	add_settings_field( 'gridar_custom_js_field', 'Custom Js', 'gridar_custom_js_field_callback', 'gridar_options_general', 'gridar_custom_script_section');
	
}


/*
	Callbacks for layout setting
*/

function gridar_layout_setting_section_callback(){
	echo 'Select site layout';
}

function gridar_layout_field_callback(){
	
	echo '
		<input type="radio" name="gridar_site_layout" value= "boxed">
			<label for= "boxed"> Boxed </label>

		<input type= "radio" name="gridar_site_layout" value="full_width">
			<label for= "full_width"> Full Width </label>
	 ';
	
}


/*
	Callbacks for font setting
*/

function gridar_font_setting_section_callback(){
	echo 'Configure fonts';
}

function gridar_hedaing_font_field_callback(){
	
	echo '
		<select name="gridar_font_setting_headings">
			<option value="Robot">Robot</option>
			<option value="Lato">Lato</option>
			<option value="PT Sans">PT Sans</option>
			<option value="Open Sans">Open Sans</option>
		</select>	
	 ';
	
}

function gridar_body_font_field_callback(){
	echo '
		<select name="gridar_font_setting_body">
			<option value="Robot">Robot</option>
			<option value="Lato">Lato</option>
			<option value="PT Sans">PT Sans</option>
			<option value="Open Sans">Open Sans</option>
		</select>	
	 ';
}



/*
	Callbacks for Comments setting
*/

function gridar_disable_comments_section_callback(){
	echo 'Disable Cooments on Pages and Posts';
}

function gridar_comment_settings_field_callback(){
	echo '
		<input type="checkbox" name="gridar_disable_comments_pages" value= "gridar_disable_comments_pages">
			<label for= "gridar_disable_comments_pages"> Disable Comments on Pages </label>

		<input type="checkbox" name="gridar_disable_comments_posts" value= "gridar_disable_comments_posts">
			<label for= "gridar_disable_comments_posts"> Disable Comments on Posts </label>
	';
}


function gridar_custom_script_section_callback(){
	echo 'custom CSS and Js ';
}

function gridar_custom_css_field_callback(){
	echo '
		<textarea name="gridar_custom_css" ></textarea>
	';
}

function gridar_custom_js_field_callback(){
	echo '
		<textarea name="gridar_custom_js" ></textarea>
	';
}
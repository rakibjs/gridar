
<form method="post" action="options.php">

<?php 
	settings_fields( 'gridar_general_settings_group' );
	do_settings_sections( 'gridar_options_general' );
	do_settings_sections( 'gridar_fonts_setting_section' );


	submit_button();

?>

</form>

<p> <?php echo get_option( 'gridar_disable_comments_pages' ); ?> </p>
<p> <?php echo get_option( 'gridar_disable_comments_posts' ); ?> </p>



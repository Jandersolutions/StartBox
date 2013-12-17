<?php
/**
 * Registers a settings metabox to direct users to the help tab and resources
 */
class sb_settings_help extends SB_Settings {

	function sb_settings_help() {
		$this->name = __( 'Need Help?', 'startbox' );
		$this->slug = 'sb_settings_help';
		$this->location = 'secondary';
		$this->priority = 'high';
		parent::__construct();
	}

	function admin_form( $options = array() ) {
		echo '<p>' . sprintf( __( 'Start customzing your theme with the <a href="%s">Theme Customizer.</a>', 'startbox' ), admin_url( 'customize.php' ) ) . __( ' Find out more by clicking on the "Help" tab above.', 'startbox' ) . '</p>';
		echo '<p>' . sprintf( __( 'You can also visit the StartBox <a href="%s" target="_blank">support forum.</a>', 'startbox' ), 'http://wpstartbox.com/support/' ) . '</p>';
		echo '<p>' . sprintf( __( '<a href="%s" target="_blank">StartBox Website</a> | <a href="%s" target="_blank">Documentation</a> | <a href="%s" target="_blank">Github</a> | <a href="%s" target="_blank">Twitter</a> | <a href="%s" target="_blank">Facebook</a>', 'startbox' ), 'http://wpstartbox.com', 'http://docs.wpstartbox.com/Main_Page', 'https://github.com/WebDevStudios/StartBox/', 'http://twitter.com/wpstartbox', 'https://www.facebook.com/pages/WP-StartBox/465761230178685' ) .'</p>';
	}

}

sb_register_settings( 'sb_settings_help' );
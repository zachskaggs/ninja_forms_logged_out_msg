<?php 
/*
Plugin Name: Ninja Forms Logged Out Hidden Form Error
Plugin URI: http://wpninjas.net
Description: This plugin adds an error message letting a user know they must log in to see forms with the "User must be logged in to see forms" option checked
Version: 1.0
Author: WPN Zach
Author URI: http://zachskaggs.com
*/
function nf_logged_out_display_msg( $form_id ) {

	$redirect_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$logged_out_msg = 'You must <a href=' . wp_login_url( $redirect_link ) . '>login</a> or <a href=' . wp_registration_url( $redirect_link ) . '>register</a> to view this form.';
	echo $logged_out_msg;
}

add_action( 'ninja_forms_display_user_not_logged_in', 'nf_logged_out_display_msg', 10 );




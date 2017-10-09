<?php
/**
 * Registers and enqueues admin scripts and styles
 *
 * @since 0.1
 *
 * @return void
 */

function cdpp_admin_scripts_and_styles() {
	//styles

	wp_enqueue_style(
		'mod-admin',
		cdpp_get_plugin_url('admin/styles/styles.css')
	);

	//scripts
	wp_enqueue_script(
		'jquery-validate',
		'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js',
		['jquery'],
		'1.15.1',
		'true'
	);
	wp_enqueue_script(
		'mod-admin',
		cdpp_get_plugin_url('admin/js/min/admin-min.js'),
		['jquery-validate', 'jquery-ui-sortable'],
		null,
		'true'
	);
}
add_action( 'admin_enqueue_scripts', 'cdpp_admin_scripts_and_styles', 999 );
?>

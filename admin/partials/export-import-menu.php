<?php
/**
 * Renders the admin area view for the plugin.
 *
 * This file contains the HTML markup for the admin-facing aspects of the plugin.
 *
 * @link       https://yukyhendiawan.com
 * @since      1.0.0
 *
 * @package    Import_Export_Menu
 * @subpackage Import_Export_Menu/admin/partials
 */

?>

<div class="wrap">
	<h1><?php esc_html_e( 'Export & Import', 'import-export-menu' ); ?></h1>
	<button type="button" class="import">
		<?php esc_html_e( 'Export Menu', 'import-export-menu' ); ?>
	</button>

	<span class="divider"></span>

	<form enctype="multipart/form-data" id="import-export-menu" method="post" class="wp-upload-form" action="">
		<?php wp_nonce_field( 'import_export_menu_action', 'import_export_menu_nonce' ); ?>
		<p class="input">
			<label for="upload">
				<?php esc_html_e( 'Choose a file from your computer:  (Maximum size: 10 MB)', 'import-export-menu' ); ?>
			</label>
			<input type="file" id="upload" name="import" size="25">
		</p>
		<button type="submit" class="export">
			<?php esc_html_e( 'Upload file and import', 'import-export-menu' ); ?>
		</button>
	</form>
</div>

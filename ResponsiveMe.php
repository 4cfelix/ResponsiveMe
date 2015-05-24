<?php
/**
 * Plugin Name: ResponsiveMe
 * Plugin URI: http://responsiveme.cccc.de
 * Description: This plugin add your theme a responsive design without changing your theme strict. The plugin add an responsive navigation and gives you the opportunity to add css at a special breakpoint.
 * Version: Beta - 0.5.
 * Author: Werbeagentur 4c media Bayreuth
 * Author URI: http://www.cccc.de/
 * License: GPLv2
 */
// add assets

require_once('assets/assets.php');

// create custom plugin settings menu
add_action('admin_menu', 'responsiveme_create_menu');

function responsiveme_create_menu() {

	//create new top-level menu
	add_menu_page('ResponsiveMe', 'ResponsiveMe', 'administrator', __FILE__, 'reponsiveme_settings_page');

	//call register settings function
	add_action( 'admin_init', 'register_mysettings' );
}


function register_mysettings() {
	//register our settings
	register_setting( 'responsiveme-settings-group', 'set_reponsiveme_breakpoint' );
	register_setting( 'responsiveme-settings-group', 'set_reponsiveme_navclass' );
	register_setting( 'responsiveme-settings-group', 'set_reponsiveme_main_content' );
	register_setting( 'responsiveme-settings-group', 'set_reponsiveme_main_color' );
	register_setting( 'responsiveme-settings-group', 'set_reponsiveme_h1' );
	register_setting( 'responsiveme-settings-group', 'set_reponsiveme_h2' );
	register_setting( 'responsiveme-settings-group', 'set_reponsiveme_h3' );
	register_setting( 'responsiveme-settings-group', 'set_reponsiveme_h4' );
	register_setting( 'responsiveme-settings-group', 'set_reponsiveme_h5' );
	register_setting( 'responsiveme-settings-group', 'set_reponsiveme_h6' );
	register_setting( 'responsiveme-settings-group', 'set_reponsiveme_p' );
	register_setting( 'responsiveme-settings-group', 'custom_responsiveme_css' );
	register_setting( 'responsiveme-settings-group', 'custom_responsiveme_js' );
}

function reponsiveme_settings_page() {
?>
<div class="wrap">
<h2>ResponsiveMe</h2>
</div><!-- /.wrap -->

<form method="post" action="options.php">
<?php settings_fields( 'responsiveme-settings-group' ); ?>
<?php do_settings_sections( 'responsiveme-settings-group' ); ?>

<div class="wrap">

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">
					<div class="postbox">
						
						<h3 class="hndle"><span>Basic settings</span></h3>
						
						<div class="inside">
						    
						    <table class="form-table">
							    <tbody>
							    	<tr>
									    <th scope="row"><label for="set_reponsiveme_breakpoint">Breakpoint in px</label></th>
									    <td><input type="number" name="set_reponsiveme_breakpoint" value="<?php echo esc_attr( get_option('set_reponsiveme_breakpoint') ); ?>" /></td>
							    	</tr>
							    	
							    	<tr>
							    	    <th scope="row"><label for="set_reponsiveme_navclass">Your navigation class/id</label></th>
							    	    <td><input type="text" name="set_reponsiveme_navclass" value="<?php echo esc_attr( get_option('set_reponsiveme_navclass') ); ?>" /></td>
							    	</tr>
							    	
							    	<tr>
							    	    <th scope="row"><label for="set_reponsiveme_main_content">Your content class/id</label></th>
							    	    <td><input type="text" name="set_reponsiveme_main_content" value="<?php echo esc_attr( get_option('set_reponsiveme_main_content') ); ?>" /></td>
							    	</tr>
							    	
							    	<tr>
							    	    <th scope="row"><label for="set_reponsiveme_main_color">Your brand color</label></th>
							    	    <td><input type="text" name="set_reponsiveme_main_color" value="<?php echo esc_attr( get_option('set_reponsiveme_main_color') ); ?>" /></td>
							    	</tr>
							 	</tbody>
							 </table>
							 
						</div><!-- /.inside -->
						
					</div><!-- /.postbox -->
					
				</div><!-- /.meta-box-sortables ui-sortable -->
				
				<div class="meta-box-sortables ui-sortable">
					
					<div class="postbox">
						
						<h3 class="hndle"><span>Basic styling</span></h3>
						
						<div class="inside">
							
							<table class="form-table">
							    <tbody>
								   	<tr>
								   	    <th scope="row"><label for="set_reponsiveme_h1">Font-Size <code>h1</code> in px</label></th>
								   	    <td><input type="number" name="set_reponsiveme_h1" value="<?php echo esc_attr( get_option('set_reponsiveme_h1') ); ?>" /></td>
								   	</tr>
								   	
								   	<tr>
								   	    <th scope="row"><label for="set_reponsiveme_h2">Font-Size <code>h2</code> in px</label></th>
								   	    <td><input type="number" name="set_reponsiveme_h2" value="<?php echo esc_attr( get_option('set_reponsiveme_h2') ); ?>" /></td>
								   	</tr>
								   	
								   	<tr>
								   	    <th scope="row"><label for="set_reponsiveme_h3">Font-Size <code>h3</code> in px</label></th>
								   	    <td><input type="number" name="set_reponsiveme_h3" value="<?php echo esc_attr( get_option('set_reponsiveme_h3') ); ?>" /></td>
								   	</tr>
								   	
								   	<tr>
								   	    <th scope="row"><label for="set_reponsiveme_h4">Font-Size <code>h4</code> in px</label></th>
								   	    <td><input type="number" name="set_reponsiveme_h4" value="<?php echo esc_attr( get_option('set_reponsiveme_h4') ); ?>" /></td>
								   	</tr>
								   	
								   	<tr>
								   	    <th scope="row"><label for="set_reponsiveme_h5">Font-Size <code>h5</code> in px</label></th>
								   	    <td><input type="number" name="set_reponsiveme_h5" value="<?php echo esc_attr( get_option('set_reponsiveme_h5') ); ?>" /></td>
								   	</tr>
								   	
								   	<tr>
								   	    <th scope="row"><label for="set_reponsiveme_h6">Font-Size <code>h6</code> in px</label></th>
								   	    <td><input type="number" name="set_reponsiveme_h6" value="<?php echo esc_attr( get_option('set_reponsiveme_h6') ); ?>" /></td>
								   	</tr>
								   	
								   	<tr>
								   	    <th scope="row"><label for="set_reponsiveme_p">Font-Size <code>p</code> in px</label></th>
								   	    <td><input type="number" name="set_reponsiveme_p" value="<?php echo esc_attr( get_option('set_reponsiveme_p') ); ?>" /></td>
								   	</tr>
								</tbody>
							</table>
							
							<p><strong><?php esc_attr_e( 'Note: The line-height automatically will be set to 120%.', 'wp_admin_style' ) ?></strong></p>
														
						</div><!-- /.inside -->
						
					</div><!-- /.postbox -->
					
				</div><!-- /.meta-box-sortables ui-sortable -->
				
				<div class="meta-box-sortables ui-sortable">
					
					<div class="postbox">
						
						<h3 class="hndle"><span>Custom scripts</span></h3>
						
						<div class="inside">
							
							<table class="form-table">
							    <tbody>
								   	<tr>
							    		<td>
							    			<h3>Custom CSS</h3>
								    		<p>
								    			<textarea class="large-text" rows="55" name="custom_responsiveme_css"><?php echo esc_attr( get_option('custom_responsiveme_css') );?></textarea>
								    		</p>
							    		</td>
							    	</tr>
							    </tbody>
							</table>
							
						</div><!-- /.inside -->
						
					</div><!-- /.postbox -->
					
				</div><!-- /.meta-box-sortables ui-sortable -->

			</div>
			<!-- post-body-content -->
			
			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">

					<div class="postbox">

						<h3  class="hndle"><span><?php esc_attr_e('About ResponsiveMe', 'wp_admin_style'); ?></span></h3>

						<div class="inside">
						
							<p>ResponsiveMe was developed by <a href="http://wwww.cccc.de" target="_blank" title="Werbeagentur 4c media">4c media in Bayreuth</a>. This plugin helps you creating a mobil theme for your website or blog. The plugin add a responsive navigation and gives you the opportunity to add css at a defined breakpoint.</p>
							
							<p>For full documentation, bug reports or feature suggestions visit the <a target="_blank" href="#" title="GitHub">ResponsiveMe repository</a>.</p>
														
							<?php require_once('assets/logo.php'); ?>
							
							<p><strong>If you looking for a special solution for your website contact us!</strong></p>
														
							<a class="button-primary" href="mailto:website@cccc.de" title="write us…">website@cccc.de</a>
							
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->
					
				</div>
				<!-- .meta-box-sortables -->

			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->

<?php submit_button(); ?>

</form>

<?php } 

/* call css hook */
require_once('assets/css_hook.php');

/* call js hook */

require_once('assets/js_hook.php');

?>
<?php
/** 
 * Global menu to the left
 *
 * Long description TODO (@link http://)
 *
 * PHP version 5.3
 *
 * LICENSE: TODO 
 *
 * @package WP ezBoilerStrap
 * @author Mark Simchock <mark.simchock@alchemyunited.com>
 * @since 0.5.0
 * @license TODO
 */
 
/*
 * == Change Log == 
 *
 * --- 20 August 2014 = Ready.
 */
?>

<?php
if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}

$arr_menu_global_brand = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WPezHelpers::ez_true($arr_menu_global_brand['active']) ){	

	echo '<a href="' . sanitize_text_field($arr_menu_global_brand['markup']['a_href']) . '" title="' . sanitize_text_field($arr_menu_global_brand['markup']['a_title']) . '" class="' . sanitize_text_field($arr_menu_global_brand['markup']['title_class']) . '">' . sanitize_text_field($arr_menu_global_brand['markup']['title']) . '</a>';

}

<?php
/**
 * The mundane under the hood stuff such as enqueue_scripts and similar type things. Often uses what is defined in the ezbsOptions file.
 *
 * This class supports developers and facilitate their ability to develop a boilerplate foundation that remains flexible and extendable.  
 *
 * @package WPezBoilerStrap
 * @since 0.5.0
 * @author Mark Simchock
 * @license TODO
 */
 
/*
 * == Change Log == 
 *
 */
 
 
/*
 * Typically, a developer has a boilerplate set up that they use from theme to theme. This class aims to simplify that, (one) by rolling it all together 
 * into a single managable go-to unit, as well as (two) make that unit flexible and intelligent by taking advantage of OOP's inheritence and such. That
 * is you can extends this as required and not have to start from scratch repeatedly. 
 */

// No WP? Die! Now!!
if (!defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}


if ( ! class_exists('ezbsModl')) {
  class ezbsModl extends Class_WP_ezClasses_ThemeModl_ezBoilerStrap_Child_Boilerplate{
  
  protected function __construct() {

    parent::__construct();
  } 
		
  public function ezc_init($obj_ezbs_options = NULL){
  }
		
		/**
		 * = = = = = IMPORTANT = = = = =
		 * 
		 * This is also where you can alter any thing. Kinda like a traditional WP filter. Kinda. 
		 */ 
		protected function modl_filter( $str_modl_2, $arr_args){
		
		  return $arr_args;
		}

		/**
		 * = = = = = IMPORTANT = = = = =
		 * 
		 * Don't muck with this. The future of the free world depends on it working right :)
		 */
		static public function get( $str_modl = '' ){
		
		  if ( empty($str_modl) || ! is_string($str_modl) ){
		    return false;
		  }
		  		  	  
		  $str_modl_2 = 'ezm_' . sanitize_key(str_replace('-', '_', $str_modl));
		  
		  if ( method_exists(get_class(), $str_modl_2 ) ){
		   
		     $arr_args = self::$str_modl_2();
		  
		    if ( WP_ezMethods::array_pass($arr_args) ){
			
			  return self::modl_filter( $str_modl_2, $arr_args);
			} else{
		      return false;
		    }
		  } else {
		  
		  	 die ( get_class(). $str_m_method);
			 return false;
		  }
		}
					
	} // end class
}

$ezbsModl = ezbsModl::ezc_get_instance();

?>
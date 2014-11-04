<?php

if ( !class_exists('WP_ezBoilerStrap_Child_Boilerplate') ){
  class WP_ezBoilerStrap_Child_Boilerplate {
  
    function __construct(){
	  add_action('after_setup_theme', array($this, 'ezbs_uno_child_boilerplate_setup'), 20);
	}
	
	
	public function ezbs_uno_child_boilerplate_setup(){
	
	  if ( ! class_exists('ezbsGlobals') ){
	    include_once('/setup/class-wp-ezboilerstrap-globals.php');
	  }
	
	  /**
	   * If There's a child theme and) the child has not included it then lets use the ezbsModl. 
	   */		
	  if ( ! class_exists('ezbsModl') ){
	    include_once('modl/class-wp-ezclasses-thememodl-ezboilerstrap-uno-child-boilerplate.php');
	    include_once('modl/ezbsModl.php');
	  }
    }
			
  
  }
}

$obj_new_wp_ezboilerstrap_child_boilerplate = new WP_ezBoilerStrap_Child_Boilerplate();
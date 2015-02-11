<?php

/**
 * Manually setting up your js. The ezWay.
 */

if (! class_exists('Class_WP_ezBoilerStrap_Document_Ready') ) {
  class Class_WP_ezBoilerStrap_Document_Ready{
  
    public function __construct(){

	  add_action('wp_footer', array($this, 'document_ready'), 100);
	}
	
	public function document_ready(){

	  ob_start()
	  ?>
	  
	  <script type="text/javascript">
	    $ = jQuery;
	    $(document).ready(function() {
	    <?php 
		
		$this->ez_example_method_1();		
		?>
	  });
	  </script>
	  <?php
	  ob_end_flush();
	}
	
	protected function ez_example_method_1(){
	
	  ob_start()
	  ?>
	  $('.foo-bar-selector').ezFooBarJs();
	  <?php
	  ob_end_flush();
	}
		
  }
}

$obj_setup_ezbs_other = new Class_WP_ezBoilerStrap_Document_Ready;
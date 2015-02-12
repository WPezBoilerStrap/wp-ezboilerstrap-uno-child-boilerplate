<?php
/**
 * Theme Modl - This is where all the magic happens.
 *
 * The vues look to the modl for necessary details. Note: This is just an example. Your base modl might be different (which is kinda the whole point).
 *
 * @package WPezBoilerStrap
 * @since 0.5.0
 * @author Mark Simchock
 * @license TODO
 */ 
 
/**
 * == Change Log == 
 *
 */
	
if (! class_exists('Class_WP_ezClasses_ThemeModl_ezBoilerStrap_Child_Boilerplate') ) {
  class Class_WP_ezClasses_ThemeModl_ezBoilerStrap_Child_Boilerplate extends Class_WP_ezClasses_Master_Singleton {	
	

		protected static function __construct() {
			parent::__construct();
		} 
		
		public function ez__construct(){
		
		}
				  
		  /**
		   *
		   */
		  protected static function ezm_menu_global(){
		    
			return array(
			
			  'active' => true,
			  
			  'tp' => array(

			    'menu_global_brand' => array(
				  'slug' => 'vue/menu/menu-global-brand',
				  'name' => '',
				  'active' => true
			      ),				
			    ),
			
			  'markup' => array(
			    'wrap_class' => 'navbar navbar-default TODOnavbar-fixed-top',
				'class_container' => 'container',
			    'navbar_class' => 'navbar-header',
				'navbar_inner_class' => 'navbar-collapse collapse',
				'button_class' => 'navbar-toggle collapsed',
				'button_data_toggle' => 'collapse',
				'data_target' => '#wp-ezbs-menu-global-wnm',  // note: this should correspond with the args defined below. also be sure to include the leading # or .
			    ),
				
			  'menu_args' => self::ezm_menu_global_menu_args(),
			);
		  }

		  /**
		   *
		   */		  
		  protected static function ezm_menu_global_menu_args(){
		  
		    return array(
			  'active' => true,
			  'description' => 'Global Menu',  // key => description is used for register_nav_menus()
			  'theme_location' => 'menu_global',
			  'menu' => 'menu_global',
			  'container_class' => 'collapse navbar-collapse bs-navbar-collapse',
			  'container_id' => 'wp-ezbs-menu-global-wnm',
			  'menu_class' => 'nav navbar-nav navbar-right',
			  'echo' => false,
			  'fallback_cb' => false,
			  'menu_id' => 'wp-ezbs-header-menu-global',
			  'walker' => new Class_WP_ezClasses_Menu_Walker_Bootstrap_3x_1()
			  );  
		  }
		  
		  /**
		   *
		   */
		  protected static function ezm_menu_global_brand(){
			  
		    return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'wrap_id' => 'wp-ezbs-menu-global-class-brand',
				'wrap_class' => 'navbar-brand',
				'title_class' => 'navbar-brand',
				'a_href' => "#", // TODO
				'a_title' => 'Home',
				'title' => 'BoilerStrap Child',
			  ),
			);
		  }
		  
		  /**
		   *
		   */
		   protected static function ezm_menu_main(){
		  
            return array(
			
			  'active' => false,
			  
			  'tp' => array(
			  
			    'menu_main_brand' => array(
				  'slug' => 'vue/menu/menu-main-brand',
				  'name' => '',
				  'active' => true
			      ),				
			    ),
				
			  'markup' => array(
			    'wrap_class' => 'container',
			    'navbar_class' => 'navbar navbar-inverse navbar-relative-top',
				'navbar_inner_class' => 'navbar-inner',
				'button_class' => 'navbar-toggle collapsed',
				'button_data_toggle' => 'collapse',
				'data_target' => '#wp-ezbs-menu-main-wnm',  // note: this should correspond with the args defined below. also be sure to include the leading # or .
			    ),
				
			  'menu_args' => self::ezm_menu_main_menu_args(),
			);
		  }
		  
		  /**
		   *
		   */
		  protected static function ezm_menu_main_menu_args(){
		  
		    return array(
			    'active' => true,
				'description' => 'Main Menu',  // key => description is used for register_nav_menus()
				'theme_location' => 'menu_main',
				'menu' => 'menu_main',
				'container_class' => 'collapse navbar-collapse bs-navbar-collapse',
				'container_id' => 'wp-ezbs-menu-main-wnm',
				'menu_class' => 'nav navbar-nav',
				'echo' => false,
				'fallback_cb' => false,
				'menu_id' => 'wp-ezbs-header-menu-main',
				'walker' => new Class_WP_ezClasses_Menu_Walker_Bootstrap_3x_1()
			  );  
		  }
		  
		  /**
		   *
		   */
		  protected static function ezm_menu_main_brand(){
		  
		    return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'wrap_id' => 'wp-ezbs-menu-main-class-brand',
				'wrap_class' => 'bg-success col-xs-12 visible-xs-block',
				'title_class' => 'TODO',
				'title' => 'Brand: Main Menu',
			  ),			  
			);
		  }
		  
		  /**
		   *
		   */
		  protected static function ezm_menu_footer(){
		
			return array(
			
			  'active' => true,
			  
			  'tp' => array(
			  
			    'menu_footer_brand' => array(
				  'slug' => 'vue/menu/menu-footer-brand',
				  'name' => '',
				  'active' => true
			      ),				
			    ),
				
			  'markup' => array(
			    'wrap_class' => 'container',
			    'navbar_class' => 'navbar navbar-inverse navbar-relative-top',
				'navbar_inner_class' => 'navbar-inner',
				'button_class' => 'navbar-toggle collapsed',
				'button_data_toggle' => 'collapse',
				'data_target' => '#wp-ezbs-menu-footer-wnm',  // note: this should correspond with the args defined below (contanier_id?). also be sure to include the leading # or .
			    ),
				
			  'menu_args' => self::ezm_menu_footer_menu_args(),
			);
		  }
		  
		  
		  /**
		   *
		   */
		  protected static function ezm_menu_footer_menu_args(){
		  
		    return array(
			    'active' => true,
				'description' => 'Footer Menu',  // key => description is used for register_nav_menus()
				'theme_location' => 'menu_footer',
				'menu' => 'menu_footer',
				'container_class' => 'collapse navbar-collapse bs-navbar-collapse',
				'container_id' => 'wp-ezbs-menu-footer-wnm',   
				'menu_class' => 'nav navbar-nav',
				'echo' => false,
				'fallback_cb' => false,
				'menu_id' => 'wp-ezbs-footer-menu',
				'walker' => new Class_WP_ezClasses_Menu_Walker_Bootstrap_3x_1()
			  );  
		  }
		  
		  
		  /**
		   *
		   */
		  protected static function ezm_menu_footer_brand(){
			
		    return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'wrap_id' => 'wp-ezbs-menu-footer-class-brand',
				'wrap_class' => 'bg-danger col-xs-12 visible-xs-block',
				'title_class' => 'TODO',
				'title' => 'Brand: Footer Menu',
			  ),
			  
			);
		  }
		  
		  /**
		   * Breadcrumbs control via WPezClasses > ThemeUI > Breadcrumbs_1
		   */
		  protected static function ezm_breadcrumbs(){
		  
		    $obj_ezc_themeui_breadcrumbs = Class_WP_ezClasses_ThemeUI_Breadcrumbs_1::ez_new();
			
			/**
			 * note: if we don't pass in the ezm_breadcrumbs_args() then that class has defaults. as a matter
			 * of fact ezm_breadcrumbs_args() are those defaults simply as a reference / working model.
			 */
			$arr_ret = $obj_ezc_themeui_breadcrumbs->breadcrumbs(self::ezm_breadcrumbs_args()); 
			
			return array(
			
			  'active' => false,
			  
			  'markup' => array(
			    'container_class' => 'container',
				'row_class' => 'row',
			    'inner_wrap_class' => 'col-xs-12',
			    'control' => $arr_ret['str_to_return']
			    ),
			);
		  }
		  
		  /**
		   * Defaults for the breadcrumbs control
		   */
		  protected static function ezm_breadcrumbs_args(){
		  
		    return array(
			  'home' 				=> '<span class="icon-home"></span>',   // FYI - text / string (e.g., 'Home') is also allowed for breadcrumbs-home
			  'before'				=> '<li class="active">',
			  'after'				=> '</li>',
			  'separator_class'		=> 'icon-chevron-right',
			  'category_label'		=> 'Category: ', // FYI - you can add a span here with a Font Awesome separator if you want to get fancy
			  'search_label'		=> 'Search Term: ',
			  'tag_label'			=> 'Tag: ',
			  'author_label'		=> 'Author: ',
			  '404_label'			=> '404 Error ',
			  'page_open'			=> ' (',
			  'page_label'			=> 'Page ',
			  'page_close'			=> ') ',
			);
		  }
		  
		  /**
		   *
		   */
		  protected static function ezm_header(){

		    return array(
			  'active' => true,
			  
			  'markup' => array(
			    'data_spy' => 'scroll',
				'data_target' => '.bs-docs-sidebar',
				'data_offset' => '10',
			    ),
				
			  'tp' => array(
			  
			    'head' => array(
				  'slug' => 'vue/header/head',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'before_head_tag_close' => array(
				  'slug' => 'vue/header/head-before-head-tag-close',
				  'name' => '',
				  'active' => true
				  ),			  
				  
			    'header_parent' => array(
				  'slug' => 'vue/header/header-parent',
				  'name' => '',
				  'active' => true
			      ),				  
			    ),
			  );
		  }
		  


		  /**
		   *
		   */
		  protected static function ezm_head(){			  
		    
			return array(
			
			  'active' => true,
			  
			  );
		  }

		  /**
		   *
		   */
		  protected static function ezm_header_parent(){			  
		    
			return array(
			  'active' => true,
			  'tp' => array(
			    'header_above' => array(
				  'slug' => 'vue/header/header-above',
				  'name' => '',
				  'active' => true
				  ),
				  
			    'menu_global' => array(
				  'slug' => 'vue/menu/menu-global',
				  'name' => '',
				  'active' => true
				  ),
				  
			    'main_wrap' => array(
				  'slug' => 'vue/header/header-main-wrap',
				  'name' => '',
				  'active' => true
				  ),
				  
			    'menu_main' => array(
				  'slug' => 'vue/menu/menu-main',
				  'name' => '',
				  'active' => true
				  ),
				  
			    'header_below' => array(
				  'slug' => 'vue/header/header-below',
				  'name' => '',
				  'active' => true
				  ),
				  
				),
			  );
		  }
		  
		  /**
		   *
		   */
		  protected static function ezm_header_above(){
			  
		    return array(
			
			  'active' => true,
			  
			  'ds' => array(
			  
			    'one' => array(
				  'active' => true,
				  'index' => 'header-above-one',
				  'markup' => array(
				    'class' => 'header-above-ds-one',
					),
				  ),
				  
			    'two' => array(
				  'active' => true,
				  'index' => 'header-above-two',
				  'markup' => array(
				    'class' => 'header-above-ds-two',
					),
				  ),

			    'three' => array(
				  'active' => true,
				  'index' => 'header-above-three',
				  'markup' => array(
				    'class' => 'header-above-ds-three',
					),
				  ),

			    'four' => array(
				  'active' => true,
				  'index' => 'header-above-four',
				  'markup' => array(
				    'class' => 'header-above-ds-four',
					),
				  ),				  
			    ),
			  );
		  }

		  /**
		   *
		   */
		  protected static function ezm_header_main_wrap(){
		    
			return array(
			
			  'active' => false,
			  
			  'markup' => array(
			    'container_class' => 'container',
				'row_class' => 'row'
			    ),
			  
			  'tp' => array(
			  
			    'logo' => array(
				  'slug' => 'vue/header/header-main-logo',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'main' => array(
				  'slug' => 'vue/header/header-main',
				  'name' => '',
				  'active' => true
			      ),				  
			    ),
		      );
		  }
		  
		  /**
		   *
		   */
		  protected static function ezm_header_main(){
			   
		    return array(
			
			  'active' => true,
			  
			  'ds' => array(
			  
			    'one' => array(
				  'active' => true,
				  'index' => 'header-main-one',
				  'markup' => array(
				    'class' => 'header-main-ds-one',
					),
					
				  ),
				),
			  );
	      }
		  
		  /**
		   *
		   */
		  protected static function ezm_header_main_logo(){
			  
		    return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'left_class' => 'col-xs-3 col-lg-2',
				  'link_class_left' => 'brand',
				  'img_class' => 'img-responsive',
				'right_class' => 'col-xs-9 col-lg-10',
				  'link_class_right' => 'brand',
				),
			  );
		  }

		  /**
		   *
		   */
		  protected static function ezm_header_below(){ 
		    
			return array(
			
			  'active' => true,
			  
			  'ds' => array(
			  
			    'one' => array(
				  'active' => true,
				  'index' => 'header-below-one',
				  'markup' => array(
				    'class' => 'header-below-ds-one',
					),
				  ),
				  
			    'two' => array(
				  'active' => true,
				  'index' => 'header-below-two',
				  'markup' => array(
				    'class' => 'header-below-ds-two',
					),
				  ),

			    'three' => array(
				  'active' => true,
				  'index' => 'header-below-three',
				  'markup' => array(
				    'class' => 'header-below-ds-three',
					),
				  ),

			    'four' => array(
				  'active' => true,
				  'index' => 'header-below-four',
				  'markup' => array(
				    'class' => 'header-below-ds-four',
					),
				  ),				  
			    ),
			  );
		  }
		  
		  /**
		   *
		   */
		  protected static function ezm_footer(){
		    
			return array(
			
			  'active' => true,
			  'tp' => array(
			    'footer_parent' => array(
				  'slug' => 'vue/footer/footer-parent',
				  'name' => '',
				  'active' => true
			      ),
			    ),
			  );
	      }
		  

		  /**
		   *
		   */
		  protected static function ezm_footer_parent(){
		  
		    return array(
			
			  'active' => true,
			  
			  'tp' => array(
			  
			    'footer_above' => array(
				  'slug' => 'vue/footer/footer-above',
				  'name' => '',
				  'active' => true
				  ),
				  
				'menu_footer' => array(
				  'slug' => 'vue/menu/menu-footer',
				  'name' => '',
				  'active' => true
				  ),
				  
			    'footer_main' => array(
				  'slug' => 'vue/footer/footer-main',
				  'name' => '',
				  'active' => true
				  ),
				  
			    'footer_below' => array(
				  'slug' => 'vue/footer/footer-below',
				  'name' => '',
				  'active' => true
				  ),
				  
			    'footer_bottom' => array(
				  'slug' => 'vue/footer/footer-bottom',
				  'name' => '',
				  'active' => true
				  ),
				  
				),
			  );
		  }

		  /**
		   *
		   */
		  protected static function ezm_footer_above(){
		  
		    return array(
			
			  'active' => true,
			  
			  'ds' => array(
			  
			    'one' => array(
				  'active' => true,
				  'index' => 'footer-above-one',
				  'markup' => array(
				    'class' => 'footer-above-ds-one',
					),
				  ),
				  
			    'two' => array(
				  'active' => true,
				  'index' => 'footer-above-two',
				  'markup' => array(
				    'class' => 'footer-above-ds-two',
					),
				  ),

			    'three' => array(
				  'active' => true,
				  'index' => 'footer-above-three',
				  'markup' => array(
				    'class' => 'footer-above-ds-three',
					),
				  ),

			    'four' => array(
				  'active' => true,
				  'index' => 'footer-above-four',
				  'markup' => array(
				    'class' => 'footer-above-ds-four',
					),
				  ),				  
			    ),
			  );
		  }
		  
		  /**
		   *
		   */
		  protected static function ezm_footer_main(){

		    return array(
			
			  'active' => true,
			  
			  'ds' => array(
			  
			    'one' => array(
				  'active' => true,
				  'index' => 'footer-main-one',
				  'markup' => array(
				    'class' => 'footer-main-ds-one',
					),
				  ),
				  
			    'two' => array(
				  'active' => true,
				  'index' => 'footer-main-two',
				  'markup' => array(
				    'class' => 'footer-main-ds-two',
					),
				  ),

			    'three' => array(
				  'active' => true,
				  'index' => 'footer-main-three',
				  'markup' => array(
				    'class' => 'footer-main-ds-three',
					),
				  ),

			    'four' => array(
				  'active' => true,
				  'index' => 'footer-main-four',
				  'markup' => array(
				    'class' => 'footer-main-ds-four',
					),
				  ),				  
			    ),
			  );
		   }
		   

		  /**
		   *
		   */
		  protected static function ezm_footer_bottom(){

		    return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'container_class' => 'container',
				'left_class' => 'pull-left',
				'left_text' => '&copy; ' . get_bloginfo('name') . ' ' . date('Y'),
				'right_class' => 'pull-right',
				'right_text' => 'Back to top'
			    ),
			  );
		  }

			  
		  /**
		   *
		   */
		  protected static function ezm_footer_below(){
		  
		    return array(
			
			  'active' => true,
			  
			  'ds' => array(
			    'one' => array(
				  'active' => true,
				  'index' => 'footer-below-one',
				  'markup' => array(
				    'class' => 'footer-below-ds-one',
					),
				  ),
				  
			    'two' => array(
				  'active' => true,
				  'index' => 'footer-below-two',
				  'markup' => array(
				    'class' => 'footer-below-ds-two',
					),
				  ),

			    'three' => array(
				  'active' => true,
				  'index' => 'footer-below-three',
				  'markup' => array(
				    'class' => 'footer-below-ds-three',
					),
				  ),

			    'four' => array(
				  'active' => true,
				  'index' => 'footer-below-four',
				  'markup' => array(
				    'class' => 'footer-below-ds-four',
					),
				  ),				  
			    ),
			  );
		  }
		  
		  /**
		   * = = = = = Start: Index = = = = =
		   */
			 
		  /**
		   * For index.php
		   */
		  protected static function ezm_index(){
			 
			return array(
			
			  'active' => true,
			  'tp' => array(
			  
			    'index_parent' => array(
				  'slug' => 'vue/index/index-parent',
				  'name' => '',
				  'active' => true
			      ),
				  
			    ),
			  );
		  }
		  
		  /**
		   *
		   */
		  protected static function ezm_index_parent(){

			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'container_class' => 'container clearfix',
				'row_class' => 'row content',
			  ),
				
			  'tp' => array(
			  
			    'breadcrumbs' => array(
				  'slug' => 'vue/shared/breadcrumbs',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'content_above_above' => array(
				  'slug' => 'vue/archive/archive-content-above-above',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'content_above' => array(
				  'slug' => 'vue/shared/content-above',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'content_above_below' => array(
				  'slug' => 'vue/archive/archive-content-above-below',
				  'name' => '',
				  'active' => true
			      ),
				
			    'aside_left' => array(
				  'slug' => 'vue/shared/aside-left-wrap',
				  'name' => '',
				  'active' => true
			      ),
				
			    'main' => array(
				  'slug' => 'vue/index/index-content-center',
				  'name' => '',
				  'active' => true
			      ),
				
			    'aside_right' => array(
				  'slug' => 'vue/shared/aside-right-wrap',
				  'name' => '',
				  'active' => true
			      ),
				
			    ),
			  );
		  }
			  

		  /**
		   *
		   */
		  protected static function ezm_index_content_center(){
		  
			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'wrap_class' => 'some bs3 class here'
				
			  ),
			  
			  'tp' => array(
			  
			    'archive_header' => array(
				  'slug' => 'vue/archive/archive-header',
				  'name' => '',
				  'active' => true				  
				  ),
			  
			    'next_prev' => array(
				  'slug' => 'vue/index/index-next-prev-control',
				  'name' => '',
				  'active' => true				  
				  ),
				  
			    'sort' => array(
				  'slug' => 'vue/index/index-sort-control',
				  'name' => '',
				  'active' => true				  
				  ),
			  
			    'have_posts' => array(
				  'slug' => 'vue/index/index-content-center-have-posts',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'content_below_above' => array(
				  'slug' => 'vue/archive/archive-content-below-above',
				  'name' => '',
				  'active' => true
			      ),				  
				  
			    'content_below' => array(
				  'slug' => 'vue/shared/content-below',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'content_below_below' => array(
				  'slug' => 'vue/archive/archive-content-below-below',
				  'name' => '',
				  'active' => true
			      ),				  
			  ),
			);
		  }
		  
		  /**
		   *
		   */
		  protected static function ezm_index_next_prev_control(){
		  
		    $obj_ezc_themeui_next_prev = Class_WP_ezClasses_ThemeUI_Next_Prev_Control_1::ez_new();
			
			// note: we could pass in cusotmization args but we'll stick with the class' defaults. at least for now. 
			$arr_ret = $obj_ezc_themeui_next_prev->next_prev( self::ezm_index_next_prev_control_args() ); 

			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'class' => 'TODO some bootstrap class here',
			    'control' => $arr_ret['str_to_return']
			    ),
			);
		  }
		  
		  		  /**
		   *
		   */
		  protected static function ezm_index_next_prev_control_args(){
		  
		    return array(
			  'ul_class' 			=> 'ezbs-pager',
			  'li_class_next'		=> 'ezbs-next',
			  'li_class_prev'		=> 'ezbs-previous',
			  'next'				=> 'Next ',
			  'next_class'			=> 'icon-chevron-right',  
			  'newer'				=> ' Newer',
			  'newer_class'			=> 'meta-nav ' . 'icon-chevron-right',
			  'previous'			=> 'Prev',
			  'previous_class'		=> 'icon-chevron-left',
			  'older'				=> 'Older ',
			  'older_class'			=> 'meta-nav ' . 'icon-chevron-left',
			);
		  }
		  
		  
		  
		  /**
		   *
		   */
		  protected static function ezm_index_sort_control(){
		  
		    $obj_ezc_themeui_sort = Class_WP_ezClasses_ThemeUI_Sort_Control_1::ez_new();
			
			// 
			$arr_ret = $obj_ezc_themeui_sort->sort(self::ezm_index_sort_control_args()); 

			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'class' => 'TODO some bootstrap class here',
			    'control' => $arr_ret['str_to_return'],
			    ),
			);
		  }

		  /**
		   *
		   */
		  protected static function ezm_index_sort_control_args(){
		  
		    $arr_defaults_labels = array(
			 
			  'label_post_date'					=> 'Date',	// format: label- . value from label_order array
			  'label_post_date_hover_title'		=> 'Sort on Date', // format: label- . value from label_order array . -hover-title
			  'label_title'						=> 'Title',
			  'label_title_hover_title'			=> 'Sort on Title',
			  'label_author_name'					=> 'Author',
			  'label_author_name_hover_title' 	=> 'Sort on Author',
			  'label_comment_count'				=> 'Popular',
			  'label_comment_count_hover_title'	=> 'Sort on Comment Count',
			  'label_rand'						=> 'Random',
			  'label_rand_hover_title'			=> 'Surprize me',
			  );
			
			$arr_defaults = array(
			
			  'status'				=> true, 
			  'label_order'			=> array('post_date', 'title', 'author_name','comment_count','rand'), // display order left to right. 
			  'labels' 				=> '', // $arr_defaults_labels will go here
			  'blank_class'			=> 'icon-sign-blank opacity-zero',  // TODO 
			  'ul_class'				=> 'nav nav-tabs',  // FYI - you might also wish to try Bootstrap nav-pills
			  'li_class'				=> 'menu-item',
			  'sort_up_class'			=> 'icon-chevron-up', 		//
			  'sort_down_class'		=> 'icon-chevron-down',	// Theses are here and not in the UX section because that's how wpezClasses does it. 
			  'sort_random_class'		=> 'icon-repeat',		//
			);
			
			$arr_defaults['labels'] = $arr_defaults_labels;
						 
			return $arr_defaults;
		 }

		  /**
		   *
		   */
		  protected static function ezm_index_content_center_have_posts(){	
			  
			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'wrap_class' => 'some BS3 class',
				'title_tag' => 'h1',
				'title_class' => 'some BS3 class',
				'img_wrap_class' => 'some BS3 class',
				'excerpt_wrap_class' => 'some BS3 class',
				
			    'post_id' => 'TODO',
			    'post_class' => 'TODO',
				'permalink' => 'TODO',
				'title' => 'TODO',
				'post_thumbnail_args' => array(), // http://codex.wordpress.org/Function_Reference/get_the_post_thumbnail
			    ),
			
			  'tp' => array(
			  
			    'meta_above' => array(
				  'slug' => 'vue/index/index-post-meta-above',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'meta_below' => array(
				  'slug' => 'vue/index/index-post-meta-below',
				  'name' => '',
				  'active' => true
			      ),				    
			    ),
			  );
		  }
		  
		  
		  /**
		   * Working but a TODO
		   */
		  protected static function ezm_index_post_meta_above(){	
			  
			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'wrap_class' => 'some BS3 class',
			    ),
			  );
		  }

		  
		  /**
		   * Working but a TODO
		   */
		  protected static function ezm_index_post_meta_below(){	
			  
			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'wrap_class' => 'some BS3 class',
			    ),
			  );
		  }
			  
		  /**
		   * = = = = = End: Index = = = = =
		   */
		   
		  /**
		   * = = = = = Start: Single = = = = =
		   */
		   
		   /**
		    *
			*/
		   protected static function ezm_single(){
		   
		     return array(
			 
			   'active' => true,
			   
			   'tp' => array(
			    
			     'single_parent' => array(
				   'slug' => 'vue/single/single-parent',
				   'name' => '',
				   'active' => true
			       ),
			    )
			  );
		   }
		   
		   /**
		    *
			*/
		   protected static function ezm_single_parent(){
		   
		     return array(
			 
			  'active' => true,
			  
			  'markup' => array(
			    'container' => 'container',
				'row' => 'row',
			    ),
			   
			  'tp' => array(
			    
			    'content_above' => array(
				  'slug' => 'vue/shared/content-above',
				  'name' => '',
				  'active' => true
			      ),
				
			    'aside_left' => array(
				  'slug' => 'vue/shared/aside-left-wrap',
				  'name' => '',
				  'active' => true
			      ),
				
			    'main' => array(
				  'slug' => 'vue/single/single-content-center-wrap',
				  'name' => '',
				  'active' => true
			     ),
				
			    'aside_right' => array(
				  'slug' => 'vue/shared/aside-right-wrap',
				  'name' => '',
				  'active' => true
			      ),
				
			    ),			     
			 );
		  }
		  
		  /**
		   *
		   */
		  protected static function ezm_single_content_center_wrap(){
			  
			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'wrap_class' => 'some bootstrap class here',
				),

			  'tp' => array(
			  
			    'title_above' => array(
				  'slug' => 'vue/shared/title-above',
				  'name' => '',
				  'active' => true
			    ),
				
			    'main' => array(
				  'slug' => 'vue/single/single-content-center',
				  'name' => '',
				  'active' => true
			    ),
							
			    'content_below' => array(
				  'slug' => 'vue/shared/content-below',
				  'name' => '',
				  'active' => true
			    ),
			  ),
			);
		  }	

		  /**
		   *
		   */
		  protected static function ezm_single_content_center(){
			  
			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'wrap_class' => 'some bootstrap class here',
				'title_tag' => 'h1',
				'title_class' => 'h1-class',
			  
			  ),

			  'tp' => array(
			  
			    'title_above' => array(
				  'slug' => 'vue/shared/title-above',
				  'name' => '',
				  'active' => true
			    ),
				
			    'title_below' => array(
				  'slug' => 'vue/shared/title-below',
				  'name' => '',
				  'active' => true
			    ),				
				
			    'single_next_prev' => array(
				  'slug' => 'vue/single/single-next-prev-control',
				  'name' => '',
				  'active' => true
			    ),
							
			    'content_below' => array(
				  'slug' => 'vue/shared/content-below',
				  'name' => '',
				  'active' => true
			    ),
			  ),
			);
		  }

		  /**
		   *
		   */
		  protected static function ezm_single_next_prev_control(){
		  
		    $obj_ezc_themeui_next_prev = Class_WP_ezClasses_ThemeUI_Next_Prev_Control_1::ez_new();
			
			// We'll use the same defaults defined above
			$arr_ret = $obj_ezc_themeui_next_prev->next_prev_single(self::ezm_index_next_prev_control_args()); 

			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'class' => 'TODO some bootstrap class here',
			    'control' => $arr_ret['str_to_return'],
			    ),
			);
		  } 
		  
		  
		  /**
		   * = = = = = End: Single = = = = =
		   */		   
		   
		   
		  /**
		   * = = = = = Start: Archive = = = = =
		   */
		   
		  protected static function ezm_archive_header(){

		    $arr_args = array(
			
			  'active' => false,
			  
			  'markup' => array(
			    'wrap_class' => 'some BS3 class here wp-ezbs-archive-header',
				'title_tag' => 'h2',
				'title_class' => 'title class',			// wraps the title
			    'title' => single_tag_title( '', false ),
				'description_active' => true,
				'description_class' => 'archive-meta',
				'description' => tag_description(),
			    ),
			  
			  );

            if ( is_archive() || is_tag() || is_author() ){
			
			   $arr_args['active'] = true;
			   
			   // TODO
			   // is_tag()
			   // is_author			
			} 
			
			return $arr_args;
		  }
		  
		  /**
		   *
		   */
		  protected static function ezm_archive_content_above_above(){

		    $arr_args = array(
			
			  'active' => false,
			  
			  'markup' => array(
			    'todo' => 'TODO'
			    ),
			  
			  );

            if ( is_archive() || is_tag() || is_author() ){
			
			   $arr_args['active'] = true;
			   
			   // TODO
			   // is_tag()
			   // is_author			
			} 
			
			return $arr_args;
		  }	

		  /**
		   *
		   */
		  protected static function ezm_archive_content_above_below(){

		    $arr_args = array(
			
			  'active' => false,
			  
			  'markup' => array(
			    'todo' => 'TODO'
			    ),
			  
			  );

            if ( is_archive() || is_tag() || is_author() ){
			
			   $arr_args['active'] = true;
			   
			   // TODO
			   // is_tag()
			   // is_author			
			} 
			
			return $arr_args;
		  }			  
		  
		  /**
		   *
		   */
		  protected static function ezm_archive_content_below_above(){

		    $arr_args = array(
			
			  'active' => false,
			  
			  'markup' => array(
			    'todo' => 'TODO'
			    ),
			  
			  );

            if ( is_archive() || is_tag() || is_author() ){
			
			   $arr_args['active'] = true;
			   
			   // TODO
			   // is_tag()
			   // is_author			
			} 
			
			return $arr_args;
		  }	

		  /**
		   *
		   */
		  protected static function ezm_archive_content_below_below(){

		    $arr_args = array(
			
			  'active' => false,
			  
			  'markup' => array(
			    'todo' => 'TODO'
			    ),
			  
			  );

            if ( is_archive() || is_tag() || is_author() ){
			
			   $arr_args['active'] = true;
			   
			   // TODO
			   // is_tag()
			   // is_author			
			} 
			
			return $arr_args;
		  }			  


		  /**
		   * = = = = = End: Archive = = = = =
		   */

		   
			 
		  /**
		   * = = = = = Start: Page = = = = =
		   */
			 
		  /**
		   *
		   */
		  protected static function ezm_page(){		 
			 
			return array(
			
			  'active' => true,
			  
			  'tp' => array(
			  
			    'page_parent' => array(
				  'slug' => 'vue/page/page-parent',
				  'name' => '',
				  'active' => true
			      ),
				  
			    ),
			  );
		  }
		  
		  /**
		   *
		   */
		  protected static function ezm_page_parent(){		  
			  
			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'container' => 'container',
				'row' => 'row content',
			    ),
			  
			  'tp' => array(
			  
			    'breadcrumbs' => array(
				  'slug' => 'vue/shared/breadcrumbs',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'content_above' => array(
				  'slug' => 'vue/shared/content-above',
				  'name' => '',
				  'active' => true
			    ),
				
			    'aside_left' => array(
				  'slug' => 'vue/shared/aside-left-wrap',
				  'name' => '',
				  'active' => true
			    ),
				
			    'main' => array(
				  'slug' => 'vue/page/page-content-center-wrap',
				  'name' => '',
				  'active' => true
			    ),
				
			    'aside_right' => array(
				  'slug' => 'vue/shared/aside-right-wrap',
				  'name' => '',
				  'active' => true
			    ),
				
			    ),
			  );
		   }
		   
		  /**
		   *
		   */
		  protected static function ezm_page_content_center_wrap(){
			  
			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'wrap_class' => 'col-xs-12',
			  
			  ),

			  'tp' => array(
			  
			    'title_above' => array(
				  'slug' => 'vue/shared/title-above',
				  'name' => '',
				  'active' => true
			    ),
				
			    'main' => array(
				  'slug' => 'vue/page/page-content-center',
				  'name' => '',
				  'active' => true
			    ),
							
			    'content_below' => array(
				  'slug' => 'vue/shared/content-below',
				  'name' => '',
				  'active' => true
			    ),
			  ),
			);
		  }
		  
		  /**
		   *
		   */
		  protected static function ezm_page_content_center(){
			
			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'title_tag' => 'h1',
			    'title_class' => 'some class here',
				'content_class' => 'some class here',
			    ),
				
			  'tp' => array(
			  
			    'title_below' => array(
				  'slug' => 'vue/shared/title-below',
				  'name' => '',
				  'active' => true
			      ),
				),
			  );
		   }
			 			  
			/**
			 * = = = = = End: Page = = = = =
			 */

			/**
			 * = = = = = Start: Page - Home = = = = =
			 */
			 
		  /**
		   *
		   */
		  protected static function ezm_page_home(){	
			 
			return array(
			
			  'active' => true,
			  
			  'tp' => array(
			  
			    'home_parent' => array(
				  'slug' => 'vue/page/page-home-parent',
				  'name' => '',
				  'active' => true
			      ),
			    ),
			  );
		  }
		  
		  /**
		   *
		   */
		  protected static function ezm_page_home_parent(){			  
			
			return array(
			
			  'active' => true, 
			  
			  'content' => 'TODO',
			  
			  'markup' => array(
			    'wrap_class' => 'jumbotron masthead',
				'container_class' => 'container',
				'row_class' => 'row content',
				
			  ),
			  
			  'tp' => array(
			  
			    'aside_left' => array(
				  'slug' => 'vue/shared/aside-left-wrap',
				  'name' => '',
				  'active' => true
			    ),
				
			    'main' => array(
				  'slug' => 'vue/page/page-home-content-center',
				  'name' => '',
				  'active' => true
			    ),
				
			    'aside_right' => array(
				  'slug' => 'vue/shared/aside-right-wrap',
				  'name' => '',
				  'active' => true
			    ),
				
			  ),
			);
		  }
			
		  /**
		   *
		   */
		  protected static function ezm_page_home_content_center(){				
			
			return array(
			
			  'active' => true, 
			  
			  'content' => 'TODO',
			  
			  'markup' => array(
			    'wrap_class' => 'TODO',
				'title_tag' => 'h1',
				'title_class' => 'TODO',
				),
			  
			  'tp' => array(
			  
			    'title_above' => array(
				  'slug' => 'vue/shared/title-above',
				  'name' => '',
				  'active' => true
			    ),
				
			    'title_below' => array(
				  'slug' => 'vue/shared/title-below',
				  'name' => '',
				  'active' => true
			    ),
				
			    'content_above' => array(
				  'slug' => 'vue/shared/content-above',
				  'name' => '',
				  'active' => true
			    ),				
				
			    'content_below' => array(
				  'slug' => 'vue/shared/content-below',
				  'name' => '',
				  'active' => true
			    ),
			  ),
			  
			);
		  }
			
			/**
			 * = = = = = End: Page - Home = = = = =
			 */
			 
			/**
			 * = = = = = Start: Search = = = = =
			 */
			 
		  /**
		   *
		   */
		  protected static function ezm_search(){	
			 
			return array(
			
			  'active' => true,
			  
			  'tp' => array(
			  
			    'search_parent' => array(
				  'slug' => 'vue/search/search-parent',
				  'name' => '',
				  'active' => true
			      ),
			    ),
			  );
		  }
		  
		  
		  /**
		   *
		   */
		  protected static function ezm_search_parent(){		  
			  
			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'container' => 'container',
				'row' => 'row content',
			    ),
			  
			  'tp' => array(
			  
			    'breadcrumbs' => array(
				  'slug' => 'vue/shared/breadcrumbs',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'content_above' => array(
				  'slug' => 'vue/shared/content-above',
				  'name' => '',
				  'active' => true
			    ),
				
			    'aside_left' => array(
				  'slug' => 'vue/shared/aside-left-wrap',
				  'name' => '',
				  'active' => true
			    ),
				
			    'main' => array(
				  'slug' => 'vue/search/search-content-center',
				  'name' => '',
				  'active' => true
			    ),
				
			    'aside_right' => array(
				  'slug' => 'vue/shared/aside-right-wrap',
				  'name' => '',
				  'active' => true
			    ),
				
			    ),
			  );
		   }
		   
		   
		   /**
		    *
			*/
		   protected static function ezm_search_content_center(){		  
			  
			return array(
			
			  'active' => true,
			  
			  'searchform_custom' => true,
			  
			  'markup' => array(
			    'search_wrap_class' => 'some BS class here',
			    'wrap_class' => 'some BS class here',
			    ),
			  
			  'tp' => array(

			    'searchform_custom' => array(
				  'slug' => 'vue/search/searchform-custom',
				  'name' => '',
				  'active' => true
			      ),
			  
			    'title_above' => array(
				  'slug' => 'vue/shared/title-above',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'search_title' => array(
				  'slug' => 'vue/search/search-title',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'title_below' => array(
				  'slug' => 'vue/shared/title-below',
				  'name' => '',
				  'active' => true
			      ),

			    'next_prev' => array(
				  'slug' => 'vue/index/index-next-prev-control',
				  'name' => '',
				  'active' => true				  
				  ),
				  
			    'sort' => array(
				  'slug' => 'vue/index/index-sort-control',
				  'name' => '',
				  'active' => true				  
				  ),
				  
			    'have_posts' => array(
				  'slug' => 'vue/index/index-content-center-have-posts',
				  'name' => '',
				  'active' => true
			      ),
				  				  
			    'content_below' => array(
				  'slug' => 'vue/shared/content-below',
				  'name' => '',
				  'active' => true
			      ),
			    ),
			  );
		  }
		  
		  protected static function ezm_search_title(){
		  
		    $arr_args = array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'title_tag' => 'h3',
				'title_class' => 'some class here',
			    'title' => 'TODO',
				'query_tag' => 'h1',
				'query_class' => 'some other class here',
				'get_search_query' => get_search_query(),
			  ),
			);
			
			if ( have_posts() ){
			
			  $arr_args['markup']['title'] = 'Search results for: ';
			} else {
			
			  $arr_args['markup']['title'] = 'No matches found for: ';
			}
				
			return $arr_args;
		  }

			 
			/**
			 * = = = = = End: Search = = = = =
			 */
			 
			 
			/**
			 * = = = = = Start: Shared = = = = =
			 */
		  /**
		   *
		   */
		  protected static function ezm_title_above(){	
		  
			return array(
			
			  'active' => true,
			  
			  'ds' => array(
			  
			    'one' => array(
				  'active' => true,
				  'index' => 'title-above',
				  'markup' => array(
				    'class' => 'title-above-ds-one',
					),
				  ),				
			    ),
			  );
		  }

		  /**
		   *
		   */
		  protected static function ezm_title_below(){	
		  
			return array(
			
			  'active' => true,
			  
			  'ds' => array(
			    'one' => array(
				  'active' => true,
				  'index' => 'title-below',
				  'css' => array(
				    'class' => 'title-below-ds-one',
					),
				  ),				
			    ),
			  );
		  }

		  /**
		   *
		   */
		  protected static function ezm_content_above(){
		  
			return array(
			
			  'active' => true,
			  
			  'ds' => array(
			  
			    'one' => array(
				  'active' => true,
				  'index' => 'content-above',
				  'markup' => array(
				    'class' => 'content-above-ds-one',
					),
				  ),				
			    ),
			  );
		  }

		  /**
		   *
		   */
		  protected static function ezm_content_below(){
		  
			return array(
			
			  'active' => true,
			  
			  'ds' => array(
			  
			    'one' => array(
				  'active' => true,
				  'index' => 'content-below',
				  'markup' => array(
				    'class' => 'content-below-ds-one',
					),
				  ),				
			    ),
			  );
          }			  

		  /**
		   *
		   */
		  protected static function ezm_aside_left_wrap(){
		  
			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'wrap_class' => 'some bootstrap class here'
			    ),			 
			  
			  'tp' => array(
			  
			    'main' => array(
				  'slug' => 'vue/shared/aside-left-ds',
				  'name' => '',
				  'active' => true
			      ),
                ),
			);
		  }
		  
		  /**
		   *
		   */
		  protected static function ezm_aside_left_ds(){		  
			  
			return array(
			
			  'active' => true,
			  
			  'ds' => array(
			    'one' => array(
				  'active' => true,
				  'index' => 'aside-left-one',
				  'markup' => array(
				    'wrap_class' => 'aside-left-ds-one',
					),
				  ),
			    'two' => array(
				  'active' => true,
				  'index' => 'aside-left-two',
				  'markup' => array(
				    'wrap_class' => 'aside-left-ds-two',
					),
				  ),
			    'three' => array(
				  'active' => true,
				  'index' => 'aside-left-three',
				  'markup' => array(
				    'wrap_class' => 'aside-left-ds-three',
					),
				  ),
			    'four' => array(
				  'active' => true,
				  'index' => 'aside-left-four',
				  'markup' => array(
				    'wrap_class' => 'aside-left-ds-four',
					),
				  ),				  
			    ),
			  );
		   }
		   
		  /**
		   *
		   */
		  protected static function ezm_aside_right_wrap(){		  
			  
			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'wrap_class' => 'some bootstrap class here'
			    ),			  
			  
			  'tp' => array(
			  
			    'main' => array(
				  'slug' => 'vue/shared/aside-right-ds',
				  'name' => '',
				  'active' => true
			      ),
                ),
			);
	      }

		  /**
		   *
		   */
		  protected static function ezm_aside_right_ds(){
		  
			return array(
			
			  'active' => true,
			  
			  'ds' => array(
			  
			    'one' => array(
				  'active' => true,
				  'index' => 'aside-right-one',
				  'markup' => array(
				    'class' => 'aside-right-ds-one',
					),
				  ),
			    'two' => array(
				  'active' => true,
				  'index' => 'aside-right-two',
				  'markup' => array(
				    'class' => 'aside-right-ds-two',
					),
				  ),
			    'three' => array(
				  'active' => true,
				  'index' => 'aside-right-three',
				  'markup' => array(
				    'class' => 'aside-right-ds-three',
					),
				  ),
			    'four' => array(
				  'active' => true,
				  'index' => 'aside-right-four',
				  'markup' => array(
				    'class' => 'aside-right-ds-four',
					),
				  ),  
				),				  
              );
		   }
 
			/**
			 * = = = = = End: Shared = = = = =
			 */
			 
			/**
			 * = = = = = Start: 404 = = = = =
			 */
			 
		  /**
		   *
		   */
		  protected static function ezm_404(){
			 
			return array(
			
			  'active' => true,
			  
			  'tp' => array(
			  
			    '404_parent' => array(
				  'slug' => 'vue/404/404-parent',
				  'name' => '',
				  'active' => true
			      ),
			    ),
			  );
		  }

		  /**
		   *
		   */
		  protected static function ezm_404_parent(){
		  
			return array(
			
			  'active' => true, 
			  
			  'content' => 'TODO',
			  
			  'markup' => array(
			    'wrap_class' => 'jumbotron subhead clearfix',
				'container_class' => 'container',
				'row_class' => 'row content',
			    ),
				
			  'tp' => array(
			  
			    'aside_left' => array(
				  'slug' => 'vue/shared/aside-left-wrap',
				  'name' => '',
				  'active' => true
			    ),
				
			    'main' => array(
				  'slug' => 'vue/404/404-content-center-wrap',
				  'name' => '',
				  'active' => true
			    ),
				
			    'aside_right' => array(
				  'slug' => 'vue/shared/aside-right-wrap',
				  'name' => '',
				  'active' => true
			    ),
			  ),
			);
		  }

			
		  /**
		   *
		   */
		  protected static function ezm_404_content_center_wrap(){
		  
			return array(
			
			  'active' => true,
			  
			  'content' => 'TODO',
			  
			  'markup' => array(
			    'class' => 'TODO',
				),			  
			  
			  'tp' => array(
			  
			    'title_above' => array(
				  'slug' => 'vue/shared/title-above',
				  'name' => '',
				  'active' => true
			    ),
				
			    'title_below' => array(
				  'slug' => 'vue/shared/title-below',
				  'name' => '',
				  'active' => true
			    ),
				
			    'main' => array(
				  'slug' => 'vue/404/404-content-center',
				  'name' => '',
				  'active' => true
			    ),
							
			    'content_below' => array(
				  'slug' => 'vue/shared/content-below',
				  'name' => '',
				  'active' => true
			    ),
			  ),

			  );
		  }
			  
		  /**
		   *
		   */
		  protected static function ezm_404_content_center(){
		  
			return array(
			
			  'active' => true,
			  
			  'content' => 'TODO',
			   
			  'markup' => array(
			    'title_tag' => 'h1',
				'title_class' => 'TODO',
			    'title' => '404_content_center: Headline',
				'lead_class' => 'lead',
				'lead' => '404_content_center: Lead',
			    'inner_wrap_class' => 'well',
				),
				
			  'searchform_custom' => true,					
			  
			  'tp' => array(
			  
			    'searchform_custom' => array(
				  'slug' => 'vue/search/searchform-custom',
				  'name' => '',
				  'active' => true
			      ),
			    ),
			  );
		  }

			/**
			 * = = = = = End: 404 = = = = =
			 */
			 
			/**
			 * = = = = = Start: Search = = = = =
			 */
		  /**
		   *
		   */
		  protected static function ezm_searchform_custom(){			 
			
			return array(
			  
			  'active' => true,
			  'markup' => array(
			    'form_id' => 'searchform',
				'action' => home_url( '/' ),
				'label_bool' => true,
				'label_class' => 'screen-reader-text',
				'label_value' => 'TODO searchform_custom: label_value',
                'empty_input_class' => 'empty-input-class',
				'empty_input_id' => 'empty-id',
				'empty_input_placeholder' => 'empty placeholder',
                'input_class' => 'input-class',
                'input_id' => 'input_id',
                'input_value' => get_search_query(),
                'button_class' => 'button-class',
				'button_id' => 'button-id',
				'button_value' => 'button-value',
			    ),
			);
		  }
			 
			/**
			 * = = = = = End: Search = = = = =
			 */
							
	} // end class
}
<?php

/**********************************
 * ADD CSS CLASS TO BODY
 **********************************/
function whiterogue_add_class( $classes ) {
	if ( 'page' == get_option( 'show_on_front' ) && ( '' != get_option( 'page_for_posts' ) ) && is_front_page() ) {
		$classes[] = 'front-page';
	}
	return $classes;
}
add_filter( 'body_class','whiterogue_add_class' );


/**********************************
 * REGISTERS WIDGET AREAS
 **********************************/
function whiterogue_widgets_init() {
	register_sidebar(array(
		'name'          => 'Histórias Sidebar',
		'id'            => 'historias-sidebar',
		'before_widget' => '<li id="%1$s" class="whiterogue-container %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="instaapp-title">',
		'after_title'   => '</h3>',
	));
	register_sidebar(array(
		'name'          => 'Notícias Sidebar',
		'id'            => 'noticias-sidebar',
		'before_widget' => '<li id="%1$s" class="whiterogue-container %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="instaapp-title">',
		'after_title'   => '</h3>',
	));
    	register_sidebar(array(
		'name'          => 'Histórias Sidebar (Single)',
		'id'            => 'historias-single-sidebar',
		'before_widget' => '<li id="%1$s" class="whiterogue-container %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="instaapp-title">',
		'after_title'   => '</h3>',
	));
        register_sidebar(array(
		'name'          => 'Notícias Sidebar (Single)',
		'id'            => 'noticias-single-sidebar',
		'before_widget' => '<li id="%1$s" class="whiterogue-container %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="instaapp-title">',
		'after_title'   => '</h3>',
	));
        register_sidebar(array(
		'name'          => 'Faq Sidebar',
		'id'            => 'faq-sidebar',
		'before_widget' => '<li id="%1$s" class="whiterogue-container %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="instaapp-title">',
		'after_title'   => '</h3>',
	));
        register_sidebar(array(
		'name'          => 'Generic Sidebar',
		'id'            => 'generic-sidebar',
		'before_widget' => '<li id="%1$s" class="whiterogue-container %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="instaapp-title">',
		'after_title'   => '</h3>',
	));
}
add_action( 'widgets_init', 'whiterogue_widgets_init' );


/**********************************
 * SETUP THE WHITEROGUE THEME
 **********************************/
/* DESCRIPTION:
 * @uses register_nav_menu() To add support for a navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 */
function whiterogue_theme_setup() {
	
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	add_theme_support( 'title-tag' );

	$pre_options = ( get_option('option_tree') != '' ) ? get_option( 'option_tree' ) : false ;
	if ( $pre_options) {
		$header_image = whiterogue_get_option( 'whiterogue_frontslider_stype' );
	} else {
		$header_image = get_template_directory_uri() . '/images/slider-1.jpg';
	}

	add_theme_support( 'custom-header', array( 'flex-width' => true, 'width' => 1600, 'flex-height' => true, 'height' => 500, 'default-image' => $header_image ) );

	// This theme allows users to set a custom background.
	add_theme_support( 'custom-background', apply_filters( 'whiterogue_custom_background_args', array('default-color' => 'ffffff', ) ) );

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 770, 348, true );
	add_image_size( 'instaapp_standard_img',770,348,true);  //standard size
	
	/**
	* SETS UP THE CONTENT WIDTH VALUE BASED ON THE THEME'S DESIGN.
	*/
	global $content_width;
	if ( ! isset( $content_width ) ){
	      $content_width = 900;
	}
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'Header' => 'Menu Principal',
	));
}
add_action( 'after_setup_theme', 'whiterogue_theme_setup' );


/**********************************
 * ADD THE CUSTOMIZER
 **********************************/
require get_template_directory() . '/includes/customizer.php';


/**********************************
 * ADD THE WHITEROGUE FRAMEWORK
 **********************************/
require_once get_template_directory().'/includes/instaapp-enqueue.php';                  			// ENQUEUE CSS SCRIPTS
require_once get_template_directory().'/includes/instaapp-breadcrumb.php';               			// INCLUDE BREADCRUMB

/***************** EXCERPT LENGTH ************/
function whiterogue_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'whiterogue_excerpt_length');

/***************** READ MORE ****************/
function whiterogue_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'whiterogue_excerpt_more');


/**********************************
 * GET OPTION HELPER
 **********************************/
/* Helper function to return the option value.
 * If no value has been saved, it returns $default.
 *
 * @param     string    The option ID.
 * @param     string    The default option value.
 * @return    mixed
 *
 * @access    public
 * @since     2.0
 */
if ( ! function_exists( 'whiterogue_get_option' ) ) {

  function whiterogue_get_option( $option_id, $default = '' ) {
    
    /* get the saved options */ 
    $options = get_option( 'option_tree' );
    

    /* look for the saved value */
    if ( isset( $options[$option_id] ) && '' != $options[$option_id] ) {

      return whiterogue_wpml_filter( $options, $option_id );
      
    }
    
    return $default;
    
  }
  
}

/**
 * Filter the return values through WPML
 *
 * @param     array     $options The current options    
 * @param     string    $option_id The option ID
 * @return    mixed
 *
 * @access    public
 * @since     2.1
 */
if ( ! function_exists( 'whiterogue_wpml_filter' ) ) {

  function whiterogue_wpml_filter( $options, $option_id ) {
      
    // Return translated strings using WMPL
    if ( function_exists('icl_t') ) {
      
      $settings = get_option('option_tree_settings');
      
      if ( isset( $settings['settings'] ) ) {
      
        foreach( $settings['settings'] as $setting ) {
          
          // List Item & Slider
          if ( $option_id == $setting['id'] && in_array( $setting['type'], array( 'list-item', 'slider' ) ) ) {
          
            foreach( $options[$option_id] as $key => $value ) {
          
              foreach( $value as $ckey => $cvalue ) {
                
                $id = $option_id . '_' . $ckey . '_' . $key;
                $_string = icl_t( 'Theme Options', $id, $cvalue );
                
                if ( ! empty( $_string ) ) {
                
                  $options[$option_id][$key][$ckey] = $_string;
                  
                }
                
              }
            
            }
          
          // All other acceptable option types
          } else if ( $option_id == $setting['id'] && in_array( $setting['type'], apply_filters( 'ot_wpml_option_types', array( 'text', 'textarea', 'textarea-simple' ) ) ) ) {
          
            $_string = icl_t( 'Theme Options', $option_id, $options[$option_id] );
            
            if ( ! empty( $_string ) ) {
            
              $options[$option_id] = $_string;
              
            }
            
          }
          
        }
      
      }
    
    }
    
    return $options[$option_id];
  
  }

}


/**********************************
 * ADD THE WHITEROGUE SHORTCODES
 **********************************/
/* White Rogue: Shortcodes
 * This shortcode is used for inserting the 'campanha' url parameter passed by the vmassivo email marketing to the
 * LEAD e-mail, if the LEAD comes from the marketing campaing
 *********************/

// This function is used for testing purposes.
function whiterogue_get_campanha($atts) {
    
    $pfb_campanha = filter_input(INPUT_GET,"pfb_campanha",FILTER_SANITIZE_STRING);
    $pfb_referrer = wp_get_referer();
    
    if (empty($pfb_referrer)) {
        $trackinginfo .= 'Referrer não identificado';
    } else {
        $trackinginfo .= $pfb_referrer;
    }
    
    if (empty($pfb_campanha)) {
        $trackinginfo .= 'Campanha não identificada';
    } else {
        $trackinginfo .= $pfb_campanha;
    }
    
    return $trackinginfo;
    
}
add_shortcode('pfb-campanha', 'whiterogue_get_campanha');

// These lines are necessary to make the shortcode work inside contact form 7.
function whiterogue_tracking_info($array) {
    
    $pfb_campanha = filter_input(INPUT_GET,"pfb_campanha",FILTER_SANITIZE_STRING);
    	
    if(wpautop($array['body']) == $array['body']) // The email is of HTML type
        $lineBreak = "<br/>";
    else
        $lineBreak = "\n";

    if (isset ($_SESSION['OriginalRef']) ) {
        $trackinginfo .= 'Usuário veio do site:' . ' ' . $_SESSION['OriginalRef'] . $lineBreak;
    } else {
        $trackinginfo .= 'Usuário veio do site: Problema. Avisar administrador.' . $lineBreak;
    }
    
    if (empty($pfb_campanha)) {
        $trackinginfo .= 'Usuário veio da campanha de email: Não identificada.' . $lineBreak;
    } else {
        $trackinginfo .= 'Usuário veio da campanha de email: ' . $pfb_campanha . $lineBreak;
    }
    
    $array['body'] = str_replace('[tracking-info]', $trackinginfo, $array['body']);

    return $array;

}
add_filter('wpcf7_mail_components', 'whiterogue_tracking_info');

// Set the Original Referrer 
function whiterogue_set_session_values() {

    if (!isset($_SESSION['OriginalRef'])) 
    {
        if(isset($_SERVER['HTTP_REFERER'])) {
            $_SESSION['OriginalRef'] = $_SERVER["HTTP_REFERER"];
        } else {
            $_SESSION['OriginalRef'] = 'Referenciador original não identificado.';
        }
    }

}
add_action('init', 'whiterogue_set_session_values');


/**********************************
 * ADD THE JIGO SHOP WRAPPERS
 **********************************/
remove_action('jigoshop_before_main_content','jigoshop_output_content_wrapper',10);
remove_action( 'jigoshop_after_main_content', 'jigoshop_output_content_wrapper_end', 10);

if( ! function_exists('whiterogue_jigoshop_output_content_wrapper') ) {
	function whiterogue_jigoshop_output_content_wrapper() {
		echo '<div class="main-wrapper-item"><div class="page-content default-pagetemp"><div class="container post-wrap"><div class="row-fluid"><div id="content" class="span12">';
	}
}
add_action('jigoshop_before_main_content','whiterogue_jigoshop_output_content_wrapper',10);

if( ! function_exists('whiterogue_jigoshop_output_content_wrapper_end') ) {
	function whiterogue_jigoshop_output_content_wrapper_end() {
		echo '</div></div></div></div></div>';
	}
}
add_action('jigoshop_after_main_content','whiterogue_jigoshop_output_content_wrapper_end',10);

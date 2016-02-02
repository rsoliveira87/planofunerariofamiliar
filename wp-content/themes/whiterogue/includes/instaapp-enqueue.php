<?php
/************************************************
*  ENQUEUE CSS AND JAVASCRIPT
************************************************/

//ENQUEUE FRONT SCRIPTS
function whiterogue_theme_styles_and_scripts()
{
	global $is_IE;
	$theme = wp_get_theme();

	if($is_IE ) {
		wp_enqueue_style('whiterogue-ie-style',get_template_directory_uri().'/css/ie-style.css', false, $theme->Version  );
		wp_enqueue_style('whiterogue-ie-awesome-stylesheet',get_template_directory_uri().'/css/font-awesome-ie7.css', false, $theme->Version  );
	}
		
	wp_enqueue_script('whiterogue-custom-js', get_template_directory_uri() .'/js/custom.js',array('jquery'),'1.0',1 );
	wp_enqueue_script('comment-reply');
	wp_enqueue_script('hoverIntent');

	wp_enqueue_script('whiterogue-superfish', get_template_directory_uri().'/js/superfish.js',array('jquery'),true,'1.0');
	wp_enqueue_script('whiterogue-AnimatedHeader', get_template_directory_uri().'/js/cbpAnimatedHeader.js',array('jquery'),true,'1.0');
	
	wp_enqueue_style('whiterogue-style', get_stylesheet_uri() );
	wp_enqueue_style('whiterogue-awesome-stylesheet', get_template_directory_uri().'/css/font-awesome.css', false, $theme->Version);

	/*SUPERFISH*/
	wp_enqueue_style('whiterogue-superfish-stylesheet', get_template_directory_uri().'/css/superfish.css', false, $theme->Version);
	wp_enqueue_style('whiterogue-bootstrap-resp-stylesheet', get_template_directory_uri().'/css/bootstrap-responsive.css', false, $theme->Version);
	
	/*GOOGLE FONTS*/
	wp_enqueue_style('whiterogue-googleFontsOpensans','//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic', false, $theme->Version);
    
    /*SITE ORIGIN PLUGINS - ADDED BY RGS- White Rogue theme*/
    //all necessary enqueues are in custom.js
    
    /*GOOGLE BOOTSTRAP - ADDED BY RGS- White Rogue theme*/    
    //The boostrapcdn has the accordion and some other functions for js.  No need for it since all we need is inside style.css
    wp_enqueue_script('whiterogue-googleajax-js','//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
    wp_enqueue_script('whiterogue-bootstrapcdn-js','//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js');
    //wp_enqueue_style('whiterogue-bootstrapcdn-css','//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css');
}

function whiterogue_jigoshop_stylesheet() {
    
    if (is_page('cart') || is_page('checkout') || is_page('thanks')) {
        
        /*JIGOSHOP - ADDED BY RGS- White Rogue theme e-commerce enabled*/
        wp_enqueue_script('whiterogue-jigoshop-js', get_template_directory_uri().'/js/formvalidator.js');
        
        /*JIGOSHOP - ADDED BY RGS- White Rogue theme e-commerce enabled - stylesheet must be enqueued last or will be overridden by jigoshops*/
        wp_enqueue_style('whiterogue-jigoshop-stylesheet', get_template_directory_uri().'/css/jigoshop.css');
    
    }
    
    if (is_page('cart')) {
     
        //The blockui js is necessary for the jigoshop cart app.  otherwise the cart will not update upon changing the quantity.
        //For some reason, jigo loads it but it does not work.  need to load again.
        wp_enqueue_script('whiterogue-blockui-js','//cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.66.0-2013.10.09/jquery.blockUI.min.js?ver=2.66.0');
        
    }
    
}


add_action('wp_enqueue_scripts', 'whiterogue_theme_styles_and_scripts');
add_action('wp_enqueue_scripts', 'whiterogue_jigoshop_stylesheet', 20);


function whiterogue_head() {

	if(!is_admin()) {
		require_once(get_template_directory().'/includes/whiterogue-custom-css.php');
	}
	
}
add_action('wp_head', 'whiterogue_head');
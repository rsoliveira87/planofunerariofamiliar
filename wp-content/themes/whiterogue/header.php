<?php
/**
* The Header for our theme.
*/
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3VjtFTL1V92O9NI44eYrQYSiUARlFMnh";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
    
<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?> >
    
    <!-- código do google analytics: não remover -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', '<?php echo get_theme_mod('google_analytics_code', 'UA-69987472-1'); ?>', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- fim do código do google analytics: não remover -->
    
	<div id="wrapper">
		<div id="header_wrap">
			<div id="header-top" class="clearfix">
			<div class="container">      
				<div class="row-fluid"> 

					<!-- Head Topbar Left Section Starts -->
					<div class="span7">
						<!-- Top Contact Info Section Starts -->
						<?php $_head_telefone1 = get_theme_mod('_head_telefone1', '(11) 3071-1325'); ?>
                        <?php $_head_telefone2 = get_theme_mod('_head_telefone2', '(19) 3352-4650'); ?>
                        <?php $_head_telefone3 = get_theme_mod('_head_telefone3', '(21) 3624-2315'); ?>

							<?php if( $_head_telefone1 != '' ) { ?>
							<div class="topbar_info head-phone">
								<i class="fa fa-phone"></i>
                                Ligue Para a Gente:
                            </div>
                            <div class="telefones">
                                <ul id="tel-main" style="display: block;">
                                    <li class="menu-item">
                                        <a href="tel:<?php echo esc_attr($_head_telefone1); ?>"><?php echo esc_attr($_head_telefone1); ?></a>                                           </li>
                                    <li>
                                        <a href="tel:<?php echo esc_attr($_head_telefone2); ?>"><?php echo esc_attr($_head_telefone2); ?></a>                                           </li>
                                    <li>
                                        <a href="tel:<?php echo esc_attr($_head_telefone3); ?>"><?php echo esc_attr($_head_telefone3); ?></a>                                           </li>
                                </ul>
							</div>
						<?php } ?>

						<!-- Top Contact Info Section Ends -->	
					</div>
					<!-- Head Topbar Left Section Ends -->
					
					<!-- Head Topbar Right Section Starts -->
					<div class="span5">

						<!-- Social Links Section -->
						<div class="social_icon">
							<ul class="clearfix">
								<?php if( get_theme_mod('_linkedin_link', '#') != '' ){ ?><li class="linkedin-icon"><a target="_blank" href="<?php echo esc_url( get_theme_mod('_linkedin_link') ); ?>"><span class="fa fa-linkedin" title="Linkedin"></span></a></li><?php } ?>
								<?php if( get_theme_mod('_tumblr_link', '#') != '' ){ ?><li class="tumblr-icon"><a target="_blank" href="<?php echo esc_url( get_theme_mod('_tumblr_link') ); ?>"><span class="fa fa-tumblr" title="Tumblr"></span></a></li><?php } ?>
								<?php if( get_theme_mod('_twitter_link', '#') != '' ){?><li class="tw-icon"><a target="_blank" href="<?php echo esc_url( get_theme_mod('_twitter_link') ); ?>"><span class="fa fa-twitter" title="Twitter"></span></a></li><?php } ?>
								<?php if( get_theme_mod('_fbook_link', '#') != '' ){?><li class="fb-icon"><a target="_blank" href="<?php echo esc_url( get_theme_mod('_fbook_link') ); ?>"><span class="fa fa-facebook" title="Facebook"></span></a></li><?php } ?>
								<?php if( get_theme_mod('_gplus_link', '#') != '' ){ ?><li class="gplus-icon"><a target="_blank" href="<?php echo esc_url( get_theme_mod('_gplus_link') ); ?>"><span class="fa fa-google-plus" title="Google Plus"></span></a></li><?php } ?>
							</ul>
						</div>
						<!-- Social Links Section -->
					</div>
					<!-- Head Topbar Right Section Ends -->
                    
				</div>
			</div>
		    </div>

		<div id="header" class="skehead-headernav clearfix">
			<div class="glow">
				<div id="skehead">
					<div class="container">      
						<div class="row-fluid">      
				            
                            <!-- #description -->
                            <div id="logo" class="span4">
								<div id="site-title" class="logo_desp logo_inner">
								    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name') ?>" ><?php bloginfo('name'); ?></a>
								    <div id="site-description"><?php bloginfo( 'description' ); ?></div>
								</div>
							</div>
				            <!-- #description -->
                            
							<!-- .top-nav-menu --> 
							<div class="top-nav-menu span8">							
								<div class="top-nav-menu">
								    <?php wp_nav_menu(array(
                                        'container_class' => 'instaapp-menu',
                                        'container_id' => 'skenav',
                                        'menu_id' => 'menu-main',
                                        'theme_location' => 'Header' )); ?> 
								</div>
							</div>
							<!-- .top-nav-menu --> 
                            
						</div>
					</div>
				</div>
				<!-- #skehead -->
			</div>
			<!-- glow --> 
		</div>
		<!-- #header -->
		<div class="header-clone"></div>
            
		</div>
        
        <!-- Adiciona a imagem do header -->
        <?php if (!is_front_page()) {
                $file = get_template_directory_uri();
                $file .= '/images/plano-funerario-floresta1.jpg';
                $pagetemplate = basename( get_page_template() );
            
            if ($pagetemplate === 'page-empresa.php' && get_theme_mod('_empresa_bkg_img')) {
                $pagebkg = '_empresa_bkg_img';
                $pageopc = '_empresa_bkg_img_opc';
                $basecolor = '_empresa_bkg_img_base_color';
            } elseif ($pagetemplate === 'page-plano.php' && get_theme_mod('_plano_bkg_img')) {
                $pagebkg = '_plano_bkg_img';
                $pageopc = '_plano_bkg_img_opc';
                $basecolor = '_plano_bkg_img_base_color';
            } elseif ($pagetemplate === 'page-noticias.php' && get_theme_mod('_noticias_bkg_img')) {
                $pagebkg = '_noticias_bkg_img';
                $pageopc = '_noticias_bkg_img_opc';
                $basecolor = '_noticias_bkg_img_base_color';
            } elseif ($pagetemplate === 'page-historias.php' && get_theme_mod('_historias_bkg_img')) {
                $pagebkg = '_historias_bkg_img';
                $pageopc = '_historias_bkg_img_opc';
                $basecolor = '_historias_bkg_img_base_color';        
            } elseif ($pagetemplate === 'page-contato.php' && get_theme_mod('_contato_bkg_img')) {
                $pagebkg = '_contato_bkg_img';
                $pageopc = '_contato_bkg_img_opc';
                $basecolor = '_contato_bkg_img_base_color';
            } elseif ($pagetemplate === 'page-representantes.php' && get_theme_mod('_representantes_bkg_img')) {
                $pagebkg = '_representantes_bkg_img';
                $pageopc = '_representantes_bkg_img_opc';
                $basecolor = '_representantes_bkg_img_base_color';
            } else {
                $pagebkg = '_default_bkg_img';
                $pageopc = '_default_bkg_img_opc';
                $basecolor = '_default_bkg_img_base_color';
            }
        ?>
        
            <div class="sow-slider-base"
                 style="background-color:<?php echo esc_attr(get_theme_mod($basecolor,"#ffffff")); ?> !important">>
                <ul class="sow-slider-images">		
                    <li class="sow-slider-image sow-slider-image-cover" style="background-color: #333333;">
                        <div class="sow-slider-image-container">
                            <div class="sow-slider-image-wrapper">
                                <p><span style="display:block;clear:both;height: 0px;padding-top: 60px;"></span></p>
                            </div>
                        </div>
                        <div class="sow-slider-image-overlay sow-slider-image-cover" 
                             style="background-image: url(<?php echo esc_attr(get_theme_mod($pagebkg, $file)); ?>);
                                    opacity:<?php echo esc_attr(get_theme_mod($pageopc, '1')); ?> !important;">
                    </li>
                </ul>
            </div>
        <?php } ?>
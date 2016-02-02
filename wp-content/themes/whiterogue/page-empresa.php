<?php 
/**
* The template for displaying the EMPRESA page.
*/
get_header();

?>

<!-- Top Row // -->
<div id="featured-box" class="instaapp-section">
	<!-- container -->
	<div class="container">
		<!-- row-fluid -->
		<div class="mid-box-mid row-fluid">
    
			<!-- Featured Box 2 -->
			<div class="mid-box span12">
				<div class="instaapp-iconbox iconbox-top">		
					<div class="iconbox-icon instaapp-viewport">
						<div class="featured_inner">
                            
                            <?php echo do_shortcode('[spacer height="-30px"]') ?>
							<div class="featured_icon">
                                <i class=<?php echo esc_attr(get_theme_mod('_empresa_logo_img')); ?>></i>
							</div>
				            <h4><?php echo esc_attr(get_theme_mod('_empresa_titulo','Nós somos a Aleah Brasil')); ?></h4>
						</div>
					</div>		
					<div class="iconbox-content">		
						<p><?php echo esc_attr(get_theme_mod('_empresa_descricao_texto','Nós valorizamos e respeitamos toda a vida - e também as suas histórias. As de nossos pais, filhos, entes queridos que nos deixaram. Dizemos isso com orgulho a nossos clientes quando os ouvimos no momento mais difícil de suas vidas. Cada lembrança conosco compartilhada é uma marca indelével em nosso futuro. Enaltece a razão pela qual existimos. Desde sua fundação a Aleah Brasil já assistiu a mais de 5.000 famílias em diversos estados do país. Além das coberturas oferecidas pelo Plano Funerário Brasil, a Aleah também oferece assistência emergencial para cremações e sepultamentos, cremação de ossadas, de restos mortais e de pets, além de uma ampla gama de serviços funerários de traslado de corpos para dentro e fora do país. Temos ainda canais de venda de coroas de flores, arranjos póstumos e de urnas cinerárias.')); ?></p>
                        <p> </p>
                            <?php echo do_shortcode('[spacer height="-70px"]') ?>
                            <div class="whiterogue-homepage">
                                <a href="<?php echo esc_attr(get_theme_mod('_empresa_btn_link','http://www.aleah.com.br')); ?>">
                                    <?php echo esc_attr(get_theme_mod('_empresa_btn','Conheça a Aleah')); ?></a>
                            </div>

					</div>			
				</div>
			</div>
        </div>
    </div>
</div>

<!-- First Row // -->
<div id="featured-box" class="instaapp-section">
	<!-- container -->
	<div class="container">
		<!-- row-fluid -->
		<div class="mid-box-mid row-fluid">
            
			<!-- Featured Box 1 -->
			<div class="mid-box span4">
				<div class="instaapp-iconbox iconbox-top">		
					<div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
						<div class="featured_inner">
							<div class="featured_icon">
								<i class="fa <?php echo esc_attr(get_theme_mod('_empresa_box1_icone','fa-check-square-o')); ?>"></i>
							</div>
				            <h4><?php echo esc_attr(get_theme_mod('_empresa_box1_titulo','Nossa Missão')); ?></h4>
						</div>
					</div>
					<div class="iconbox-content">		
						<p><?php echo esc_attr(get_theme_mod('_empresa_box1_texto','Ajudar a passagem.  Amenizar a dor.  Facilitar a vida.')); ?></p></p>
					</div>			
				</div>
			</div>

			<!-- Featured Box 2 -->
			<div class="mid-box span4">
				<div class="instaapp-iconbox iconbox-top">		
					<div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
						<div class="featured_inner">
							<div class="featured_icon">
                                <i class="fa <?php echo esc_attr(get_theme_mod('_empresa_box2_icone','fa-eye')); ?>"></i>
							</div>
				            <h4><?php echo esc_attr(get_theme_mod('_empresa_box2_titulo','Nossa Visão')); ?></h4>
						</div>
					</div>		
					<div class="iconbox-content">		
						<p><?php echo esc_attr(get_theme_mod('_empresa_box2_texto','Um mundo com mais dignidade pelo amor e carinho com nossos entes queridos.')); ?></p>
					</div>			
				</div>
			</div>
			
			<!-- Featured Box 3 -->
			<div class="mid-box span4">
				<div class="instaapp-iconbox iconbox-top">
					<div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
						<div class="featured_inner">
							<div class="featured_icon">
                                <i class="fa <?php echo esc_attr(get_theme_mod('_empresa_box3_icone','fa-thumbs-o-up')); ?>"></i>
							</div>
							<h4><?php echo esc_attr(get_theme_mod('_empresa_box3_titulo','Nossos Valores')); ?></h4>
						</div>
					</div>		
					<div class="iconbox-content">		
						<p><?php echo esc_attr(get_theme_mod('_empresa_box3_texto','Atenção. Cuidado. Carinho. Excelência. Dignidade.')); ?></p>
					</div>				
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- row-fluid -->
	</div>
	<!-- container -->
</div>

<?php get_footer(); ?>
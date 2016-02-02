<?php

get_header();

?>

    <div class="sow-slider-base"
         style="background-color:<?php echo esc_attr(get_theme_mod('_home_bkg_img_base_color',"#ffffff")); ?>">
        <ul class="sow-slider-images">
            <?php $file = get_template_directory_uri();?>
            <?php $file .= '/images/plano-funerario-floresta1.jpg';?>
            <li class="sow-slider-image sow-slider-image-cover"
                style="background-image: url(<?php echo esc_attr(get_theme_mod('_home_bkg_img',$file)); ?>);
                       opacity: <?php echo esc_attr(get_theme_mod('_home_bkg_img_opc',1)); ?> !important;" >
                <div class="sow-slider-image-container">
                    <div class="sow-slider-image-wrapper">
                        <?php echo do_shortcode('[spacer height="40px"]') ?>
                        <div class="row-fluid">
                            <div class="whiterogue-homepage span7">
                                <?php echo do_shortcode('[spacer height="80px"]') ?>
                                <h1><?php echo esc_attr(get_theme_mod('_home_linha1','Conheça Nossos')); ?></h1>
                                <h1><?php echo esc_attr(get_theme_mod('_home_linha2','Planos Funerários')); ?></h1>
                                <?php echo do_shortcode('[spacer height="30px"]') ?>
                                <h2><?php echo esc_attr(get_theme_mod('_home_linha3','Sem limite de idade. Sem comprovação de saúde.')); ?></h2>
                                <h2><?php echo esc_attr(get_theme_mod('_home_linha4','A solução perfeita para você.')); ?></h2>
                                <?php echo do_shortcode('[spacer height="40px"]') ?>
                                    <a href="<?php echo esc_attr(get_theme_mod('_home_btn_link',
                                             'http://www.youtube.com.br/embed/WCiiLD5y7r4?autoplay=1&rel=0')); ?>"
                                       class="popup">
                                        <?php echo esc_attr(get_theme_mod('_home_btn','Assista ao Vídeo')); ?></a>
                                    <?php if (get_theme_mod('_home_ativar_ecommerce', 'on') == 'on') { ?>
                                               <div>
                                               <?php
                                               if (get_theme_mod('_home_ativar_ecommerce_type', 'PFB') == 'PFB') {
                                                    $shortcode = '[add_to_cart_url id="';
                                                    $shortcode .= esc_attr(get_theme_mod('_home_adquira_btn_link','183'));
                                                    $shortcode .= '"]'; ?>

                                                    <a href="<?php echo do_shortcode($shortcode); ?>">
                                                        <?php echo esc_attr(get_theme_mod('_home_adquira_btn','Adquira Online!')); ?></a>
                                               <?php } elseif (get_theme_mod('_home_ativar_ecommerce_type') == 'PFF' ) {
                                                            $file = home_url() . '/subscribe'; ?>
                                                            <a href="<?php echo $file; ?>">
                                                                <?php echo get_theme_mod('_home_adquira_btn','Adquira Online!'); ?></a> 
                                               <?php } ?>
                                                    <?php $file = home_url() . '/login'; ?>
                                                    <a href="<?php echo $file; ?>" class="whiterogue-simple-link">Já sou cadastrado</a>
                                               </div>
                                    <?php }?>
                            </div>
                            <div class="whiterogue-homepage-form span5">
                                <?php echo do_shortcode('[spacer height="100px"]') ?>
                                <?php echo do_shortcode('[contact-form-7 id="4" title="Novo Form teste"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>				

    </div>



<!-- BOX DO COMO FUNCIONA -->
<div id="featured-box" class="instaapp-section">

    <?php 
	$_featured_heading 		= esc_attr( get_theme_mod('_featured_heading', 'COMO FUNCIONA') );
	
	$_featured_title1 		= esc_attr( get_theme_mod('_fb1_first_part_heading', 'ESCOLHA O PLANO') );
	$_featured_iconclass1   = esc_attr( get_theme_mod('_fb1_first_icon_class', 'fa-file-text-o') );
	$_featured_content1 	= wp_kses_post( get_theme_mod('_fb1_first_part_content', 'Após preencher o formulário acima entraremos em contato por e-mail ou telefone para lhe apresentar plano e esclarecer todos os detalhes.') );	
	
	$_featured_title2 		= esc_attr( get_theme_mod('_fb2_second_part_heading', 'ASSINE O CONTRATO') );
	$_featured_iconclass2   = esc_attr( get_theme_mod('_fb2_second_icon_class', 'fa-edit') );
	$_featured_content2 	= wp_kses_post( get_theme_mod('_fb2_second_part_content','Escolhido o plano de cremação ou sepultamento, o próximo passo é assinar o contrato que prevê o nome do conveniado e o nome da pessoa assistida (coberta) pelo plano.') );	

	$_featured_title3 		= esc_attr( get_theme_mod('_fb3_third_part_heading', 'ACIONE NO EVENTO') );
	$_featured_iconclass3   = esc_attr( get_theme_mod('_fb3_third_icon_class', 'fa-ambulance') );
	$_featured_content3 	= wp_kses_post( get_theme_mod('_fb3_third_part_content', 'Quando ocorrer o evento do óbito da pessoa assistida, basta que o conveniado ou alguém da família nos ligue 24H. Pronto. A partir daí nós cuidamos de tudo, com toda a atenção que você merece.') );
	
    ?>
    
	<!-- container -->
	<div class="container">
		<?php if (isset($_featured_heading) && $_featured_heading !='') { ?><h2 class="section_heading"><?php echo $_featured_heading; ?></h2><?php } ?>

		<!-- row-fluid -->
		<div class="mid-box-mid row-fluid">

		<?php if($_featured_title1 || $_featured_iconclass1 || $_featured_content1) { ?>
			<!-- Featured Box 1 -->
			<div class="mid-box span4">
				<div class="instaapp-iconbox iconbox-top">		
					<div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
						<div class="featured_inner">
							<div class="featured_icon">
								<?php if($_featured_iconclass1) { ?>	
									<i class="fa <?php if ( isset($_featured_iconclass1) && $_featured_iconclass1 !='') { echo $_featured_iconclass1;  } ?>"></i>
								<?php } ?>
							</div>
							<?php if($_featured_title1) { ?><h4><?php echo $_featured_title1; ?></h4><?php } ?>
						</div>
					</div>
					<div class="iconbox-content">		
						<p><?php if($_featured_content1) { echo $_featured_content1; } ?></p>
					</div>			
				</div>
			</div>
			<?php } ?>

			<?php if($_featured_title2 || $_featured_iconclass2 || $_featured_content2) { ?>
			<!-- Featured Box 2 -->
			<div class="mid-box span4">
				<div class="instaapp-iconbox iconbox-top">		
					<div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
						<div class="featured_inner">
							<div class="featured_icon">
								<?php if($_featured_iconclass2) { ?>	
									<i class="fa <?php if ( isset($_featured_iconclass2) && $_featured_iconclass2 !='' ) { echo $_featured_iconclass2;  } ?>"></i>
								<?php } ?>
							</div>
							<?php if($_featured_title2) { ?><h4><?php echo $_featured_title2; ?></h4><?php } ?>
						</div>
					</div>		
					<div class="iconbox-content">		
						<p><?php if($_featured_content2) { echo $_featured_content2; } ?></p>
					</div>			
				</div>
			</div>
			<?php } ?>
			
			<?php if($_featured_title3 || $_featured_iconclass3 || $_featured_content3) { ?>
			<!-- Featured Box 3 -->
			<div class="mid-box span4">
				<div class="instaapp-iconbox iconbox-top">
					<div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
						<div class="featured_inner">
							<div class="featured_icon">
								<?php if($_featured_iconclass3) { ?>	
									<i class="fa <?php if ( isset($_featured_iconclass3) && $_featured_iconclass3 !='' ) { echo $_featured_iconclass3;  } ?>"></i>
								<?php } ?>
							</div>
							<?php if($_featured_title3) { ?><h4><?php echo $_featured_title3; ?></h4><?php } ?>
						</div>
					</div>		
					<div class="iconbox-content">		
						<p><?php if($_featured_content3) { echo $_featured_content3; } ?></p>
					</div>				
				</div>
			</div>
			<?php } ?>
			<div class="clearfix"></div>
		</div>
		<!-- row-fluid -->
		
	</div>
	<!-- container -->
</div>
<!-- END DO BOX COMO FUNCIONA -->


<!-- BOX DO PARALLAX -->
<div id="full-division-box" class="instaapp-section">
	<div class="container full-content-box" >
		<div class="row-fluid">
			<div class="span12">
				<?php echo do_shortcode( wp_kses_post( get_theme_mod('_para_content_left','O momento da perda de um ente querido é sempre difícil. Quem já passou por isso sabe como é. Para amenizar o sofrimento, pessoas previdentes querem deixar tudo pronto para trazer tranquilidade e organização para o funeral idealizado pela família. Para atender a esta demanda, a Aleah Brasil criou o Plano Funerário Brasil. A Aleah é uma empresa especializada em atendimentos funerais em todo território nacional. Contamos com uma ampla rede credenciada de prestadores de serviços para assistência e segurança da sua família.') ) ); ?>
			</div>
		</div>
	</div>
</div>
<!-- END DO BOX DO PARALLAX -->


<!-- BOX DO PREÇO -->
<?php  if( get_theme_mod('home_pffprecos_sec', 'on') == 'on') { ?>
<div id="front-content-box" class="instaapp-section">
	<div class="container">
		<div class="row-fluid">
			<div class="sections_inner_content">
				<h2 class="section_heading">Preço do Plano Funerário Familiar</h2>
			</div>
		</div>
        <div class="so-widget-sow-price-table so-widget-sow-price-table-atom">
            <div class="ow-pt-columns-atom">
                <div class="ow-pt-column ow-pt-first ow-pt-even" style="width: 25%">
                    <div class="ow-pt-title">
                        Plano Funerário Familiar I
                        <div class="ow-pt-subtitle">
                            Para até 6 pessoas
                        </div>
                    </div>
                    <div class="ow-pt-details">
                        <div class="ow-pt-price">R$ 69,00</div>
                        <div class="ow-pt-per">mês</div>
                    </div>
                    <div class="ow-pt-image">
                        <?php $default = get_template_directory_uri();?>
                        <?php $default .= '/images/plano-funerario-representantes.jpg';?>
                        <img src="<?php echo $default; ?>">
                    </div>
                    <div class="ow-pt-features">
                        <div class="ow-pt-feature ow-pt-feature-even">
                            <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                            <p data-toggle="tooltip" title="O titular do plano funerário tem que ter no máximo 59 anos, 11 meses e 30 dias de idade.">
                                Titular até 60 anos incompletos
                            </p>
                        </div>
                        <div class="ow-pt-feature ow-pt-feature-odd">
                            <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                            <p data-toggle="tooltip" title="O cônjuge do titular do plano funerário tem que ter no máximo 64 anos, 11 meses e 30 dias.">
                                Cônjuge até 65 anos incompletos
                            </p>
                        </div>
                        <div class="ow-pt-feature ow-pt-feature-even">
                            <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                            <p data-toggle="tooltip" title="Os filhos do titular do plano funerário podem ter qualquer idade.">
                                Até 4 filhos de qualquer idade
                            </p>
                        </div>
                        <div class="ow-pt-feature ow-pt-feature-odd">
                            <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                            <p style="display: inline;" data-toggle="tooltip" title="Pai, mãe, sogro ou sogra do titular não podem ser incluídos nesta modalidade de plano funerário.">
                                Não contempla idosos*
                            </p>
                        </div>
                        <div class="ow-pt-feature ow-pt-feature-even">
                            <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                            <p data-toggle="tooltip" title="Carência de 3 meses para causa-morte natural.  Não há carência para causa morte violenta ou acidental.">
                                Carência de 3 meses
                            </p>
                        </div>
                    </div>
                    <?php if (get_theme_mod('_home_ativar_ecommerce', 'on') == 'on') { ?>
                        <div class="ow-pt-button">
                        <a href="http://testurlrgs" class="ow-pt-link broken_link">Contrate Online!</a>    
                        </div>
                    <?php } ?>
                </div>
                <div class="ow-pt-column ow-pt-featured ow-pt-odd" style="width: 25%">
                    <div class="ow-pt-title">
                        Plano Funerário Familiar II
                        <div class="ow-pt-subtitle">
                            Para até 8 pessoas
                        </div>			
                    </div>
                    <div class="ow-pt-details">
                        <div class="ow-pt-price">
                            R$ 89,00
                        </div>
                        <div class="ow-pt-per">
                            mês
                        </div>
                    </div>
                    <div class="ow-pt-image">
                        <img src="<?php echo $default; ?>">
                    </div>
                    <div class="ow-pt-features">
                        <div class="ow-pt-feature ow-pt-feature-even">
                            <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                            <p data-toggle="tooltip" title="O titular do plano funerário tem que ter no máximo 59 anos, 11 meses e 30 dias de idade.">
                                Titular até 60 anos incompletos
                            </p>
                        </div>
                        <div class="ow-pt-feature ow-pt-feature-odd">
                            <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                            <p data-toggle="tooltip" title="O cônjuge do titular do plano funerário tem que ter no máximo 64 anos, 11 meses e 30 dias.">
                                Cônjuge até 65 anos incompletos
                            </p>
                        </div>
                        <div class="ow-pt-feature ow-pt-feature-even">
                            <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                            <p data-toggle="tooltip" title="Os filhos do titular do plano funerário podem ter qualquer idade.">
                                Até 4 filhos de qualquer idade
                            </p>
                        </div>
                        <div class="ow-pt-feature ow-pt-feature-odd">
                            <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                            <p data-toggle="tooltip" title="Esta modalidade do plano funerário contempla a inclusão de até dois idosos, podendo ser pai, mãe, sogro ou sogra do titular.">
                                Até 2 idosos* de até 80 anos
                            </p>
                        </div>
                        <div class="ow-pt-feature ow-pt-feature-even">
                            <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                            <p data-toggle="tooltip" title="Carência de 6 meses para causa-morte natural.  Não há carência para causa morte violenta ou acidental.">
                                Carência de 6 meses
                            </p>
                        </div>
                    </div>
                    <?php if (get_theme_mod('_home_ativar_ecommerce', 'on') == 'on') { ?>
                        <div class="ow-pt-button">
                            <a href="http://testurlrgs" class="ow-pt-link broken_link">Contrate Online!</a>
                        </div>
                    <?php } ?>
                </div>
                <div class="ow-pt-column ow-pt-even" style="width: 25%">
                    <div class="ow-pt-title">
                        Plano Funerário Familiar III
                        <div class="ow-pt-subtitle">Para até 10 pessoas
                        </div>			
                    </div>
                    <div class="ow-pt-details">
                        <div class="ow-pt-price">
                            R$ 109,00
                        </div>
                        <div class="ow-pt-per">
                            mês
                        </div>
                    </div>
                    <div class="ow-pt-image">
                        <img src="<?php echo $default; ?>">
                    </div>
                    <div class="ow-pt-features">
                        <div class="ow-pt-feature ow-pt-feature-even">
                        <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                            <p data-toggle="tooltip" title="O titular do plano funerário tem que ter no máximo 59 anos, 11 meses e 30 dias de idade.">
                                Titular até 60 anos incompletos
                            </p>
                        </div>
                        <div class="ow-pt-feature ow-pt-feature-odd">
                            <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                            <p data-toggle="tooltip" title="O cônjuge do titular do plano funerário tem que ter no máximo 64 anos, 11 meses e 30 dias.">
                                Cônjuge até 65 anos incompletos
                            </p>
                        </div>
                        <div class="ow-pt-feature ow-pt-feature-even">
                            <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                            <p data-toggle="tooltip" title="Os filhos do titular do plano funerário podem ter qualquer idade.">
                                Até 4 filhos de qualquer idade
                            </p>
                        </div>
                        <div class="ow-pt-feature ow-pt-feature-odd">
                            <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                            <p data-toggle="tooltip" title="Esta modalidade do plano funerário contempla a inclusão de até quatro idosos, podendo ser pai, mãe, sogro ou sogra do titular.">
                                Até 4 idosos* de até 80 anos
                            </p>
                        </div>
                        <div class="ow-pt-feature ow-pt-feature-even">
                            <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                            <p data-toggle="tooltip" title="Carência de 6 meses para causa-morte natural.  Não há carência para causa morte violenta ou acidental.">
                                Carência de 6 meses
                            </p>
                        </div>
                    </div>
                    <?php if (get_theme_mod('_home_ativar_ecommerce', 'on') == 'on') { ?>
                        <div class="ow-pt-button">
                        <a href="http://testurlrgs" class="ow-pt-link broken_link">Contrate Online!</a>
                    </div>
                    <?php } ?>
                </div>
                <div class="ow-pt-column ow-pt-last ow-pt-odd" style="width: 25%">
                    <div class="ow-pt-title">
                        Plano Funerário Familiar IV
                        <div class="ow-pt-subtitle">
                            Para até 10 pessoas
                        </div>
                    </div>
                    <div class="ow-pt-details">
                        <div class="ow-pt-price">R$ 129,00</div>
                        <div class="ow-pt-per">mês</div>
                    </div>
                    <div class="ow-pt-image">
                        <img src="<?php echo $default; ?>">
                    </div>
                    <div class="ow-pt-features">
                        <div class="ow-pt-feature ow-pt-feature-even">
                            <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                            <p data-toggle="tooltip" title="O titular do plano funerário tem que ter no máximo 64 anos, 11 meses e 30 dias de idade.">
                                Titular até 65 anos incompletos
                            </p>
                        </div>
                        <div class="ow-pt-feature ow-pt-feature-odd">
                            <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                            <p data-toggle="tooltip" title="O cônjuge do titular do plano funerário tem que ter no máximo 64 anos, 11 meses e 30 dias.">
                                Cônjuge até 70 anos incompletos
                            </p>
                        </div>
                        <div class="ow-pt-feature ow-pt-feature-even">
                            <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                            <p data-toggle="tooltip" title="Os filhos do titular do plano funerário podem ter qualquer idade.">
                                Até 4 filhos de qualquer idade
                            </p>
                        </div>
                        <div class="ow-pt-feature ow-pt-feature-odd">
                            <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                            <p data-toggle="tooltip" title="Esta modalidade do plano funerário contempla a inclusão de até quatro idosos, podendo ser pai, mãe, sogro ou sogra do titular.  Dois deles tem que ter até 80 anos de idade (incompletos) e dois podem ter até 85 anos de idade (incompletos).">
                                2 idosos* até 80 anos e 2 até 85 anos	
                            </p>
                        </div>
                        <div class="ow-pt-feature ow-pt-feature-even">
                            <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                            <p data-toggle="tooltip" title="Carência de 6 meses para causa-morte natural.  Não há carência para causa morte violenta ou acidental.">
                                Carência de 6 meses
                            </p>
                        </div>
                    </div>
                    <?php if (get_theme_mod('_home_ativar_ecommerce', 'on') == 'on') { ?>
                        <div class="ow-pt-button">
                            <a href="http://testurlrgs" class="ow-pt-link broken_link">Contrate Online!</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="whiterogue-destaques-obs">
            <h3>OBS: Para qualquer modalidade do Plano Funerário Familiar considera-se idoso qualquer pessoa acima de 60 anos completos, exceto o cônjuge do titular.</h3>
        </div>
    </div>
</div>
<?php } ?>
<!-- END DO PREÇO -->


<!-- BOX DOS DESTAQUES -->
<?php  if( get_theme_mod('home_pffdestaques_sec', 'on') == 'on') { ?>
<div class="instaapp-section">
    <div class="container">
        <div class="row-fluid">
            <h2 class="section_heading">Entenda melhor o Plano Funerário Familiar</h2>
		</div>
    </div>
    <div class="whiterogue-destaques-bkg-blk">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <div class="so-widget-sow-image so-widget-sow-image-base">
                        <?php $baseurl = wp_upload_dir(); ?>
                        <?php $file = $baseurl['baseurl'];?>
                        <?php $file .= '/2016/01/plano-funerario-destaques-5-e1452539510635.jpg';?>
                        <img src="<?php echo $file; ?>" title="Plano Funerário Familiar - Aprenda mais 1" alt="Família Feliz tem o Plano Funerário Familiar da Aleah Brasil" class="so-widget-image" style="max-width:100%; height:auto; display:block">
                    </div>
                </div>
                <div class="span6 whiterogue-destaques-font-light">
                    <h2 class="section_heading whiterogue-destaques-title whiterogue-destaques-font-light">
                        QUAL O MELHOR PLANO FUNERÁRIO?
                    </h2>
                    <p>Dentre os nossos planos funerários, não existe um "melhor" plano e sim um "mais adequado" às necessidades da sua família. Por exemplo, se você deseja incluir apenas um dependente com mais de 60 anos, o ideal é contratar o Plano Funerário Familiar II. Todavia, se você deseja incluir mais de dois dependentes com até 85 anos de idade, o ideal é o Plano Funerário Familiar IV. Por este prisma, se você deseja contratar esta segurança apenas para você, sua esposa ou esposo e seus filhos, o Plano Funeral Familiar I já está adequado.</p>
                    <div class="continue">
                        <a href="<?php echo get_template_directory_uri().'/faq';?>">Ainda tenho dúvidas &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h2 class="section_heading whiterogue-destaques-title">
                    OS PLANOS FUNERAIS TEM A MESMA COBERTURA?
                </h2>
                <p>Sim. Todos nosso planos funerários tem a mesma cobertura. O que varia é a quantidade e a idade das pessoas cobertas. Os serviços funerais são prestados em todo o território nacional e incluem o sepultamento ou a cremação, desde o crematório esteja num raio de 45 quilômetros do local do óbito. Nossos planos funerais incluem também auxílio na liberação do corpo, preparação do corpo, flores e ornamentação da urna funerária e o transporte funerário para o cemitério ou crematório. </p>
                <div class="continue">
                    <a href="<?php echo get_template_directory_uri().'/faq';?>">Ainda tenho dúvidas &rarr;</a>
                </div>
            </div>
            <div class="span6">
                <div class="so-widget-sow-image so-widget-sow-image-base">
                    <?php $baseurl = wp_upload_dir(); ?>
                    <?php $file = $baseurl['baseurl'];?>
                    <?php $file .= '/2016/01/plano-funerario-destaques-3-e1452539300737.gif';?>
                    <img src="<?php echo $file ?>" title="Plano Funerário Familiar: Aprenda Mais 2" alt="Família Feliz tem o Plano Funerário Familiar da Aleah Brasil" class="so-widget-image" style="max-width:100%; height:auto; display:block">
                </div>
            </div>
        </div>
    </div>
    <div class="whiterogue-destaques-bkg-blk">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <div class="so-widget-sow-image so-widget-sow-image-base">
                        <?php $baseurl = wp_upload_dir(); ?>
                        <?php $file = $baseurl['baseurl'];?>
                        <?php $file .= '/2016/01/plano-funerario-destaques-2-e1452539339703.jpg';?>
                        <img src="<?php echo $file ?>" title="Plano Funerário Familiar: Aprenda Mais 3" alt="Família Feliz tem o Plano Funerário Familiar da Aleah Brasil" class="so-widget-image" style="max-width:100%; height:auto; display:block">
                    </div>
                </div>
                <div class="span6 whiterogue-destaques-font-light">
                    <h2 class="section_heading whiterogue-destaques-title whiterogue-destaques-font-light">
                        O Plano funerário inclui tudo?
                    </h2>
                        <p>"Tudo" é muito abrangente, mas digamos que houve o falecimento do sogro de 78 anos dentro do município de São Paulo e que ele tenha falecido em casa. A família entra em contato com a Central de Relacionamento da Aleah Brasil e reporta o óbito. Neste momento, é despachada uma equipe para atendimento no local. A equipe instruirá a família sobre todo o procedimento para sepultamento ou cremação e pagará os custos do funeral que incluem as taxas da prefeitura, a urna funerária, os enfeites da urna e o traslado do corpo. Todavia, se o óbito já estiver em estágio avançado de decomposição e for necessário efetuar o procedimento de tanatopraxia, este custo não está incluso.</p>
                    <div class="continue">
                        <a href="<?php echo get_template_directory_uri().'/faq';?>">Ainda tenho dúvidas &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h2 class="section_heading whiterogue-destaques-title">
                        Plano Funerário ou Plano Funeral?
                </h2>
                    <p>Estes termos podem confundir muita gente. Plano Funerário e Plano Funeral são a mesma coisa. Ainda há gente que chama de Auxílio Funeral ou Assistência Funeral, embora estes dois termos tenham conotação um pouco distinta. Auxílio Funeral e Assistência Funeral referem-se ao reembolso de determinada quantia em dinheiro, por exemplo, o pagamento de R$2.000,00 no falecimento do sogro do titular a título de "auxílio" para custear o funeral. Por outro lado, planos funerais não concedem o pagamento em espécia. Ao invés, a modalidade de plano funerário cobre os custos com o sepultamento ou a cremação com serviços realizados por equipe própria ou funerárias parceiras.</p>
                <div class="continue">
                    <a href="<?php echo get_template_directory_uri().'/faq';?>">Ainda tenho dúvidas &rarr;</a>
                </div>
            </div>
            <div class="span6">
                <div class="so-widget-sow-image so-widget-sow-image-base">
                    <?php $baseurl = wp_upload_dir(); ?>
                    <?php $file = $baseurl['baseurl'];?>
                    <?php $file .= '/2016/01/plano-funerario-destaques-1-e1452539182732.jpg';?>
                    <img src="<?php echo $file ?>" title="Plano Funerário Familiar: Aprenda Mais 4" alt="Família Feliz tem o Plano Funerário Familiar da Aleah Brasil" class="so-widget-image" style="max-width:100%; height:auto; display:block">
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<!-- END DOS DESTAQUES -->


<!-- BOX DAS CARACTERÍSTICAS GERAIS -->
<?php  if( get_theme_mod('home_pffcarac_sec', 'on') == 'on') { ?>
<div id="front-content-box" class="instaapp-section">
	<div class="container">
		<div class="row-fluid">
			<div class="sections_inner_content">
				<h2 class="section_heading">Características Gerais do Plano Funerário Familiar</h2>
			</div>
		</div>
    </div>
        <div class="whiterogue-destaques-bkg-blk">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <div class="so-widget-sow-image so-widget-sow-image-base">
                        <?php $baseurl = wp_upload_dir(); ?>
                        <?php $file = $baseurl['baseurl'];?>
                        <?php $file .= '/2016/01/plano-funerario-atendimento4-e1452603268328.jpg';?>
                        <img src="<?php echo $file; ?>" title="Plano Funerário Familiar - Aprenda mais 1" alt="Família Feliz tem o Plano Funerário Familiar da Aleah Brasil" class="so-widget-image" style="max-width:100%; height:auto; display:block">
                    </div>
                </div>
                <div class="span6 whiterogue-destaques-font-light">
                    <div class="so-widget-sow-price-table so-widget-sow-price-table-atom">
                        <div class="ow-pt-columns-atom whiterogue-destaques-top">
                            <div class="ow-pt-column ow-pt-first ow-pt-even" style="width: 100%">
                                <div class="ow-pt-features">
                                    <div class="ow-pt-feature ow-pt-feature-odd">
                                        <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                                        <p data-toggle="tooltip" title="A empresa disponibiliza um agente familiar para atendimento às famílias enlutadas dentro da Grande São Paulo.">
                                            Agente Familiar na Grande São Paulo
                                        </p>
                                    </div>
                                    <div class="ow-pt-feature ow-pt-feature-even">
                                        <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                                        <p data-toggle="tooltip" title="O plano funerário inclui uma urna funerária de excelente padrão para o falecido ">
                                            Urna/caixão
                                        </p>
                                    </div>
                                    <div class="ow-pt-feature ow-pt-feature-odd">
                                        <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                                        <p data-toggle="tooltip" title="O plano funerário disponibiliza o carro funerário para o traslado do corpo do local de falecimento ao cemitério ou crematório de destino, dentro de um raio de 45km.">
                                            Carro funerário para traslado
                                        </p>
                                    </div>
                                    <div class="ow-pt-feature ow-pt-feature-even">
                                        <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                                        <p data-toggle="tooltip" title="Os agentes familiares auxiliam a família na obtenção do registro de óbito.">
                                            Registro de óbito
                                        </p>
                                    </div>
                                    <div class="ow-pt-feature ow-pt-feature-odd">
                                        <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                                        <p style="display: inline;" data-toggle="tooltip" title="A taxa de sepultamento em cemitério público está coberta pelo plano funerário.  Se o sepultamento for em cemitério particular, a diferença deverá ser paga pelos familiares.  O valor máximo da taxa de sepultamento está estipulado em contrato.">
                                            Taxa de sepultamento em cemitério público
                                        </p>
                                    </div>
                                    <div class="ow-pt-feature ow-pt-feature-even">
                                        <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                                        <p data-toggle="tooltip" title="O plano funerário familiar inclui o traslado do corpo do local de óbito até o cemitério de destino exclusivamente dentro de um raio de 45km.  Caso a distância entre o local do óbito e o cemitério de destino seja superior a 45km, a família deverá pagar a diferença.  Os valores de quilometragem estão definidos em contrato.">
                                            Traslado do Corpo
                                        </p>
                                    </div>
                                    <div class="ow-pt-feature ow-pt-feature-odd">
                                        <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                                        <p style="display: inline;" data-toggle="tooltip" title="O plano funerário inclui a ornamentação do caixão  com enfeites florais e véu.">
                                            Véu e enfeites florais no caixão
                                        </p>
                                    </div>
                                    <div class="ow-pt-feature ow-pt-feature-even">
                                        <i class="sow-icon-fontawesome fa fa-check-square" style="color:#f8a703;"></i>
                                        <p data-toggle="tooltip" title="A taxa de velório em cemitério público está coberta pelo plano funerário.  Se o velório for em cemitério particular ou em hospital, a diferença deverá ser paga pelos familiares.  O valor máximo da taxa de velório está estipulado em contrato.">
                                            Taxa de velório em cemitério público
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END DAS CARACTERÍSTICAS GERAIS -->
<?php } ?>


<!-- BOX DO BLOG -->
<?php  if( get_theme_mod('home_blog_sec', 'on') == 'on') { ?>
<div id="front-content-box" class="instaapp-section">
	<div class="container">
		<div class="row-fluid">
			<div class="sections_inner_content">
				<h2 class="section_heading"><?php echo esc_attr( get_theme_mod('home_blog_title', 'ÚLTIMAS NOTÍCIAS') ); ?></h2>
			</div>
		</div>

		<div class="row-fluid front-blog-wrap">
			<?php $whiterogue_blogno = esc_attr( get_theme_mod('home_blog_num', '6' ) );
				$whiterogue_lite_latest_loop = new WP_Query( array('post_type' => 'post',
                                                                              'posts_per_page' => $whiterogue_blogno,
                                                                              'ignore_sticky_posts' => true,
                                                                              'category_name' => 'Notícias' ) );
			?>
			<?php if ( $whiterogue_lite_latest_loop->have_posts() ) : ?>

			<!-- pagination here -->

				<!-- the loop -->
                <?php $loopcounter = 1; ?>
				<?php while ( $whiterogue_lite_latest_loop->have_posts() ) : $whiterogue_lite_latest_loop->the_post(); ?>
					<div class="span4">
						<h3 class="post-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<?php the_excerpt(); ?>
						<div class="continue"><a href="<?php the_permalink(); ?>"><?php echo ('Leia Mais &rarr;');?></a></div>		  
					</div>
            
                    <?php if ( $loopcounter == 3 ) { ?>
                        </div>
                        <div class="row-fluid front-blog-wrap">
                    <?php }; ?>
                    <?php $loopcounter = $loopcounter + 1; ?>        
        
				<?php endwhile; ?>
				<!-- end of the loop -->

				<!-- pagination here -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php echo ('Desculpe.  Ainda não há posts.'); ?></p>
			<?php endif; ?>
		</div>
 	</div>
</div>
<?php } ?>
<!-- END DO BOX DO BLOG -->


<?php
			
get_footer(); 

?>
<?php 
/**
* The template for displaying the PLANO page.
*/
get_header();

?>

<!-- Top Row // -->

<div id="featured-box" class="instaapp-section">
	<!-- container -->
	<div class="container">
		<!-- row-fluid -->
		<div class="mid-box-mid row-fluid">
            
			<!-- Featured Box 1 -->
			<div class="mid-box span6">
				<div class="instaapp-iconbox iconbox-top">		
					<div class="iconbox-icon instaapp-viewport">
						<div class="featured_inner">
							<div class="featured_icon">
                                <?php $default .= '<img src ='; ?>
                                <?php $default .= get_template_directory_uri();?>
                                <?php $default .= '/images/plano-funerario-representantes.jpg';?>
                                <?php if (get_theme_mod('_plano_chamada_img')) {
                                           $file .= '<img src=';
                                           $file .= get_theme_mod('_plano_chamada_img');
                                           echo $file;
                                      } else {
                                           echo $default;
                                      }?>       
                                     style="width:      <?php echo esc_attr(get_theme_mod('_plano_chamada_ajuste_z','100')); ?>%;
                                            margin-left:<?php echo esc_attr(get_theme_mod('_plano_chamada_ajuste_h','0px')); ?>;
                                            margin-top: <?php echo esc_attr(get_theme_mod('_plano_chamada_ajuste_v','0px')); ?>;
                                            "/>
							</div>
						</div>
					</div>		
				</div>
			</div>

			<!-- Featured Box 2 -->
			<div class="mid-box span6">
				<div class="instaapp-iconbox iconbox-top">		
					<div class="iconbox-icon instaapp-viewport">
						<div class="featured_inner">
                            <?php $spheight .= '[spacer height='; ?>
                            <?php $spheight .= esc_attr(get_theme_mod('_plano_chamada_texto_ajuste_v','0')); ?>
                            <?php $spheight .= ']'; ?>
                            <?php echo do_shortcode($spheight); ?>
                            <div class="featured_icon">
                                <i class="fa <?php echo esc_attr(get_theme_mod('_plano_chamada_icone','fa-trophy')); ?>"></i>
							</div>
				            <h4><?php echo esc_attr(get_theme_mod('_plano_chamada_titulo','Plano Funerário Brasil')); ?></h4>
						</div>
					</div>		
					<div class="iconbox-content">		
						<p><?php echo esc_attr(get_theme_mod('_plano_chamada_texto','O Plano Funerário Brasil não exige atestado prévio de saúde e nem limite de idade.  Você adquire o plano em até 20 parcelas iguais de R$300,00 e pronto.  Você ou qualquer pessoa que você indicar como beneficiário no contrato terá cobertura nacional em caso de falecimento, tanto para cremação quanto para sepultamento.  Veja abaixo os benefícios.')); ?></p>
					</div>			
				</div>
			</div>
        </div>
    </div>
</div>

<!-- First Row // -->

<?php  if( get_theme_mod('plano_carac_row_1', 'on') == 'on') { ?>
    <div id="featured-box" class="instaapp-section">
        <!-- container -->
        <div class="container">
            <!-- row-fluid -->
            <div class="mid-box-mid row-fluid">

                <!-- Característica 1 -->
                <div class="mid-box span4">
                    <div class="instaapp-iconbox iconbox-top">		
                        <div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
                            <div class="featured_inner">
                                <div class="featured_icon">
                                    <i class="fa <?php echo esc_attr(get_theme_mod('_plano_c1_icone','fa-hourglass-3')); ?>"></i>
                                </div>
                                <h4><?php echo esc_attr(get_theme_mod('_plano_c1_titulo','sem limite de idade')); ?></h4>
                            </div>
                        </div>
                        <div class="iconbox-content">		
                            <p><?php echo esc_attr(get_theme_mod('_plano_c1_texto','Não há limite de idade para a pessoa assistida. Isso mesmo, não importa se você tem 49 ou 99 anos de idade. O Plano Funeral Brasil é para todos.')); ?></p>
                        </div>			
                    </div>
                </div>

                <!-- Característica 2 -->
                <div class="mid-box span4">
                    <div class="instaapp-iconbox iconbox-top">		
                        <div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
                            <div class="featured_inner">
                                <div class="featured_icon">
                                    <i class="fa <?php echo esc_attr(get_theme_mod('_plano_c2_icone','fa-heartbeat')); ?>"></i>
                                </div>
                                <h4><?php echo esc_attr(get_theme_mod('_plano_c2_titulo','sem comprovação de saúde')); ?></h4>
                            </div>
                        </div>		
                        <div class="iconbox-content">		
                            <p><?php echo esc_attr(get_theme_mod('_plano_c2_texto','Outro grande diferencial do Plano Funerário Brasil. A pessoa assistida não precisa comprovar que goza de plena saúde.')); ?></p>
                        </div>			
                    </div>
                </div>

                <!-- Característica 3 -->
                <div class="mid-box span4">
                    <div class="instaapp-iconbox iconbox-top">
                        <div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
                            <div class="featured_inner">
                                <div class="featured_icon">
                                    <i class="fa <?php echo esc_attr(get_theme_mod('_plano_c3_icone','fa-flag')); ?>"></i>
                                </div>
                                <h4><?php echo esc_attr(get_theme_mod('_plano_c3_titulo','cobertura nacional')); ?></h4>
                            </div>
                        </div>		
                        <div class="iconbox-content">		
                            <p><?php echo esc_attr(get_theme_mod('_plano_c3_texto','A cobertura é para todo o território brasileiro. Fazemos também a repatriação de óbitos. Consulte-nos para saber mais.')); ?></p>
                        </div>				
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- row-fluid -->
        </div>
        <!-- container -->
    </div>
<?php } ?>

<!-- Second Row // -->
<?php  if( get_theme_mod('plano_carac_row_2', 'on') == 'on') { ?>
    <div id="featured-box" class="instaapp-section">

        <!-- container -->
        <div class="container">
            <!-- row-fluid -->
            <div class="mid-box-mid row-fluid">

                <!-- Característica 4 -->
                <div class="mid-box span4">
                    <div class="instaapp-iconbox iconbox-top">		
                        <div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
                            <div class="featured_inner">
                                <div class="featured_icon">
                                    <i class="fa <?php echo esc_attr(get_theme_mod('_plano_c4_icone','fa-money')); ?>"></i>
                                </div>
                                <h4><?php echo esc_attr(get_theme_mod('_plano_c4_titulo','pagamento facilitado')); ?></h4>
                            </div>
                        </div>
                        <div class="iconbox-content">		
                            <p><?php echo esc_attr(get_theme_mod('_plano_c4_texto','O Plano Funerário Brasil pode ser dividido em até 20 parcelas de R$300 no boleto ou então em 12 vezes no cartão de crédito.')); ?></p>
                        </div>			
                    </div>
                </div>

                <!-- Característica 5 -->
                <div class="mid-box span4">
                    <div class="instaapp-iconbox iconbox-top">		
                        <div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
                            <div class="featured_inner">
                                <div class="featured_icon">
                                    <i class="fa <?php echo esc_attr(get_theme_mod('_plano_c5_icone','fa-bed')); ?>"></i>
                                </div>
                                <h4><?php echo esc_attr(get_theme_mod('_plano_c5_titulo','urna funerária inclusa')); ?></h4>
                            </div>
                        </div>		
                        <div class="iconbox-content">		
                            <p><?php echo esc_attr(get_theme_mod('_plano_c5_texto','Todos os nossos planos incluem uma urna mortuária padrão em madeira de alta qualidade.')); ?></p>
                        </div>			
                    </div>
                </div>

                <!-- Característica 6 -->
                <div class="mid-box span4">
                    <div class="instaapp-iconbox iconbox-top">
                        <div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
                            <div class="featured_inner">
                                <div class="featured_icon">
                                    <i class="fa <?php echo esc_attr(get_theme_mod('_plano_c6_icone','fa-leaf')); ?>"></i>
                                </div>
                                <h4><?php echo esc_attr(get_theme_mod('_plano_c6_titulo','enfeites florais')); ?></h4>
                            </div>
                        </div>		
                        <div class="iconbox-content">		
                            <p><?php echo esc_attr(get_theme_mod('_plano_c6_texto','Os enfeites florais dentro do caixão e a necromaquiagem facial dos assistidos fazem parte de todos os planos.')); ?></p>
                        </div>				
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- row-fluid -->
        </div>
        <!-- container -->
    </div>
<?php } ?>

<!-- Third Row // -->
<?php  if( get_theme_mod('plano_carac_row_3', 'on') == 'on') { ?>
    <div id="featured-box" class="instaapp-section">
        <!-- container -->
        <div class="container">
            <!-- row-fluid -->
            <div class="mid-box-mid row-fluid">

                <!-- Característica 7 -->
                <div class="mid-box span4">
                    <div class="instaapp-iconbox iconbox-top">		
                        <div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
                            <div class="featured_inner">
                                <div class="featured_icon">
                                    <i class="fa <?php echo esc_attr(get_theme_mod('_plano_c7_icone','fa-car')); ?>"></i>
                                </div>
                                <h4><?php echo esc_attr(get_theme_mod('_plano_c7_titulo','apoio logístico')); ?></h4>
                            </div>
                        </div>
                        <div class="iconbox-content">		
                            <p><?php echo esc_attr(get_theme_mod('_plano_c7_texto','Disponibilizamos um agente e um veículo para atendimento exclusivo da família (consulte para saber os locais disponíveis).')); ?></p>
                        </div>			
                    </div>
                </div>

                <!-- Característica 8 -->
                <div class="mid-box span4">
                    <div class="instaapp-iconbox iconbox-top">		
                        <div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
                            <div class="featured_inner">
                                <div class="featured_icon">
                                    <i class="fa <?php echo esc_attr(get_theme_mod('_plano_c8_icone','fa-star')); ?>"></i>
                                </div>
                                <h4><?php echo esc_attr(get_theme_mod('_plano_c8_titulo','última cerimônia de despedida')); ?></h4>
                            </div>
                        </div>		
                        <div class="iconbox-content">		
                            <p><?php echo esc_attr(get_theme_mod('_plano_c8_texto','Os planos incluem uma cerimônia de 15 minutos dentro de qualquer crematório do brasil.')); ?></p>
                        </div>			
                    </div>
                </div>

                <!-- Característica 9 -->
                <div class="mid-box span4">
                    <div class="instaapp-iconbox iconbox-top">
                        <div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
                            <div class="featured_inner">
                                <div class="featured_icon">
                                    <i class="fa <?php echo esc_attr(get_theme_mod('_plano_c9_icone','fa-edit')); ?>"></i>
                                </div>
                                <h4><?php echo esc_attr(get_theme_mod('_plano_c9_titulo','liberação documental')); ?></h4>
                            </div>
                        </div>		
                        <div class="iconbox-content">		
                            <p><?php echo esc_attr(get_theme_mod('_plano_c9_texto','Nossos agentes se encarregam de ajudar os conveniados com toda a documentação do assistido.')); ?></p>
                        </div>				
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- row-fluid -->
        </div>
        <!-- container -->
    </div>
<?php } ?>

<!-- Fourth Row // -->
<?php  if( get_theme_mod('plano_carac_row_4', 'on') == 'on') { ?>
    <div id="featured-box" class="instaapp-section">
        <!-- container -->
        <div class="container">
            <!-- row-fluid -->
            <div class="mid-box-mid row-fluid">

                <!-- Característica 10 -->
                <div class="mid-box span4">
                    <div class="instaapp-iconbox iconbox-top">		
                        <div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
                            <div class="featured_inner">
                                <div class="featured_icon">
                                    <i class="fa <?php echo esc_attr(get_theme_mod('_plano_c10_icone','fa-tags')); ?>"></i>
                                </div>
                                <h4><?php echo esc_attr(get_theme_mod('_plano_c10_titulo','taxas municipais')); ?></h4>
                            </div>
                        </div>
                        <div class="iconbox-content">		
                            <p><?php echo esc_attr(get_theme_mod('_plano_c10_texto','Todas as taxas municipais estão inclusas.')); ?></p>
                        </div>			
                    </div>
                </div>

                <!-- Característica 11 -->
                <div class="mid-box span4">
                    <div class="instaapp-iconbox iconbox-top">		
                        <div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
                            <div class="featured_inner">
                                <div class="featured_icon">
                                    <i class="fa <?php echo esc_attr(get_theme_mod('_plano_c11_icone','fa-cubes')); ?>"></i>
                                </div>
                                <h4><?php echo esc_attr(get_theme_mod('_plano_c11_titulo','câmara fria')); ?></h4>
                            </div>
                        </div>		
                        <div class="iconbox-content">		
                            <p><?php echo esc_attr(get_theme_mod('_plano_c11_texto','Caso haja necessidade, o assistido permanecerá em uma câmara fria por um dia, possibilitando que mais pessoas cheguem para o velório. ')); ?></p>
                        </div>			
                    </div>
                </div>

                <!-- Característica 12 -->
                <div class="mid-box span4">
                    <div class="instaapp-iconbox iconbox-top">
                        <div class="iconbox-icon instaapp-animated small-to-large instaapp-viewport">
                            <div class="featured_inner">
                                <div class="featured_icon">
                                    <i class="fa <?php echo esc_attr(get_theme_mod('_plano_c12_icone','fa-industry')); ?>"></i>
                                </div>
                                <h4><?php echo esc_attr(get_theme_mod('_plano_c12_titulo','cremação inclusa')); ?></h4>
                            </div>
                        </div>		
                        <div class="iconbox-content">		
                            <p><?php echo esc_attr(get_theme_mod('_plano_c12_texto','O serviço do sepultamento em si está incluso em todos os nossos planos.  Caso o assistido opte em vida, também está inclusa a cremação.')); ?></p>
                        </div>				
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- row-fluid -->
        </div>
        <!-- container -->
    </div>
<?php } ?>

</br></br>
<div class="whiterogue-homepage whiterogue-clear-margin row-fluid">
    <?php if (get_theme_mod('_home_ativar_ecommerce', 'on') == 'on') {
          $shortcode = '[add_to_cart_url id="';
          $shortcode .= esc_attr(get_theme_mod('_home_adquira_btn_link','183'));
          $shortcode .= '"]'; ?>
    <a href="<?php echo do_shortcode($shortcode); ?>">
       <?php echo esc_attr(get_theme_mod('_home_adquira_btn','Adquira Online!')); ?></a>
    <?php } ?>
</div>

<?php

get_footer();

?>
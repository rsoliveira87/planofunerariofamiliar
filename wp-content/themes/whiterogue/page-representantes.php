<?php 
/**
* The template for displaying the REPRESENTANTES page.
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
								<img src="
                                        <?php $upload_dir = wp_upload_dir(); ?>
                                        <?php echo $upload_dir['baseurl']; ?>/2015/11/equipe_vendedores_4_7.jpeg"
                                     style="width:120%; margin-left:-20px;" />
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
                            <?php echo do_shortcode('[spacer height="50px"]') ?>
							<div class="featured_icon">
                                <i class="fa fa-trophy"></i>
							</div>
				            <h4>Quer ser um representante?</h4>
						</div>
					</div>		
					<div class="iconbox-content">		
						<p>Nós da Aleah Brasil, empresa operadora e detentora dos direitos de comercialização do Plano Funerário Brasil, estamos credenciando empresas para se tornarem revendedoras de nosso planos.  Veja abaixo os benefícios e preencha o formulário no final da página.  Entraremos em contato em até 24 horas.</p>
					</div>			
				</div>
			</div>
        </div>
    </div>
</div>

<!-- Contact Form Section Begins -->
<div class="instaapp-section">
	<div class="container full-content-box" >
        <?php echo do_shortcode('[spacer height="-100px"]') ?>
        <h2 class="section_heading" style="text-align: left;">Formulário de Representante</h2>
        <div class="row-fluid">
            <div id="whiterogue-contato">
                <?php echo do_shortcode('[contact-form-7 id="104" title="Representante"]'); ?>
            </div>									
        </div>
    </div>
</div>
<!-- Contact Form Section Ends -->

<?php 

get_footer();

?>
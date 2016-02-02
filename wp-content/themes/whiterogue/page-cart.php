<?php get_header(); ?>

<div class="main-wrapper-item"> 
    <div class="container post-wrap">
        <div class="row-fluid">   
            <div id="content" class="span12">
                
                <?php
                    $cart = jigoshop_cart::get_cart();
                    $nocarterrors = true;

                    foreach ($cart as $cart_item_key => $values) {
                        if ($values['product_id'] == esc_attr(get_theme_mod('_home_adquira_btn_link','183')) && ($values['quantity'] > 1)) {
                            $jigoerror  = 'Só é permitida a aquisição de um ';
                            $jigoerror .= get_bloginfo('name');
                            $jigoerror .= ' por vez.  Por favor, reduza a quantidade para 1 e tente novamente.';
                            jigoshop::add_error($jigoerror);
                            $nocarterrors = false;
                        }

                        if ($values['product_id'] == esc_attr(get_theme_mod('_home_adquira_abrangencia_btn_link','188')) && ($values['quantity'] > 1)) {
                            jigoshop::add_error('A abrangência familiar vale para toda a família.  Não é necessário adquirir mais de uma abrangência familiar por plano.  Por favor, reduza a quantidade para 1 e tente novamente.');
                            $nocarterrors = false;
                        }               

                     }
                
                     jigoshop::show_messages();
                ?>
                
                <div class="whiterogue-jigoshop-title">
                    início da contratação
                </div>
                <div class="whiterogue-clearleft">
                    <h4>Você está iniciando o processo de contratação online do <strong><?php echo get_bloginfo('name'); ?></strong>.  Por favor certifique-se de que o produto abaixo atende suas necessidades lendo atentamente a sessão de 
                    <a href="<?php echo get_template_directory_uri().'/plano';?>">Características do Produto</a>
                    . Em caso de dúvidas, por favor ligue imediatamente para
                    <?php echo get_theme_mod('_head_telefone1','(11) 3071-1325');?>, 
                    <?php echo get_theme_mod('_head_telefone2','(21) 3624-2315');?> ou 
                    <?php echo get_theme_mod('_head_telefone3','(19) 3352-4650');?>
                    e fale com um de nossos consultores.</h4>
                    <h4>O <strong><?php echo get_bloginfo('name'); ?></strong> também pode ser adquirido com a opção de <strong>Abrangência Familiar</strong>, ou seja, caso o Conveniado (adquirente) esteja contratando o plano para um determinado familiar e, diante de um óbito confirmado de outro familiar, a cobertura pode ser aproveitada para este que veio a falecer.  Para contratar a opção de abrangência familiar por apenas R$900,00 a mais, por favor clique no botão abaixo.  A opção da abrangência familiar será automaticamente adicionada ao seu pedido.</h4></br>
            
                    <div class="whiterogue-homepage whiterogue-abrangencia row-fluid">
                        <?php $shortcode = '[add_to_cart_url id="';
                              $shortcode .= esc_attr(get_theme_mod('_home_adquira_abrangencia_btn_link','188'));
                              $shortcode .= '"]'; ?>
                        <a href="<?php echo do_shortcode($shortcode) ?>">
                            Sim, quero contratar a abrangência familiar!</a>
                    </div>
                    <?php echo do_shortcode('[jigoshop_cart]') ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<?php get_header(); ?>

<div class="main-wrapper-item"> 
    <div class="container post-wrap">
        <div class="row-fluid">   
            <div id="content" class="span12">
                
                <!-- displays errors if they exist -->
                <?php jigoshop::show_messages(); ?>
                
                <div class="row-fluid">
                    <h3 class="whiterogue-jigoshop-title" >Contratação Concluída</h3>
                </div>
                
                <div class="row-fluid whiterogue-clearleft">
                    <?php echo do_shortcode('[jigoshop_thankyou]'); ?>
                </div>
                <div class="whiterogue-clearleft">
                    <h4>A etapa online da contratação do <strong>Plano Funerário Brasil </strong> está concluída.  Um agente do <strong>Plano Funerário Brasil </strong> entrará em contato em até 24 horas. Em caso de dúvidas, por favor ligue imediatamente para (11)2548-3045 e fale com um de nossos consultores.</h4></br>
            
                    <div class="row-fluid whiterogue-abrangencia" id="whiterogue-cart-add-product">
                        <a href="<?php echo home_url();?>"
                           style="background: <?php echo esc_attr(get_theme_mod('_button_color_scheme','#cc0021')); ?>; !important">
                                        Retornar à Home Page</a>
                    </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

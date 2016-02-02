<?php
/**
 * Checkout form template
 *
 * DISCLAIMER
 *
 * Do not edit or add directly to this file if you wish to upgrade Jigoshop to newer
 * versions in the future. If you wish to customise Jigoshop core for your needs,
 * please use our GitHub repository to publish essential changes for consideration.
 *
 * @package             Jigoshop
 * @category            Checkout
 * @author              Jigoshop
 * @copyright           Copyright © 2011-2014 Jigoshop.
 * @license             GNU General Public License v3
 */
?>

<?php get_header(); ?>

<?php do_action('whiterogue_process_pre_checkout');?>

<div class="main-wrapper-item"> 
    <div class="container post-wrap">
        <div class="row-fluid">   
            <div id="content" class="span12">

                <!-- displays errors if they exist -->
                <?php jigoshop::show_messages(); ?>
                
                <?php do_action('before_checkout_form');
                // filter hook for include new pages inside the payment method
                $get_checkout_url = apply_filters( 'jigoshop_get_checkout_url', jigoshop_cart::get_checkout_url() ); ?>
                
                <form name="checkout" method="post" class="checkout" action="<?php echo esc_url( $get_checkout_url ); ?>">

                    <h3 id="order_review_heading"><?php _e('Your Order', 'jigoshop'); ?></h3>

                    <?php do_action('jigoshop_checkout_order_review'); ?>

                    <div class="col2-set" id="customer_details">
                        <div class="col-1">

                            <?php do_action('jigoshop_checkout_billing'); ?>

                        </div>
                        <div class="col-2">
                            
                            <?php do_action('jigoshop_checkout_shipping'); ?>

                        </div>
                    </div>
                    
                    <div class="row-fluid">
                        <h3 class="whiterogue-jigoshop-title" >Contrato</h3>
                        
                        <div id="whiterogue-overflow-div">
                            <?php do_action('whiterogue_checkout_contract');?>
                        </div>
                    </div>
                    
                    <div class="row-fluid">
                        <?php do_action('whiterogue_contract_checkbox');?>
                    </div>
                    <div class="row-fluid" style="text-align:center;">
                        </br><input type="button" value="Imprimir contrato" onclick="PrintContract()" id="whiterogue-print-contract"/>
                    </div>
                    
                    <div class="row-fluid">
                        <h3 id="payment_methods_heading"><?php _e('Payment Methods', 'jigoshop'); ?></h3>
                    </div>
            
                    <?php do_action('jigoshop_checkout_payment_methods'); ?>

                </form>

                <?php do_action('after_checkout_form'); ?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function PrintContract(){
        var myWindow = window.open("", "", "width=1, height=1");
        var contract = document.getElementById('whiterogue-overflow-div').innerHTML;
        myWindow.document.write('<html><head><link rel="stylesheet" id="whiterogue-jigoshop-stylesheet-css" href="<?php echo get_template_directory_uri();?>/css/jigoshop.css" type="text/css" media="all" /><link rel="stylesheet" id="whiterogue-stylesheet-css" href="<?php echo get_template_directory_uri();?>/style.css" type="text/css" media="all" /><link rel="stylesheet" id="whiterogue-stylesheet-print-css" href="<?php echo get_template_directory_uri();?>/css/print-contract.css" type="text/css" media="all" /><title>my div</title>');
        myWindow.document.write('</head><body >');
        myWindow.document.write(contract);
        myWindow.document.write('</body></html>');

        myWindow.focus(); // necessary for IE >= 10
        myWindow.visibility = "hidden";

        myWindow.print();
        //myWindow.document.close(); // necessary for IE >= 10
        //myWindow.close();

        return true;
    }
</script>

<?php get_footer(); ?>
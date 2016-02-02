/***********************************
 * White Rogue Form Validator Script
 *
 * Used to validate the contract submission form
 */


function wrUpdate_billing_first_name(wrvalue){
    var str1 = wrvalue;
    var str2 = " ";
    var str3 = document.getElementById("billing_last_name").value;
    var res = str1.concat(str2, str3);
    document.getElementById("conveniado_nome_text").value = res;
}
function wrUpdate_shipping_first_name(wrvalue){
    var str1 = wrvalue;
    var str2 = " ";
    var str3 = document.getElementById("shipping_last_name").value;
    var res = str1.concat(str2, str3);
    document.getElementById("conveniadosub_nome_text").value = res;
}
function wrUpdate_billing_last_name(wrvalue){
    var str1 = document.getElementById("billing_first_name").value;
    var str2 = " ";
    var str3 = wrvalue;
    var res = str1.concat(str2, str3);
    document.getElementById("conveniado_nome_text").value = res;
}
function wrUpdate_shipping_last_name(wrvalue){
    var str1 = document.getElementById("shipping_first_name").value;
    var str2 = " ";
    var str3 = wrvalue;
    var res = str1.concat(str2, str3);
    document.getElementById("conveniadosub_nome_text").value = res;
}
function wrUpdate_billing_estadocivil(wrvalue){
    document.getElementById("conveniado_estadocivil_text").value = wrvalue;
}
function wrUpdate_shipping_estadocivil(wrvalue){
    document.getElementById("conveniadosub_estadocivil_text").value = wrvalue;
}
function wrUpdate_billing_nacionalidade(wrvalue){
    document.getElementById("conveniado_nacionalidade_text").value = wrvalue;
}
function wrUpdate_shipping_nacionalidade(wrvalue){
    document.getElementById("conveniadosub_nacionalidade_text").value = wrvalue;
}
function wrUpdate_billing_profissao(wrvalue){
    document.getElementById("conveniado_profissao_text").value = wrvalue;
}
function wrUpdate_shipping_profissao(wrvalue){
    document.getElementById("conveniadosub_profissao_text").value = wrvalue;
}
function wrUpdate_billing_rg(wrvalue){
    document.getElementById("conveniado_rg_text").value = wrvalue;
}
function wrUpdate_shipping_rg(wrvalue){
    document.getElementById("conveniadosub_rg_text").value = wrvalue;
}
function wrUpdate_billing_cpf(wrvalue){
    document.getElementById("conveniado_cpf_text").value = wrvalue;
}
function wrUpdate_shipping_cpf(wrvalue){
    document.getElementById("conveniadosub_cpf_text").value = wrvalue;
}    
function wrUpdate_billing_address_1(wrvalue){
    document.getElementById("conveniado_endereco_text").value = wrvalue;
}
function wrUpdate_shipping_address_1(wrvalue){
    document.getElementById("conveniadosub_endereco_text").value = wrvalue;
}                         
function wrUpdate_billing_numero(wrvalue){
    document.getElementById("conveniado_numero_text").value = wrvalue;
}
function wrUpdate_shipping_numero(wrvalue){
    document.getElementById("conveniadosub_numero_text").value = wrvalue;
}                          
function wrUpdate_billing_address_2(wrvalue){
    document.getElementById("conveniado_complemento_text").value = wrvalue;
}
function wrUpdate_shipping_address_2(wrvalue){
    document.getElementById("conveniadosub_complemento_text").value = wrvalue;
}                                 
function wrUpdate_billing_bairro(wrvalue){
    document.getElementById("conveniado_bairro_text").value = wrvalue;
}
function wrUpdate_shipping_bairro(wrvalue){
    document.getElementById("conveniadosub_bairro_text").value = wrvalue;
}                              
function wrUpdate_billing_city(wrvalue){
    document.getElementById("conveniado_cidade_text").value = wrvalue;
}
function wrUpdate_shipping_city(wrvalue){
    document.getElementById("conveniadosub_cidade_text").value = wrvalue;
}                              
function wrUpdate_billing_state(wrvalue){
    document.getElementById("conveniado_estado_text").value = wrvalue;
}
function wrUpdate_shipping_state(wrvalue){
    document.getElementById("conveniadosub_estado_text").value = wrvalue;
}             
function wrUpdate_billing_postcode(wrvalue){
    document.getElementById("conveniado_cep_text").value = wrvalue;
}
function wrUpdate_shipping_postcode(wrvalue){
    document.getElementById("conveniadosub_cep_text").value = wrvalue;
}   
function wrUpdate_billing_phone(wrvalue){
    document.getElementById("conveniado_telefone_text").value = wrvalue;
}
function wrUpdate_shipping_phone(wrvalue){
    document.getElementById("conveniadosub_telefone_text").value = wrvalue;
}
function wrUpdate_billing_email(wrvalue){
    document.getElementById("conveniado_email_text").value = wrvalue;
}
function wrUpdate_shipping_email(wrvalue){
    document.getElementById("conveniadosub_email_text").value = wrvalue;
}
function wrUpdate_billing_assistido_nome(wrvalue){
    document.getElementById("assistido_nome_text").value = wrvalue;
    jQuery('#assistido_nome_text').autoGrowInput({minWidth:30,comfortZone:50});
}
function wrUpdate_billing_assistido_rg(wrvalue){
    document.getElementById("assistido_rg_text").value = wrvalue;
    jQuery('#assistido_rg_text').autoGrowInput({minWidth:30,comfortZone:40});
}
function wrUpdate_billing_formadepagamento(wrvalue){
    
    document.getElementById("billing_formadepagamento_1_text").value = '';
    document.getElementById("billing_formadepagamento_2_text").value = '';
    document.getElementById("billing_formadepagamento_3_text").value = '';
    document.getElementById("billing_formadepagamento_4_text").value = '';
    document.getElementById("billing_formadepagamento_5_text").value = '';
    document.getElementById("billing_formadepagamento_6_text").value = '';
    document.getElementById("billing_formadepagamento_7_text").value = '';
    document.getElementById("billing_formadepagamento_8_text").value = '';
    document.getElementById("billing_formadepagamento_9_text").value = '';
    document.getElementById("billing_formadepagamento_10_text").value = '';
    
    switch (wrvalue) {
        case "1":
            document.getElementById("billing_formadepagamento_1_text").value = 'X';
            break;
        case "2":
            document.getElementById("billing_formadepagamento_2_text").value = 'X';
            break;
        case "3":
            document.getElementById("billing_formadepagamento_3_text").value = 'X';
            break;
        case "4":
            document.getElementById("billing_formadepagamento_4_text").value = 'X';
            break;
        case "5":
            document.getElementById("billing_formadepagamento_5_text").value = 'X';
            break;
        case "6":
            document.getElementById("billing_formadepagamento_6_text").value = 'X';
            break;
        case "7":
            document.getElementById("billing_formadepagamento_7_text").value = 'X';
            break;
        case "8":
            document.getElementById("billing_formadepagamento_8_text").value = 'X';
            break;
        case "9":
            document.getElementById("billing_formadepagamento_9_text").value = 'X';
            break;
        case "10":
            document.getElementById("billing_formadepagamento_10_text").value = 'X';
            break;
        default:
            alert("default");
            break;
    }
}

jQuery(function(){
    jQuery('#assistido_nome_text').autoGrowInput({minWidth:30,comfortZone:50});
    jQuery('#assistido_rg_text').autoGrowInput({minWidth:30,comfortZone:40});
});

//autogrow function used to expand the assistido nome in the contrato-pfb.php
(function($){
    
// jQuery autoGrowInput plugin by James Padolsey
// See related thread: http://stackoverflow.com/questions/931207/is-there-a-jquery-autogrow-plugin-for-text-fields
        
$.fn.autoGrowInput = function(o) {
    
    o = $.extend({
        maxWidth: 1000,
        minWidth: 0,
        comfortZone: 70
    }, o);
    
    this.filter('input:text').each(function(){
        
        var minWidth = o.minWidth || $(this).width(),
            val = '',
            input = $(this),
            testSubject = $('<tester/>').css({
                position: 'absolute',
                top: -9999,
                left: -9999,
                width: 'auto',
                fontSize: input.css('fontSize'),
                fontFamily: input.css('fontFamily'),
                fontWeight: input.css('fontWeight'),
                letterSpacing: input.css('letterSpacing'),
                whiteSpace: 'nowrap'
            }),
            check = function() {
                
                if (val === (val = input.val())) {return;}
                
                // Enter new content into testSubject
                var escaped = val.replace(/&/g, '&amp;').replace(/\s/g,'&nbsp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
                testSubject.html(escaped);
                
                // Calculate new width + whether to change
                var testerWidth = testSubject.width(),
                    newWidth = (testerWidth + o.comfortZone) >= minWidth ? testerWidth + o.comfortZone : minWidth,
                    currentWidth = input.width(),
                    isValidWidthChange = (newWidth < currentWidth && newWidth >= minWidth)
                                         || (newWidth > minWidth && newWidth < o.maxWidth);
                
                // Animate width
                if (isValidWidthChange) {
                    input.width(newWidth);
                }
                
            };
            
        testSubject.insertAfter(input);
        
        $(this).bind('keyup keydown blur update', check);
        
        check();
    });
    
    return this;

};

})(jQuery);


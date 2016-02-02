<!-- Este arquivo não é do tema whiterogue.  Ele é chamado de dentro da classe jigoshop_checkout.class.php -->

<p style="text-align:center;"><strong>CONTRATO DE PRESTAÇÃO DE SERVIÇOS DE ASSISTÊNCIA FUNERAL</strong></p>

<p style="text-align:center;"><strong>"PLANO FUNERÁRIO BRASIL"</strong></p>

<p style="text-align:center;">Pelo presente instrumento particular:</p>

<p><strong>ALEAH ASSISTÊNCIA EM SEGUROS LTDA.</strong>, sociedade empresária limitada, inscrita no CNPJ/MF sob o no. 17.414.457/0001-45, neste ato representada na forma de seu Contrato Social ("<strong>ALEAH</strong>"); e</p>

<div class="tg-wrap">
    <table id="tg">
        <tr>
            <th class="col1"></th>
            <th class="col2"></th>
            <th class="col3"></th>
            <th class="col4"></th>
        </tr>
        <tr>
            <td class="tg-yw4l">Nome:</td>
            <td class="tg-yw4l" colspan="3">
                <?php $nome  = $this->get_value('billing_first_name');
                      $nome .= ' ';
                      $nome .= $this->get_value('billing_last_name');?>
                <input type="text" class="whiterogue-contract-label"
                       id="conveniado_nome_text"
                       value="<?php echo $nome; ?>" disabled >
            </td>
        </tr>
        <tr>
            <td class="tg-yw4l">Nacionalidade:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniado_nacionalidade_text"
                       value="<?php echo $this->get_value('billing_nacionalidade');?>" disabled >
            </td>
            <td class="tg-yw4l">Estado Civil:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniado_estadocivil_text"
                       value="<?php echo $this->get_value('billing_estadocivil');?>" disabled >
            </td>
        </tr>
        <tr>
            <td class="tg-yw4l">Profissão:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniado_profissao_text"
                       value="<?php echo $this->get_value('billing_profissao');?>" disabled >
            </td>
            <td class="tg-yw4l">RG:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniado_rg_text"
                       value="<?php echo $this->get_value('billing_rg');?>" disabled >
            </td>
        </tr>
        <tr>
            <td class="tg-yw4l">CPF/MF:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniado_cpf_text"
                       value="<?php echo $this->get_value('billing_cpf');?>" disabled >
            </td>
            <td class="tg-yw4l">Telefone:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniado_telefone_text"
                       value="<?php echo $this->get_value('billing_phone');?>" disabled >
            </td>
        </tr>
        <tr>
            <td class="tg-yw4l">Endereço:</td>
            <td class="tg-yw4l" colspan="3">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniado_endereco_text"
                       value="<?php echo $this->get_value('billing_address_1');?>" disabled >
            </td>
        </tr>
        <tr>
            <td class="tg-yw4l">Número:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniado_numero_text"
                       value="<?php echo $this->get_value('billing_numero');?>" disabled >
            </td>
            <td class="tg-yw4l">Complemento:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniado_complemento_text"
                       value="<?php echo $this->get_value('billing_address_2');?>" disabled >
            </td>
        </tr>
        <tr>
            <td class="tg-yw4l">Bairro:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniado_bairro_text"
                       value="<?php echo $this->get_value('billing_bairro');?>" disabled >
            </td>
            <td class="tg-yw4l">Cidade:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniado_cidade_text"
                       value="<?php echo $this->get_value('billing_city');?>" disabled >
            </td>
        </tr>
        <tr>
            <td class="tg-yw4l">Estado:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniado_estado_text"
                       value="<?php echo $this->get_value('billing_state');?>" disabled >
            </td>
            <td class="tg-yw4l">CEP:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniado_cep_text"
                       value="<?php echo $this->get_value('billing_postcode');?>" disabled >
            </td>
        </tr>
        <tr>
            <td class="tg-yw4l">E-mail:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniado_email_text"
                       value="<?php echo $this->get_value('billing_email');?>" disabled >
            </td>
            <td class="tg-yw4l" colspan="2" >doravante ("CONVENIADO")</td>
        </tr>
    </table>
</div></br>

<div class="tg-wrap">
    <table id="tg">
        <tr>
            <th class="col1"></th>
            <th class="col2"></th>
            <th class="col3"></th>
            <th class="col4"></th>
        </tr>
        <tr>
            <?php $subnome  = $this->get_value('shipping_first_name');
                  $subnome .= ' ';
                  $subnome .= $this->get_value('shipping_last_name');?>
            <td class="tg-yw4l">Nome:</td>
            <td class="tg-yw4l" colspan="3">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniadosub_nome_text"
                       value="<?php echo $subnome; ?>" disabled >
            </td>
        </tr>
        <tr>
            <td class="tg-yw4l">Nacionalidade:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniadosub_nacionalidade_text"
                       value="<?php echo $this->get_value('shipping_nacionalidade');?>" disabled >
            </td>
            <td class="tg-yw4l">Estado Civil:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniadosub_estadocivil_text"
                       value="<?php echo $this->get_value('shipping_estadocivil');?>" disabled >
            </td>
        </tr>
        <tr>
            <td class="tg-yw4l">Profissão:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniadosub_profissao_text"
                       value="<?php echo $this->get_value('shipping_profissao');?>" disabled >
            </td>
            <td class="tg-yw4l">RG:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniadosub_rg_text"
                       value="<?php echo $this->get_value('shipping_rg');?>" disabled >
            </td>
        </tr>
        <tr>
            <td class="tg-yw4l">CPF/MF:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniadosub_cpf_text"
                       value="<?php echo $this->get_value('shipping_cpf');?>" disabled >
            </td>
            <td class="tg-yw4l">Telefone:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniadosub_telefone_text"
                       value="<?php echo $this->get_value('shipping_phone');?>" disabled >
            </td>
        </tr>
        <tr>
            <td class="tg-yw4l">Endereço:</td>
            <td class="tg-yw4l" colspan="3">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniadosub_endereco_text"
                       value="<?php echo $this->get_value('shipping_address_1');?>" disabled >
            </td>
        </tr>
        <tr>
            <td class="tg-yw4l">Número:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniadosub_numero_text"
                       value="<?php echo $this->get_value('shipping_numero');?>" disabled >
            </td>
            <td class="tg-yw4l">Complemento:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniadosub_complemento_text"
                       value="<?php echo $this->get_value('shipping_address_2');?>" disabled >
            </td>
        </tr>
        <tr>
            <td class="tg-yw4l">Bairro:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniadosub_bairro_text"
                       value="<?php echo $this->get_value('shipping_bairro');?>" disabled >
            </td>
            <td class="tg-yw4l">Cidade:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniadosub_cidade_text"
                       value="<?php echo $this->get_value('shipping_city');?>" disabled >
            </td>
        </tr>
        <tr>
            <td class="tg-yw4l">Estado:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniadosub_estado_text"
                       value="<?php echo $this->get_value('shipping_state');?>" disabled >
            </td>
            <td class="tg-yw4l">CEP:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniadosub_cep_text"
                       value="<?php echo $this->get_value('shipping_postcode');?>" disabled >
            </td>
        </tr>
        <tr>
            <td class="tg-yw4l">E-mail:</td>
            <td class="tg-yw4l">
                <input type="text" class="whiterogue-contract-label"
                       id="conveniadosub_email_text"
                       value="<?php echo $this->get_value('shipping_email');?>" disabled >
            </td>
            <td class="tg-yw4l" colspan="2" >doravante ("CONVENIADO SUBSTITUTO")</td>
        </tr>
    </table>
</div></br>

<p><strong>ALEAH,</strong> <strong>CONVENIADO</strong>, e <strong>CONVENIADO SUBSTITUTO</strong>, individual e indistintamente, designados "Parte" e, conjuntamente, designados "Partes";</p>

<p>Resolvem, de mútuo e comum acordo, celebrar o presente Contrato de Prestação de Serviços ("Contrato"), que será regido pelas seguintes cláusulas e condições:</p>


<p><strong>CLÁUSULA I - DO OBJETO DO CONTRATO</strong></p>

<p>1.1. Constitui objeto deste Contrato a prestação de serviços, pela <strong>ALEAH</strong> ao <strong>CONVENIADO</strong>, de assistência funeral completa de cremação ou sepultamento, nos termos deste instrumento e do ANEXO I - CONSIDERAÇÕES GERAIS:</p>

<p>1.2. Os Serviços são nominativos e individuais, e serão prestados em razão do óbito do(a) Sr(a).
    <span>
        <input type="text" class="whiterogue-contract-label-insert autogrow"
               size="5em"
               id="assistido_nome_text"
               value="<?php echo $this->get_value('billing_assistido_nome');?>" disabled />   
    </span>
    , portador(a) da identidade RG n.
    <span>
        <input type="text" class="whiterogue-contract-label-insert autogrow"
               id="assistido_rg_text"
               value="<?php echo $this->get_value('billing_assistido_rg');?>" disabled />
    </span>
    (a "<strong>ASSISTIDA</strong>"), pessoa indicada pelo <strong>CONVENIADO </strong>para receber a cobertura de um funeral completo para cremação ou sepultamento. <strong>CONVENIADO</strong> e <strong>ASSISTIDA</strong> não podem ser a mesma pessoa pelos termos contratuais.</p>


<p><strong>CONTINUAÇÃO - DA ABRANGÊNCIA FAMILIAR (opcional)</strong></p>

<p>1.3. Não obstante o disposto no item 1.2. supra, caso o <strong>CONVENIADO</strong> queira trocar a indicação da pessoa <strong>ASSISTIDA, </strong>para qualquer outra pessoa comprovadamente da sua família no ato do registro do óbito (cônjuge, pai, mãe, irmãos, filhos, netos e sobrinhos), poderá optar e contratar tal transferência de cobertura <strong>por este instrumento,</strong> incluindo o pagamento da taxa de transferência no valor total de R$900,00 (novecentos reais), devendo ser observado o prazo de 15 (quinze) dias de carência da mesma forma, contados da data de entrega/envio eletrônico da via assinada do termo deste contrato para se beneficiar do serviço.</p>

<p>1.4. Na hipótese de a <strong>ASSISTIDA</strong> falecer e o <strong>CONVENIADO</strong>, por qualquer motivo, não acionar emergencialmente a <strong>ALEAH,</strong> desta forma, não possibilitando a execução dos Serviços, o <strong>CONVENIADO</strong> poderá, no prazo de 30 (trinta) dias contados do óbito da <strong>ASSISTIDA</strong>, indicar outra pessoa, em substituição, sendo que essa troca somente será efetivada mediante o pagamento de taxa de transferência no valor total de R$ 900,00 (novecentos reais);</p>

<p>1.5. Caso o <strong>CONVENIADO</strong> venha a falecer antes da <strong>ASSISTIDA</strong>, o <strong>CONVENIADO</strong> <strong>SUBSTITUTO</strong> sub-rogar-se-á, automaticamente, nas obrigações e direitos fixados neste instrumento.</p>


<p><strong>CLÁUSULA II - DA EXECUÇÃO DOS SERVIÇOS</strong></p>

<p>2.1. Para a prestação dos Serviços não há limite de idade e nem a necessidade de declaração de saúde por parte do <strong>CONVENIADO</strong> ou da <strong>ASSISTIDA</strong>.</p>

<p>2.2. No <strong>PLANO FUNERÁRIO BRASIL</strong> a execução dos Serviços possui carência de 15 (quinze) dias contados da data de entrega/envio eletrônico da via assinada deste instrumento, caso o pagamento fixado no item 4.1. seja efetuado de 7 (sete) a 20 (vinte) parcelas. Nesta hipótese, caso a <strong>ASSISTIDA</strong> venha a falecer neste período de carência, os Serviços poderão ser executados mediante o pagamento, pelo <strong>CONVENIADO</strong> à <strong>ALEAH</strong> da taxa de liberação de carência no valor de R$ 900,00 (novecentos reais), a ser paga em uma única parcela à vista via cartão crédito (por transação remota, isto é, confirmação dos dados do cartão de crédito e pagamento "online" / à distância via central telefônica da <strong>ALEAH</strong>) diante ato da entrega da Declaração de Óbito pela família à equipe presencial de atendimento da <strong>ALEAH,</strong> no local do óbito ou no local de atendimento indicado pelo <strong>CONVENIADO</strong>.</p>

<p>2.3. Não haverá carência para a COBERTURA PREVENTIVA caso o <strong>CONVENIADO</strong> opte por pagar o preço dos Serviços em até 6 (seis) parcelas.</p>

<p>2.4. O <strong>CONVENIADO</strong>, no prazo de até 10 (dez) dias úteis contados da data de entrega/envio eletrônico da deste Contrato, receberá, via postal ou digital (por e-mail) da <strong>ALEAH</strong>, uma carteira e identificação (de novo conveniado) que conterá as informações dos serviços contratados, indicando: nome da pessoa<strong> ASSISTIDA</strong>, nome do <strong>CONVENIADO</strong>, data de contratação e cidade de residência da ASSISTIDA, conforme as disposições das cláusulas 4.1 e 4.3 abaixo.</p>

<p>2.5. O <strong>CONVENIADO</strong> declara estar ciente de que na execução dos Serviços <strong>NÃO</strong> estão inclusas as seguintes coberturas: (i) coroa de flores; (ii) sala de flores; (iii) tanatopraxia; (iv) urnas para cinzas; (v) traslados aéreos nacionais ou internacionais; (vi) cerimônias religiosas (vii) pedágios; (viii) distâncias terrestres superiores a um raio de 45 quilômetros (ou seja, trecho terrestre / rodoviário limitado a uma distância ida e volta de 90 quilômetros); (ix) compra, concessão ou manutenção de jazigos e (x) estacionamentos, <em>concierge</em> , 2<sup>a</sup> via de certidões de óbitos e taxas de exumação. Tais coberturas poderão ser contratadas pelo <strong>CONVENIADO</strong> com a equipe de atendimento da <strong>ALEAH</strong> antes do velório ou da cerimônia de cremação da pessoa <strong>ASSISTIDA</strong>. O <strong>CONVENIADO</strong> ou outro familiar deverá acompanhar a equipe da <strong>ALEAH</strong> perante os órgãos competentes para os devidos registros e liberações documentais.</p>

<p>2.6. Para o funeral com a cremação, o prazo de devolução das cinzas da pessoa cremada é definido por cada crematório (em média 20 (vinte) dias) da data de cerimônia de cremação e tais cinzas deverão ser retiradas pelo <strong>CONVENIADO</strong>, ou por quem este indicar no correspondente crematório, mediante apresentação de protocolo próprio.</p>

<p>2.7. O <strong>CONVENIADO</strong> declara, ainda, ter conhecimento das 4 (quatro) condições básicas formais para a realização de uma cremação:</p>

<p>2.8. Causa-morte natural por doença: caso seja constatada causa-morte indefinida/indeterminada, suspeita ou violenta, a família da <strong>ASSISTIDA</strong> deverá obter uma autorização judicial. Caso não haja a liberação judicial, todo custo com a assistência cremação será convertida para sepultamento/enterro no cemitério indicado pela família, com as despesas das taxas de aluguel do jazigo, taxa de abertura de jazigo e taxa de velório e demais, conforme ANEXO I - CONSIDERAÇÕES GERAIS, e respeitando as demais cláusulas deste contrato;</p>

<p>2.9. Caso a pessoa falecida não tenha deixado em vida uma declaração registrada em cartório de títulos e documentos afirmando o seu próprio desejo de ser cremada, após o óbito confirmado passa a ser indispensável a lavratura de uma única Escritura Declaratória de Cremação, assinada por todos os parentes de 1o. (primeiro), que mandatoriamente deve ser validada presencialmente por todos os aludidos familiares no correspondente cartório, não sendo possível a outorga de poderes via procuração para autorização da cremação no Brasil, além da exigência de um dos parentes constantes na referida Escritura no crematório de destino no dia da cerimônia para assinar a respectiva ata de cremação. Caso não seja possível a observação desta disposição (por ausência de algum familiar ou falta de consenso familiar), a família da <strong>ASSISTIDA</strong> deverá obter uma autorização judicial para liberação da pretendida cremação. Caso haja negativa da liberação judicial, todo custo com a assistência cremação será convertida para sepultamento/enterro no cemitério indicado pela família, com as despesas das taxas de aluguel do jazigo, taxa de abertura de jazigo e taxa de velório e demais, conforme ANEXO I - CONSIDERAÇÕES GERAIS, e respeitando as demais cláusulas deste contrato;</p>

<p>2.10. A "Declaração de Óbito" deverá conter a assinatura de 2 (dois) médicos (de qualquer especialidade) com os CRMs carimbados ou de um médico legista com sua especialização atestada por carimbo e CRM. Caso não seja observada uma ou outra condição,&nbsp;todo custo com a assistência cremação será convertida para sepultamento/enterro no cemitério indicado pela família, com as despesas das taxas de aluguel do jazigo, taxa de abertura de jazigo e taxa de velório e demais, conforme ANEXO I - CONSIDERAÇÕES GERAIS, e respeitando as demais cláusulas deste contrato; e</p>

<p>2.11. Caso a família da <strong>ASSISTIDA</strong> opte pela cremação ou sepultamento/enterro em qualquer outro cemitério distinto ao do registro / local do óbito, a família da <strong>ASSISTIDA</strong> deverá arcar diretamente com todos os custos (adicionais) do funeral não previstos pela cobertura aqui contratada, observado o limite de 45 quilômetros de raio e demais excludentes detalhadas na cláusula 2.4.</p>

<p>2.12. O escopo dos Serviços não inclui cobertura de traslado aéreo (nacional ou internacional) - tal cobertura, se necessária, poderá ser contratada pelo <strong>CONVENIADO</strong> com a <strong>ALEAH,</strong> em documento separado.</p>

<p>2.13. Para acionamento da assistência sepultamento ou cremação objeto deste contrato, o <strong>CONVENIADO</strong> deverá portar a carteirinha física (plástico) ou a versão digital via acesso (por senha) no aplicativo de conveniados da <strong>ALEAH</strong>.</p>

<p>2.14. Em nenhuma hipótese haverá reembolso de despesas de funerais não gerenciadas pela <strong>ALEAH e/ou uma de suas subsidiárias credenciadas</strong>, uma vez que este Contrato consiste na execução de serviços especializados em cremação ou sepultamento.</p>


<p><strong>CLÁUSULA III - PRAZO DE VIGÊNCIA E RESCISÃO</strong></p>

<p>3.1. O prazo de vigência deste Contrato é determinado, com início na data da sua assinatura, e término quando da realização da assistência funeral aqui tratada, nos termos deste instrumento, ressalvado o prazo indicado no item 1.4, quando se tratar de substituição de pessoa <strong>ASSISTIDA</strong>.</p>

<p>3.2. O presente Contrato considerar-se-á automaticamente rescindido, independentemente de notificação ou interpelação, judicial ou extrajudicial, sem qualquer ônus ou indenização, nas seguintes hipóteses:</p>
<
p>(a) Ocorrência de caso fortuito ou força maior, na forma da lei, regularmente comprovada e que a impeça a execução ou continuidade do presente instrumento; ou</p>
<p>(b) Decretação de insolvência, falência, requerimento de recuperação judicial ou extrajudicial, ou liquidação da <strong>ALEAH</strong>.</p>


<p><strong>CLÁUSULA IV - PREÇO</strong></p>

<p>4.1. Pela prestação de serviços objeto deste Contrato para Sepultamento ou Cremação - o <strong>CONVENIADO</strong> pagará à <strong>ALEAH</strong> a quantia total conforme opções abaixo selecionadas; a ser paga em até 20 (vinte) parcelas, sem juros, mediante boletos bancários mensais ou em até 12 (doze) parcelas mensais no cartão de crédito (bandeiras VISA, AMEX ou MASTERCARD).</p>

<ul>
    <li>20 parcelas de R$ 300,00 no boleto bancário (
        <input type="text" class="whiterogue-contract-label-x"
               id="billing_formadepagamento_1_text"
               value="" disabled /> 
        );</li>
    <li>15 parcelas de R$ 400,00 no boleto bancário ( 
        <input type="text" class="whiterogue-contract-label-x"
               id="billing_formadepagamento_2_text"
               value="" disabled />
        );</li>
    <li>12 parcelas de R$ 500,00 no boleto bancário ( 
        <input type="text" class="whiterogue-contract-label-x"
               id="billing_formadepagamento_3_text"
               value="" disabled />
        );</li>
    <li>Ou em 12 parcelas de R$ 500,00 no cartão de crédito (
        <input type="text" class="whiterogue-contract-label-x"
               id="billing_formadepagamento_4_text"
               value="" disabled />
        );</li>
    <li>10 parcelas de R$600,00 no cartão de crédito (
        <input type="text" class="whiterogue-contract-label-x"
               id="billing_formadepagamento_5_text"
               value="" disabled />
        );</li>
</ul>

<p><strong><em>Ou com Abrangência Familiar (opcional), </em></strong>isto é, inclusa a cobertura extensiva para um familiar de acordo com a taxa transferência no valor de R$ 900,00 prevista pela Cláusula 1.3, correspondendo à quantia total conforme opções abaixo selecionadas; a ser paga em até 23 (vinte e três) parcelas, sem juros, mediante boletos bancários mensais ou em até 12 (doze) parcelas mensais no cartão de crédito (bandeiras VISA, AMEX ou MASTERCARD):</p>

<ul>
    <li>23 parcelas de R$ 300,00 no boleto bancário (
        <input type="text" class="whiterogue-contract-label-x"
               id="billing_formadepagamento_6_text"
               value="" disabled />);</li>
    <li>15 parcelas de R$ 460,00 no boleto bancário (
        <input type="text" class="whiterogue-contract-label-x"
               id="billing_formadepagamento_7_text"
               value="" disabled />
        );</li>
    <li>12 parcelas de R$ 575,00 no boleto bancário (
        <input type="text" class="whiterogue-contract-label-x"
               id="billing_formadepagamento_8_text"
               value="" disabled />
        );</li>
    <li>Ou em até 12 parcelas de R$ 575,00 no cartão de crédito (
        <input type="text" class="whiterogue-contract-label-x"
               id="billing_formadepagamento_9_text"
               value="" disabled />
        ) ou;</li>
    <li>10 parcelas de R$690,00 no cartão de crédito (
        <input type="text" class="whiterogue-contract-label-x"
               id="billing_formadepagamento_10_text"
               value="" disabled />
        );</li>
</ul>

<p>O acionamento 24H da ALEAH pelo CONVENIADO deverá ocorrer imediatamente com base na confirmação do óbito pelas centrais 021-3624-2315 ou 011-2548-6377 ou 019-3352-4650.</p>

<p>Coberturas inclusas: (i) o caixão, (ii) carro para enterro (dentro do município de origem, onde ocorreu o óbito ou limitado ao raio de 45 quilômetros), (iii) enfeites florais e véu dentro do caixão, (iv) preparação do corpo, que consiste na troca de roupas e necro-maquiagem facial, (v) o velório por até 8hrs de período / duração; (vi) o registro do óbito (valor correspondente à taxa do município do óbito); (vii) todas as taxas municipais inclusas tanto para cerimônia de velório (valores equivalentes às taxas do próprio município), quanto para cremação ou sepultamento; e (viii) locação de jazigo (exclusivo em cemitério público, por 3 ou 5 anos, conforme legislação local)</p>

<p>Importante - o intervalo de tempo estimado para o início do velório a partir do registro de óbito no competente cartório ou agência funerária do município pode variar de 4 a 10 horas, conforme disponibilidade das capelas / salas de velório em razão de outros funerais;</p>

<p>4.2. A Nota Fiscal Eletrônica (NFe) da <strong>ALEAH</strong> será emitida e enviada ao endereço de e-mail informado pelo <strong>CONVENIADO</strong> no prazo de até 5 (cinco) dias úteis da data de assinatura deste Contrato.</p>

<p>4.3. No caso de inadimplemento do <strong>CONVENIADO</strong> quanto aos pagamentos fixados nesta cláusula, a <strong>ALEAH</strong>, a seu exclusivo critério e sem notificação prévia, poderá suspender a cobertura dos Serviços até o efetivo pagamento. Caso o débito não seja pago no prazo de até 10 (dez) dias contados de seu vencimento, o <strong>CONVENIADO</strong> perderá, automaticamente, a cobertura contratada nos termos deste Contrato, não fazendo jus a qualquer reembolso ou estorno a qualquer título.</p>

<p>4.4. Caso o pagamento não seja realizado no prazo de seu respectivo vencimento, total ou parcialmente, sobre o valor em atraso incidirão multa compensatória de 2% (dois) por cento e juros de mora de 1% (um por cento) ao mês, <em>pro rata die</em>, sem prejuízo do estabelecido na cláusula 4.6 acima.</p>

<p>4.5. Caso o <strong>CONVENIADO</strong> não pague qualquer das parcelas fixadas no item 4.1 supra nos seus respectivos vencimentos, as coberturas tratadas neste instrumento serão automaticamente suspensas.</p>

<p>4.6. Caso hajam parcelas vencidas e não pagas, as parcelas vincendas vencerão antecipadamente e todas as parcelas não pagas (vencidas e vincendas) deverão ser pagas em parcela única em até 24 (vinte e quatro) horas do início da execução dos Serviços.</p>


<p><strong>CLÁUSULA V - DISPOSIÇÕES GERAIS</strong></p>

<p>5.1. Este Contrato é celebrado em caráter irrevogável e irretratável, obrigando as Partes, seus herdeiros e sucessores, a qualquer título.</p>

<p>5.2. As Partes declaram e reconhecem que o presente instrumento, assinado por 2 (duas) testemunhas, constitui título executivo extrajudicial, nos termos do artigo 585, inciso II, do Código de Processo Civil, assim como as obrigações de fazer aqui contidas comportam execução específica, nos termos dos artigos 461, 632, 639 e seguintes do Código de Processo Civil.</p>

<p>5.3. Nenhuma alteração ou modificação deste Contrato será válida, a menos que efetuado por escrito e mediante assinatura de termo aditivo pelas Partes.</p>

<p>5.4. Todas as notificações, requerimentos, solicitações e outras comunicações previstas neste Contrato ou relacionadas com o mesmo, serão feitas por escrito e serão consideradas devidamente recebidas desde que tenham sido enviadas por carta com aviso de recebimento, para os endereços constantes do preâmbulo do presente Contrato.</p>

<p>5.5. Na hipótese de qualquer cláusula, termo ou disposição deste Contrato ser declarado nula ou inexequível, tal nulidade ou inexequibilidade não afetará quaisquer outras cláusulas, nos termos ou disposições aqui contidas, as quais permanecerão em pleno vigor e efeito.</p>


<p><strong>CLÁUSULA VI - FORO</strong></p>

<p>6.1. As Partes elegem o foro da Comarca de São Paulo, Estado de São Paulo, com renúncia de quaisquer outros, por mais privilegiados que sejam, para dirimir eventuais dúvidas ou situações que se apresentem necessárias e imprescindíveis na discussão do presente Contrato.</p>

<p>E assim, por estarem justas e contratadas, as Partes celebram o presente Contrato em 2 (duas) vias de igual teor e forma, na presença das 2 (duas) testemunhas abaixo.</p>

<p style="text-align:center;">São Paulo, <?php echo date_i18n(get_option('date_format'));?>.</p></br>

<p style="text-align:center; margin-bottom:0; padding-bottom:0;"><strong>______________________________________________</strong></p>
<p style="text-align:center; margin-top:0; padding-top:0;"><strong>Aleah Assistência em Seguros LTDA.</strong></p></br>

<p style="text-align:center; margin-bottom:0; padding-bottom:0;"><strong>______________________________________________</strong></p>
<p style="text-align:center; margin-top:0; padding-top:0;"><strong> Nome Conveniado / Sr.(a)</strong></p></br>

<p style="text-align:center; margin-bottom:0; padding-bottom:0;"><strong> ______________________________________________</strong></p>
<p style="text-align:center; margin-top:0; padding-top:0;"><strong> Nome Conveniado Substituto / Sr.(a)</strong></p></br>

<p><strong>TESTEMUNHAS:</strong></p>
<p style="margin-bottom:0; padding-bottom:0;"><strong>_________________________________________________</strong></p>
<p style="margin:0; padding:0;">Nome:</p>
<p style="margin:0; padding:0;">CPF:</p></br>
<p style="margin-bottom:0; padding-bottom:0;"><strong>_________________________________________________</strong></p>
<p style="margin:0; padding:0;">Nome:</p>
<p style="margin:0; padding:0;">CPF:</p></br>


<p style="text-align:center;"><strong>ANEXO I</strong></p>

<p style="text-align:center;">CONSIDERAÇÕES GERAIS</p>

<p>Conhecendo um pouco mais sobre a ALEAH BRASIL ("ALEAH")</p>

<p>A <strong>ALEAH</strong> é uma empresa especializada em assistência e consultoria funeral, especialmente a segurados, para sepultamentos, cremações, orientando o cliente para o trâmite correto e assistindo-o na adequada liberações em órgãos públicos, com muita dedicação e qualidade de sua equipe: <strong>Diferenciais:</strong> algumas das coberturas abaixo são adicionais às coberturas do Plano Funerário Brasil, conforme disposições do presente contrato, sobretudo o disposto na cláusula 2.4.</p>

<ul>
    <li>Central de Atendimento 24 horas, com atendentes preparados para lidar com qualquer situação de luto (decorrente de morte natural, suspeita ou violenta);</li>
    <li>Acompanhamento personalizado e presencial de um assistente social com larga experiência e conhecimento documental para registro de óbito junto a qualquer município do Brasil;</li>
    <li>Orientação detalhada para obtenção das autorizações legais exigidas, no caso de óbitos envolvendo acidentes, suicídios e homicídios;</li>
    <li>Preparação do corpo da pessoa falecida (troca de roupas e necromaquiagem facial);</li>
    <li>Apoio psicológico pelos nossos Agentes Familiares e Assistentes Sociais durante o atendimento ou a posteriori por nossos psicólogos (custo à parte);</li>
    <li>Serviços de tanatopraxia, que consistem em técnicas químicas para devolverem a forma natural do corpo, escondendo marcas de acidentes, marcas roxas, ou hematomas, inchaços e, portanto, garantindo uma aparência próxima à fisionomia em vida (custo à parte);</li>
    <li>Agendamento e organização de cerimonial religioso, inclusive na residência da família enlutada, integrando a logística da família com a disponibilidade de salas de velório públicas ou privada, incluindo igrejas, capelas e hospitais, de acordo com seus princípios e fé religiosos (custo à parte);;</li>
    <li>Orientação documental às famílias para iniciar o processo de reembolso junto às seguradoras e/ou bancos originadores das coberturas de auxílio funeral;</li>
    <li>Disponibilização de coroas de flores para o funeral (custo à parte);</li>
</ul>

<p>A Aleah Brasil declara, para todos os efeitos de direito que:</p>
<ol>
    <li>O serviço por ela prestado é privado; e que</li>
    <li>Utiliza itens e serviços funerários específicos quando estes forem de monopólio de prefeituras locais.</li>
</ol>
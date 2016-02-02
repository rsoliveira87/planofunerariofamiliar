<?php
/**
 * @var $user WP_User User instance.
 * @var $customer jigoshop_user Customer data.
 */
?>
<h2><?php _e('Jigoshop profile', 'jigoshop'); ?></h2>
<table class="form-table" style="width: 50%; float: left;">
	<caption><?php _e('Billing address', 'jigoshop'); ?></caption>
	<tbody>
	<tr>
		<th scope="row"><?php _e('First name', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[billing_first_name]" value="<?php echo $customer->getBillingFirstName(); ?>" class="regular-text" /></td>
	</tr>
	<tr>
		<th scope="row"><?php _e('Last name', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[billing_last_name]" value="<?php echo $customer->getBillingLastName(); ?>" class="regular-text" /> </td>
	</tr>
    <tr>
		<th scope="row"><?php _e('Estado civil', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[billing_estadocivil]" value="<?php echo $customer->getBillingEstadocivil(); ?>" class="regular-text" /> </td>
	</tr>
    <tr>
		<th scope="row"><?php _e('Nacionalidade', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[billing_nacionalidade]" value="<?php echo $customer->getBillingNacionalidade(); ?>" class="regular-text" /> </td>
	</tr>
    <tr>
		<th scope="row"><?php _e('Profissão', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[billing_profissao]" value="<?php echo $customer->getBillingProfissao(); ?>" class="regular-text" /> </td>
	</tr>
    <tr>
		<th scope="row"><?php _e('RG', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[billing_rg]" value="<?php echo $customer->getBillingRG(); ?>" class="regular-text" /> </td>
	</tr>
    <tr>
		<th scope="row"><?php _e('CPF', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[billing_cpf]" value="<?php echo $customer->getBillingCPF(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('Company', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[billing_company]" value="<?php echo $customer->getBillingCompany(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scioe="row"><?php _e('EU VAT Number', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[billing_euvatno]" value="<?php echo $customer->getBillingEuvatno(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('Address 1', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[billing_address_1]" value="<?php echo $customer->getBillingAddress1(); ?>" class="regular-text" /> </td>
	</tr>
    <tr>
		<th scope="row"><?php _e('Número', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[billing_numero]" value="<?php echo $customer->getBillingNumero(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('Complemento', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[billing_address_2]" value="<?php echo $customer->getBillingAddress2(); ?>" class="regular-text" /> </td>
	</tr>
    <tr>
		<th scope="row"><?php _e('Bairro', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[billing_bairro]" value="<?php echo $customer->getBillingBairro(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('City', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[billing_city]" value="<?php echo $customer->getBillingCity(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('Postcode', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[billing_postcode]" value="<?php echo $customer->getBillingPostcode(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('Country', 'jigoshop'); ?></th>
		<td><?php jigoshop_render('admin/user-profile/country_dropdown', array(
			'country' => $customer->getBillingCountry(),
			'state' => $customer->getBillingState(),
			'name' => 'billing_country',
		)); ?></td>
	</tr>
	<tr>
		<th scope="row"><?php _e('Email', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[billing_email]" value="<?php echo $customer->getBillingEmail(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('Phone', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[billing_phone]" value="<?php echo $customer->getBillingPhone(); ?>" class="regular-text" /> </td>
	</tr>
    <tr>
		<th scope="row"><?php _e('Nome do Assistido', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[billing_assistido_nome]" value="<?php echo $customer->getBillingAssistidonome(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('RG do Assistido', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[billing_assistido_rg]" value="<?php echo $customer->getBillingAssistidorg(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('Forma de Pagamento', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[billing_formadepagamento]" value="<?php echo $customer->getBillingFormadepagamento(); ?>" class="regular-text" /> </td>
	</tr>
	</tbody>
</table>
<table class="form-table" style="width: 50%; float: left; clear: none;">
	<caption><?php _e('Shipping address', 'jigoshop'); ?></caption>
	<tbody>
	<tr>
		<th scope="row"><?php _e('First name', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[shipping_first_name]" value="<?php echo $customer->getShippingFirstName(); ?>" class="regular-text" /></td>
	</tr>
	<tr>
		<th scope="row"><?php _e('Last name', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[shipping_last_name]" value="<?php echo $customer->getShippingLastName(); ?>" class="regular-text" /> </td>
	</tr>
    <tr>
		<th scope="row"><?php _e('Estado civil', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[shipping_estadocivil]" value="<?php echo $customer->getShippingEstadocivil(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('Nacionalidade', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[shipping_nacionalidade]" value="<?php echo $customer->getShippingNacionalidade(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('Profissão', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[shipping_profissao]" value="<?php echo $customer->getShippingProfissao(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('RG', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[shipping_rg]" value="<?php echo $customer->getShippingRG(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('CPF', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[shipping_cpf]" value="<?php echo $customer->getShippingCPF(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('Company', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[shipping_company]" value="<?php echo $customer->getShippingCompany(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('Address 1', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[shipping_address_1]" value="<?php echo $customer->getShippingAddress1(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('Número', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[shipping_numero]" value="<?php echo $customer->getShippingNumero(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('Address 2', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[shipping_address_2]" value="<?php echo $customer->getShippingAddress2(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('Bairro', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[shipping_bairro]" value="<?php echo $customer->getShippingBairro(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('City', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[shipping_city]" value="<?php echo $customer->getShippingCity(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('Postcode', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[shipping_postcode]" value="<?php echo $customer->getShippingPostcode(); ?>" class="regular-text" /> </td>
	</tr>
	<tr>
		<th scope="row"><?php _e('Country', 'jigoshop'); ?></th>
		<td><?php jigoshop_render('admin/user-profile/country_dropdown', array(
				'country' => $customer->getShippingCountry(),
				'state' => $customer->getShippingState(),
				'name' => 'shipping_country',
			)); ?></td>
	</tr>
	<tr>
		<th scope="row"><?php _e('Telefone', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[shipping_phone]" value="<?php echo $customer->getShippingPhone(); ?>" class="regular-text" /> </td>
	</tr>
    <tr>
		<th scope="row"><?php _e('Email', 'jigoshop'); ?></th>
		<td><input type="text" name="jigoshop[shipping_email]" value="<?php echo $customer->getShippingEmail(); ?>" class="regular-text" /> </td>
	</tr
	</tbody>
</table>
<span style="clear: both; display: block;"></span>

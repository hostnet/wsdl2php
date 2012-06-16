<?php

namespace Controle;
/**
 * PaymentOptionDetailsType
 * Details about a specific payment option.
 */
class PaymentOptionDetailsType {
	/**
	 * @var \Controle\BuyerPaymentMethodCodeType | A payment method value defined in the schema.<br><br> Related fields:<br> Item.PaymentMethods
	 * in AddItem<br> PaymentMethodUsed in ReviseCheckoutStatus
	 */
	public $PaymentOption;
	/**
	 * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
	 */
	public $Description;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}


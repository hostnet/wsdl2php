<?php

namespace Controle\sub1\sub2;

/**
 * PaymentOptionDetailsType
 * Details about a specific payment option.
 */
class PaymentOptionDetailsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\BuyerPaymentMethodCodeType | A payment method value defined in the schema.<br><br> Related fields:<br> Item.PaymentMethods
	 * in AddItem<br> PaymentMethodUsed in ReviseCheckoutStatus
	 */
	public $PaymentOption;
	/**
	 * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
	 */
	public $Description;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param BuyerPaymentMethodCodeType $val
	 * @throws Exception
	 */
	public function setPaymentOption($val)
	{
        $this->PaymentOption = $val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Description');
        }
        $this->Description = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}

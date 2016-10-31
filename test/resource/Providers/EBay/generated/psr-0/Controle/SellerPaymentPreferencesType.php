<?php

namespace Controle;

/**
 * SellerPaymentPreferencesType
 * Defines the values that make up the seller's preferences.
 */
class SellerPaymentPreferencesType
{
	/**
	 * @var boolean | Indicates whether the seller wants all transactions with eBay to use the address specified
	 * in SellerPaymentAddress.
	 */
	public $alwaysusethispaymentaddress;
	/**
	 * @var \Controle\DisplayPayNowButtonCodeType | Determines whether the Pay Now button should always be displayed for the user's listings.
	 */
	public $displaypaynowbutton;
	/**
	 * @var boolean | Specifies whether a seller wants to let buyers know that PayPal payments are preferred.
	 */
	public $paypalpreferred;
	/**
	 * @var string | Specifies the default email address the seller uses for receiving PayPal payments.
	 */
	public $defaultpaypalemailaddress;
	/**
	 * @var boolean | Indicates whether PayPal is always accepted for the seller's listings.
	 */
	public $paypalalwayson;
	/**
	 * @var \Controle\AddressType | Address used by eBay for purposes of billing the user for seller fees.
	 */
	public $sellerpaymentaddress;
	/**
	 * @var \Controle\UPSRateOptionCodeType | Specifies the type of United Postal Service rates to use.
	 */
	public $upsrateoption;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setAlwaysUseThisPaymentAddress($val)
	{
        $this->alwaysusethispaymentaddress = (int)$val;
	}

	/**
	 * @param DisplayPayNowButtonCodeType $val
	 * @throws Exception
	 */
	public function setDisplayPayNowButton($val)
	{
        $this->displaypaynowbutton = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPayPalPreferred($val)
	{
        $this->paypalpreferred = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDefaultPayPalEmailAddress($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DefaultPayPalEmailAddress');
        }
        $this->defaultpaypalemailaddress = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPayPalAlwaysOn($val)
	{
        $this->paypalalwayson = (int)$val;
	}

	/**
	 * @param AddressType $val
	 * @throws Exception
	 */
	public function setSellerPaymentAddress($val)
	{
        $this->sellerpaymentaddress = (int)$val;
	}

	/**
	 * @param UPSRateOptionCodeType $val
	 * @throws Exception
	 */
	public function setUPSRateOption($val)
	{
        $this->upsrateoption = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}

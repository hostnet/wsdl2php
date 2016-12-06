<?php

namespace Controle\sub1\sub2;

/**
 * SellerPaymentPreferencesType
 * Defines the values that make up the seller's preferences.
 */
class SellerPaymentPreferencesType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var boolean | Indicates whether the seller wants all transactions with eBay to use the address specified
	 * in SellerPaymentAddress.
	 */
	public $AlwaysUseThisPaymentAddress;
	/**
	 * @var \Controle\sub1\sub2\DisplayPayNowButtonCodeType | Determines whether the Pay Now button should always be displayed for the user's listings.
	 */
	public $DisplayPayNowButton;
	/**
	 * @var boolean | Specifies whether a seller wants to let buyers know that PayPal payments are preferred.
	 */
	public $PayPalPreferred;
	/**
	 * @var string | Specifies the default email address the seller uses for receiving PayPal payments.
	 */
	public $DefaultPayPalEmailAddress;
	/**
	 * @var boolean | Indicates whether PayPal is always accepted for the seller's listings.
	 */
	public $PayPalAlwaysOn;
	/**
	 * @var \Controle\sub1\sub2\AddressType | Address used by eBay for purposes of billing the user for seller fees.
	 */
	public $SellerPaymentAddress;
	/**
	 * @var \Controle\sub1\sub2\UPSRateOptionCodeType | Specifies the type of United Postal Service rates to use.
	 */
	public $UPSRateOption;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setAlwaysUseThisPaymentAddress($val)
	{
        $this->AlwaysUseThisPaymentAddress = $val;
	}

	/**
	 * @param DisplayPayNowButtonCodeType $val
	 * @throws Exception
	 */
	public function setDisplayPayNowButton($val)
	{
        $this->DisplayPayNowButton = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPayPalPreferred($val)
	{
        $this->PayPalPreferred = $val;
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
        $this->DefaultPayPalEmailAddress = $val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPayPalAlwaysOn($val)
	{
        $this->PayPalAlwaysOn = $val;
	}

	/**
	 * @param AddressType $val
	 * @throws Exception
	 */
	public function setSellerPaymentAddress($val)
	{
        $this->SellerPaymentAddress = $val;
	}

	/**
	 * @param UPSRateOptionCodeType $val
	 * @throws Exception
	 */
	public function setUPSRateOption($val)
	{
        $this->UPSRateOption = $val;
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

<?php

namespace Controle\sub1\sub2;

/**
 * CombinedPaymentPreferencesType
 * Defines a seller's preferences for allowing buyers to combine more than one purchase into
 * one payment.
 */
class CombinedPaymentPreferencesType
{
	/**
	 * @var \Controle\sub1\sub2\CalculatedShippingPreferencesType | Contains a seller's preferences for having shipping costs calculated by eBay.
	 */
	public $calculatedshippingpreferences;
	/**
	 * @var \Controle\sub1\sub2\CombinedPaymentOptionCodeType | Specifies whether or not a seller wants to allow buyers to combine purchases in order to
	 * receive a discount.
	 */
	public $combinedpaymentoption;
	/**
	 * @var \Controle\sub1\sub2\CombinedPaymentPeriodCodeType | Specifies the period in which the user will allow buyers to combine purchases in order
	 * to receive a discount.
	 */
	public $combinedpaymentperiod;
	/**
	 * @var \Controle\sub1\sub2\FlatShippingPreferencesType | Specifies a seller's preferences for flat-rate shipping.
	 */
	public $flatshippingpreferences;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param CalculatedShippingPreferencesType $val
	 * @throws Exception
	 */
	public function setCalculatedShippingPreferences($val)
	{
        $this->calculatedshippingpreferences = (int)$val;
	}

	/**
	 * @param CombinedPaymentOptionCodeType $val
	 * @throws Exception
	 */
	public function setCombinedPaymentOption($val)
	{
        $this->combinedpaymentoption = (int)$val;
	}

	/**
	 * @param CombinedPaymentPeriodCodeType $val
	 * @throws Exception
	 */
	public function setCombinedPaymentPeriod($val)
	{
        $this->combinedpaymentperiod = (int)$val;
	}

	/**
	 * @param FlatShippingPreferencesType $val
	 * @throws Exception
	 */
	public function setFlatShippingPreferences($val)
	{
        $this->flatshippingpreferences = (int)$val;
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

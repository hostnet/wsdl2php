<?php

namespace Controle;

/**
 * CombinedPaymentPreferencesType
 * Defines a seller's preferences for allowing buyers to combine more than one purchase into
 * one payment.
 */
class CombinedPaymentPreferencesType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\CalculatedShippingPreferencesType | Contains a seller's preferences for having shipping costs calculated by eBay.
	 */
	public $CalculatedShippingPreferences;
	/**
	 * @var \Controle\CombinedPaymentOptionCodeType | Specifies whether or not a seller wants to allow buyers to combine purchases in order to
	 * receive a discount.
	 */
	public $CombinedPaymentOption;
	/**
	 * @var \Controle\CombinedPaymentPeriodCodeType | Specifies the period in which the user will allow buyers to combine purchases in order
	 * to receive a discount.
	 */
	public $CombinedPaymentPeriod;
	/**
	 * @var \Controle\FlatShippingPreferencesType | Specifies a seller's preferences for flat-rate shipping.
	 */
	public $FlatShippingPreferences;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param CalculatedShippingPreferencesType $val
	 * @throws Exception
	 */
	public function setCalculatedShippingPreferences($val)
	{
        $this->CalculatedShippingPreferences = $val;
	}

	/**
	 * @param CombinedPaymentOptionCodeType $val
	 * @throws Exception
	 */
	public function setCombinedPaymentOption($val)
	{
        $this->CombinedPaymentOption = $val;
	}

	/**
	 * @param CombinedPaymentPeriodCodeType $val
	 * @throws Exception
	 */
	public function setCombinedPaymentPeriod($val)
	{
        $this->CombinedPaymentPeriod = $val;
	}

	/**
	 * @param FlatShippingPreferencesType $val
	 * @throws Exception
	 */
	public function setFlatShippingPreferences($val)
	{
        $this->FlatShippingPreferences = $val;
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

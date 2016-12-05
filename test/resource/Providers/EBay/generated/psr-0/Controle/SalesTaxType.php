<?php

namespace Controle;

/**
 * SalesTaxType
 * Type for expressing sales tax data.
 */
class SalesTaxType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var float | The tax percent to apply for a listing shipped to this jurisdiction. The value passed in
	 * is stored with a precision of 3 digits after the decimal point (##.###). GetTaxTable: this
	 * tag has no value if the user's tax table has not been set.
	 */
	public $SalesTaxPercent;
	/**
	 * @var string | State or jurisdiction for which the sales tax is being collected.            Also returned
	 * for Half.com (for GetOrders).
	 */
	public $SalesTaxState;
	/**
	 * @var boolean | Whether shipping costs are to be part of the base amount that is taxed. GetTaxTable: This
	 * tag is empty if the user did not previously provide information.
	 */
	public $ShippingIncludedInTax;
	/**
	 * @var \Controle\AmountType | (US only) The amount of sales tax. Also returned for Half.com (for GetOrders).
	 */
	public $SalesTaxAmount;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param float $val
	 * @throws Exception
	 */
	public function setSalesTaxPercent($val)
	{
        $this->SalesTaxPercent = ()$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSalesTaxState($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SalesTaxState');
        }
        $this->SalesTaxState = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setShippingIncludedInTax($val)
	{
        $this->ShippingIncludedInTax = ()$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setSalesTaxAmount($val)
	{
        $this->SalesTaxAmount = ()$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = ()$val;
	}
}

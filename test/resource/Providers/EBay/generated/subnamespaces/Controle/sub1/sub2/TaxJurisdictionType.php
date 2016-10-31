<?php

namespace Controle\sub1\sub2;

/**
 * TaxJurisdictionType
 * Tax-related details for a region or jurisdiction.
 */
class TaxJurisdictionType
{
	/**
	 * @var string | Representative identifier for the jurisdiction. Typically an abbreviation (e.g. CA for
	 * California).
	 */
	public $jurisdictionid;
	/**
	 * @var float | The tax percent to apply for a listing shipped to this jurisdiction. The value passed in
	 * is stored with a precision of 3 digits after the decimal point (##.###). GetTaxTable: this
	 * tag has no value if the user's tax table has not been set.
	 */
	public $salestaxpercent;
	/**
	 * @var boolean | Whether shipping costs are to be part of the base amount that is taxed. GetTaxTable: This
	 * tag is empty if the user did not previously provide information.
	 */
	public $shippingincludedintax;
	/**
	 * @var string | Full name for the jurisdiction or region for display purposes.
	 */
	public $jurisdictionname;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setJurisdictionID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for JurisdictionID');
        }
        $this->jurisdictionid = (int)$val;
	}

	/**
	 * @param float $val
	 * @throws Exception
	 */
	public function setSalesTaxPercent($val)
	{
        $this->salestaxpercent = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setShippingIncludedInTax($val)
	{
        $this->shippingincludedintax = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setJurisdictionName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for JurisdictionName');
        }
        $this->jurisdictionname = (int)$val;
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

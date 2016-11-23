<?php

namespace Controle;

/**
 * ExpressHistogramAisleType
 * Details about an Express aisle and matching item and catalog product counts in that aisle,
 * if any.
 */
class ExpressHistogramAisleType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\ExpressHistogramDomainDetailsType | Identifies an Express product type and provides item and eBay catalog product counts in
	 * that product type. Only returned if a product type matched the request.<br> <br> A product
	 * type domain can stand alone, or it can be grouped with other product types into an aisle
	 * or a department.
	 */
	public $DomainDetails;
	/**
	 * @var \Controle\ExpressHistogramProductType | Contains item and catalog product counts for an Express product type. Only returned when
	 * HistogramDetails is configured to return product types.<br> <br> An Aisle node can contain
	 * multiple ProductType nodes.
	 */
	public $ProductType;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ExpressHistogramDomainDetailsType $val
	 * @throws Exception
	 */
	public function setDomainDetails($val)
	{
        $this->DomainDetails = (int)$val;
	}

	/**
	 * @param ExpressHistogramProductType $val
	 * @throws Exception
	 */
	public function setProductType($val)
	{
        $this->ProductType = (int)$val;
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

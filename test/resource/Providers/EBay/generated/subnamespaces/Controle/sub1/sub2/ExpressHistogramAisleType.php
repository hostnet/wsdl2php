<?php

namespace Controle\sub1\sub2;
/**
 * ExpressHistogramAisleType
 * Details about an Express aisle and matching item and catalog product counts in that aisle,
 * if any.
 */
class ExpressHistogramAisleType {
	/**
	 * @var \Controle\sub1\sub2\ExpressHistogramDomainDetailsType | Identifies an Express product type and provides item and eBay catalog product counts in
	 * that product type. Only returned if a product type matched the request.<br> <br> A product
	 * type domain can stand alone, or it can be grouped with other product types into an aisle
	 * or a department.
	 */
	public $DomainDetails;
	/**
	 * @var \Controle\sub1\sub2\ExpressHistogramProductType | Contains item and catalog product counts for an Express product type. Only returned when
	 * HistogramDetails is configured to return product types.<br> <br> An Aisle node can contain
	 * multiple ProductType nodes.
	 */
	public $ProductType;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

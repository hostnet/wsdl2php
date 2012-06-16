<?php

namespace Controle\sub1\sub2;
/**
 * ExpressHistogramDomainDetailsType
 * Identifies a domain and provides statistics for items and catalog products found in that
 * domain.
 */
class ExpressHistogramDomainDetailsType {
	/**
	 * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
	 */
	public $Name;
	/**
	 * @var string | Specifies whether the bread crumb needs to be displayed above the listing header.
	 */
	public $BreadCrumb;
	/**
	 * @var int | Total number of active listings (on the specified Express site) that were pre-filled based
	 * on this eBay catalog product. Only returned when ProductDetails is set to Fine. This does
	 * not necessarily match the number of items returned in ItemArray (if any), because the call
	 * returns deduped items in ItemArray.
	 */
	public $ItemCount;
	/**
	 * @var int | The number of matching eBay catalog products that were found in the specified department,
	 * aisle, or product type at the moment when your request was processed.<br> <br> If HistogramDetails==Coarse
	 * and you don't specify DepartmentName, AisleName, or ProductTypeName in the request, Express
	 * only counts catalog products found in matching departments. In this particular case, ProductCount
	 * could be 0 in all domain histogram results when the only matching catalog products are
	 * in stand-alone product types or aisles (because they aren't grouped into departments).
	 */
	public $ProductCount;
	/**
	 * @var \Controle\sub1\sub2\anyURI | The image associated with the department, aisle, or product, if any. All domains should
	 * be associated with an image. However, there may be rare cases when an image is not available.
	 */
	public $ImageURL;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}


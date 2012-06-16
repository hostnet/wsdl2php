<?php

namespace Controle;
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
	 * @var \Controle\anyURI | The image associated with the department, aisle, or product, if any. All domains should
	 * be associated with an image. However, there may be rare cases when an image is not available.
	 */
	public $ImageURL;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Name');
		$this->Name = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setBreadCrumb($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for BreadCrumb');
		$this->BreadCrumb = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setItemCount($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->ItemCount = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setProductCount($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->ProductCount = (int)$val;
	}

	/**
	 * @param anyURI $val
	 * @throws Exception
	 */
	public function setImageURL($val) {
		
		$this->ImageURL = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}


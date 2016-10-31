<?php

namespace Controle;
/**
 * ShippingServiceOptionsType
 * Shipping costs and options related to a domestic shipping service.
 */
class ShippingServiceOptionsType {
	/**
	 * @var \Controle\AmountType | The insurance cost associated with shipping a single item with this shipping service. Exception:
	 * for GetItemShipping, this is proportional to QuantitySold. If the item has not yet been sold,
	 * insurance information cannot be calculated and the value is 0.00. For calculated shipping
	 * only. Also applicable to Half.com (for GetOrders).
	 */
	public $ShippingInsuranceCost;
	/**
	 * @var \Controle\token | A domestic shipping service offered for shipping the item (for example, UPS Ground). For
	 * a list of valid values that you can cache for future use, call GeteBayDetails with DetailName
	 * set to ShippingServiceDetails. For flat and calculated shipping. Also applicable to Half.com
	 * (for GetOrders).
	 */
	public $ShippingService;
	/**
	 * @var \Controle\AmountType | The meaning of this element depends on the call and on whether flat or calculated shipping
	 * has been selected. (For example, it could be the cost to ship a single item, the cost to
	 * ship all items, or the cost to ship just the first of many items, with ShippingServiceAdditionalCost
	 * accounting for the rest.) When returned by GetItemShipping, it includes the packaging and handling
	 * cost. For flat and calculated shipping. Also applicable to Half.com (for GetOrders).
	 */
	public $ShippingServiceCost;
	/**
	 * @var \Controle\AmountType | The cost of shipping each additional item beyond the first item. For input, this is required
	 * if the listing is for multiple items and should be zero for single-item listings. Default
	 * value is 0.00. For flat shipping only. Not applicable to Half.com.
	 */
	public $ShippingServiceAdditionalCost;
	/**
	 * @var int | Seller-preferred presentation order relative to other service options. Valid values: 1
	 * (1st choice), 2 (2nd choice), 3 (3rd choice). For flat and calculated shipping. Not applicable
	 * to Half.com.
	 */
	public $ShippingServicePriority;
	/**
	 * @var boolean | Indicates whether the service is an expedited shipping service. See Enabling Get It Fast. Not
	 * applicable to Half.com.
	 */
	public $ExpeditedService;
	/**
	 * @var int | The minimum guaranteed number of days in which the shipping carrier can ship an item (not
	 * including the time it takes the seller to deliver the item to the shipping carrier). See
	 * Enabling Get It Fast. Not applicable to Half.com.
	 */
	public $ShippingTimeMin;
	/**
	 * @var int | The maximum guaranteed number of days the shipping carrier will take to ship an item (not
	 * including the time it takes the seller to deliver the item to the shipping carrier). See
	 * Enabling Get It Fast. Not applicable to Half.com.
	 */
	public $ShippingTimeMax;
	/**
	 * @var \Controle\AmountType | An additional fee to charge US buyers who ship via UPS to Alaska, Hawaii or Puerto Rico.
	 * Only applies to eBay US and Motors Parts and Accessories and is only returned for those
	 * sites. Flat rate shipping only.
	 */
	public $ShippingSurcharge;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setShippingInsuranceCost($val) {
		
		$this->ShippingInsuranceCost = (int)$val;
	}

	/**
	 * @param token $val
	 * @throws Exception
	 */
	public function setShippingService($val) {
		
		$this->ShippingService = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setShippingServiceCost($val) {
		
		$this->ShippingServiceCost = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setShippingServiceAdditionalCost($val) {
		
		$this->ShippingServiceAdditionalCost = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setShippingServicePriority($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->ShippingServicePriority = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setExpeditedService($val) {
		
		$this->ExpeditedService = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setShippingTimeMin($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->ShippingTimeMin = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setShippingTimeMax($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->ShippingTimeMax = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setShippingSurcharge($val) {
		
		$this->ShippingSurcharge = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}


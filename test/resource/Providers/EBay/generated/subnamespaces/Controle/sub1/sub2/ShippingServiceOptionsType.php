<?php

namespace Controle\sub1\sub2;

/**
 * ShippingServiceOptionsType
 * Shipping costs and options related to a domestic shipping service.
 */
class ShippingServiceOptionsType
{
	/**
	 * @var \Controle\sub1\sub2\AmountType | The insurance cost associated with shipping a single item with this shipping service. Exception:
	 * for GetItemShipping, this is proportional to QuantitySold. If the item has not yet been sold,
	 * insurance information cannot be calculated and the value is 0.00. For calculated shipping
	 * only. Also applicable to Half.com (for GetOrders).
	 */
	public $shippinginsurancecost;
	/**
	 * @var \Controle\sub1\sub2\token | A domestic shipping service offered for shipping the item (for example, UPS Ground). For
	 * a list of valid values that you can cache for future use, call GeteBayDetails with DetailName
	 * set to ShippingServiceDetails. For flat and calculated shipping. Also applicable to Half.com
	 * (for GetOrders).
	 */
	public $shippingservice;
	/**
	 * @var \Controle\sub1\sub2\AmountType | The meaning of this element depends on the call and on whether flat or calculated shipping
	 * has been selected. (For example, it could be the cost to ship a single item, the cost to
	 * ship all items, or the cost to ship just the first of many items, with ShippingServiceAdditionalCost
	 * accounting for the rest.) When returned by GetItemShipping, it includes the packaging and handling
	 * cost. For flat and calculated shipping. Also applicable to Half.com (for GetOrders).
	 */
	public $shippingservicecost;
	/**
	 * @var \Controle\sub1\sub2\AmountType | The cost of shipping each additional item beyond the first item. For input, this is required
	 * if the listing is for multiple items and should be zero for single-item listings. Default
	 * value is 0.00. For flat shipping only. Not applicable to Half.com.
	 */
	public $shippingserviceadditionalcost;
	/**
	 * @var int | Seller-preferred presentation order relative to other service options. Valid values: 1
	 * (1st choice), 2 (2nd choice), 3 (3rd choice). For flat and calculated shipping. Not applicable
	 * to Half.com.
	 */
	public $shippingservicepriority;
	/**
	 * @var boolean | Indicates whether the service is an expedited shipping service. See Enabling Get It Fast. Not
	 * applicable to Half.com.
	 */
	public $expeditedservice;
	/**
	 * @var int | The minimum guaranteed number of days in which the shipping carrier can ship an item (not
	 * including the time it takes the seller to deliver the item to the shipping carrier). See
	 * Enabling Get It Fast. Not applicable to Half.com.
	 */
	public $shippingtimemin;
	/**
	 * @var int | The maximum guaranteed number of days the shipping carrier will take to ship an item (not
	 * including the time it takes the seller to deliver the item to the shipping carrier). See
	 * Enabling Get It Fast. Not applicable to Half.com.
	 */
	public $shippingtimemax;
	/**
	 * @var \Controle\sub1\sub2\AmountType | An additional fee to charge US buyers who ship via UPS to Alaska, Hawaii or Puerto Rico.
	 * Only applies to eBay US and Motors Parts and Accessories and is only returned for those
	 * sites. Flat rate shipping only.
	 */
	public $shippingsurcharge;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setShippingInsuranceCost($val)
	{
        $this->shippinginsurancecost = (int)$val;
	}

	/**
	 * @param token $val
	 * @throws Exception
	 */
	public function setShippingService($val)
	{
        $this->shippingservice = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setShippingServiceCost($val)
	{
        $this->shippingservicecost = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setShippingServiceAdditionalCost($val)
	{
        $this->shippingserviceadditionalcost = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setShippingServicePriority($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->shippingservicepriority = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setExpeditedService($val)
	{
        $this->expeditedservice = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setShippingTimeMin($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->shippingtimemin = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setShippingTimeMax($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->shippingtimemax = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setShippingSurcharge($val)
	{
        $this->shippingsurcharge = (int)$val;
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

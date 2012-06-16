<?php

namespace Controle;
/**
 * InternationalShippingServiceOptionsType
 * Shipping costs and options related to an international shipping service. When used as input,
 * if one is provided, at least one domestic ShippingService must be provided. This type does
 * not exist before compatibility level 383.
 */
class InternationalShippingServiceOptionsType {
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
	 * @var string | An international location or region to which the item may be shipped via this particular
	 * shipping service. Associated with the shipping service by the seller. Use GeteBayDetails
	 * to determine which locations are valid per site. These values are string equivalents of
	 * values found in ShippingRegionCodeType and CountryCodeType. For the AddItem family of calls,
	 * this field is required if any international shipping service has been specified.
	 */
	public $ShipToLocation;
	/**
	 * @var \Controle\AmountType | The insurance cost associated with shipping a single item with this shipping service. Exception:
	 * for GetItemShipping, this is proportional to QuantitySold. If the item has not yet been sold,
	 * insurance information cannot be calculated and the value is 0.00. For calculated shipping
	 * only. Also applicable to Half.com (for GetOrders).
	 */
	public $ShippingInsuranceCost;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}


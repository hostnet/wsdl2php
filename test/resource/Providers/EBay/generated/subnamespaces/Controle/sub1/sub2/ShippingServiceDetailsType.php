<?php

namespace Controle\sub1\sub2;
/**
 * ShippingServiceDetailsType
 * Details about a specific shipping service.
 */
class ShippingServiceDetailsType {
	/**
	 * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
	 */
	public $Description;
	/**
	 * @var boolean | Indicates whether the service is an expedited shipping service. See Enabling Get It Fast. Not
	 * applicable to Half.com.
	 */
	public $ExpeditedService;
	/**
	 * @var boolean | Whether the shipping service is an international shipping service, i.e. one that ships
	 * from to another country from the country of the specified site.<br><br> Related field:<br> Item.ShippingDetails.InternationalShippingServiceOption
	 * in AddItem
	 */
	public $InternationalService;
	/**
	 * @var \Controle\sub1\sub2\token | A domestic shipping service offered for shipping the item (for example, UPS Ground). For
	 * a list of valid values that you can cache for future use, call GeteBayDetails with DetailName
	 * set to ShippingServiceDetails. For flat and calculated shipping. Also applicable to Half.com
	 * (for GetOrders).
	 */
	public $ShippingService;
	/**
	 * @var int | Numeric identifier. A value greater than 50000 represents an international shipping service
	 * (confirmed by InternationalShippingService being true). Some applications use this ID to
	 * look up shipping services more efficiently. Also useful for applications that have migrated
	 * from the legacy XML API.
	 */
	public $ShippingServiceID;
	/**
	 * @var int | The maximum guaranteed number of days the shipping carrier will take to ship an item (not
	 * including the time it takes the seller to deliver the item to the shipping carrier). See
	 * Enabling Get It Fast. Not applicable to Half.com.
	 */
	public $ShippingTimeMax;
	/**
	 * @var int | The minimum guaranteed number of days in which the shipping carrier can ship an item (not
	 * including the time it takes the seller to deliver the item to the shipping carrier). See
	 * Enabling Get It Fast. Not applicable to Half.com.
	 */
	public $ShippingTimeMin;
	/**
	 * @var \Controle\sub1\sub2\ShippingServiceCodeType | For future use.
	 */
	public $ShippingServiceCode;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}


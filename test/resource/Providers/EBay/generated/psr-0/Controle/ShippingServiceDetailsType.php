<?php

namespace Controle;

/**
 * ShippingServiceDetailsType
 * Details about a specific shipping service.
 */
class ShippingServiceDetailsType
{
	// @codingStandardsIgnoreStart
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
	 * @var \Controle\token | A domestic shipping service offered for shipping the item (for example, UPS Ground). For
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
	 * @var \Controle\ShippingServiceCodeType | For future use.
	 */
	public $ShippingServiceCode;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Description');
        }
        $this->Description = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setExpeditedService($val)
	{
        $this->ExpeditedService = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setInternationalService($val)
	{
        $this->InternationalService = $val;
	}

	/**
	 * @param token $val
	 * @throws \Exception
	 */
	public function setShippingService($val)
	{
        $this->ShippingService = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setShippingServiceID($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ShippingServiceID = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setShippingTimeMax($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ShippingTimeMax = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setShippingTimeMin($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ShippingTimeMin = $val;
	}

	/**
	 * @param ShippingServiceCodeType $val
	 * @throws \Exception
	 */
	public function setShippingServiceCode($val)
	{
        $this->ShippingServiceCode = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws \Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}

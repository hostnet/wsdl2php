<?php

namespace Controle;

/**
 * ShippingLocationDetailsType
 * Details about a region or location to which the seller is willing to ship.
 */
class ShippingLocationDetailsType
{
	/**
	 * @var string | Short name or abbreviation for a region (e.g., Asia) or location (e.g. Japan).<br><br> Related
	 * field:<br> Item.ShippingDetails.InternationalShippingServiceOption.ShipToLocation in AddItem
	 */
	public $shippinglocation;
	/**
	 * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
	 */
	public $description;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setShippingLocation($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ShippingLocation');
        }
        $this->shippinglocation = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Description');
        }
        $this->description = (int)$val;
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

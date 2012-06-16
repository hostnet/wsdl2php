<?php

namespace Controle;
/**
 * ShippingLocationDetailsType
 * Details about a region or location to which the seller is willing to ship.
 */
class ShippingLocationDetailsType {
    /**
     * @var string | Short name or abbreviation for a region (e.g., Asia) or location (e.g. Japan).<br><br> Related
     * field:<br> Item.ShippingDetails.InternationalShippingServiceOption.ShipToLocation in
     * AddItem
     */
    public $ShippingLocation;
    /**
     * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
     */
    public $Description;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}


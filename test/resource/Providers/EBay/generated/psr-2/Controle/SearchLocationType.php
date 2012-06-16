<?php

namespace Controle;
/**
 * SearchLocationType
 * One of the data filters used when searching for items using GetSearchResults. Allows filtering
 * based on the location of the item or its availability relative to an eBay site. Or allows
 * for filtering based on regional listing.
 */
class SearchLocationType {
    /**
     * @var string | Specifies a region ID. The item must have been listed for the specified region to be
     * returned in the search result set.
     */
    public $RegionID;
    /**
     * @var \Controle\SiteLocationType | Specifies a filter based on a particular eBay site and the             item's relation
     * to            that site (items listed with a site's currency, items located
     *     in the country            for the site, items available to the country for the site,
     * and             items listed            on the specified site).
     */
    public $SiteLocation;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}


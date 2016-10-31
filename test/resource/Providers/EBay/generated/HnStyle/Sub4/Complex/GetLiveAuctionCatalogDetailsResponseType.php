<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetLiveAuctionCatalogDetailsResponseType
 * Returns all the upcoming eBay Live Auctions catalogs and sale schedules that the user has
 * created.
 */
class GetLiveAuctionCatalogDetailsResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\LiveAuctionCatalogType | Each eBay Live Auctions catalog describes one live auction catalog created by the user, along
     * with one or more sale schedules. Use this information to determine an appropriate combination
     * of catalog and schedule IDs in which to list lot items with AddLiveAuctionItem. Only
     * returns details about catalogs that contain pending sales. That is, if a catalog has
     * no sales or all its sales have ended, the catalog details are not returned.
     */
    public $liveauctioncatalog;
    /**
     * @param LiveAuctionCatalogType $val
     * @throws Exception
     */
    public function setLiveAuctionCatalog($val)
    {
        $this->liveauctioncatalog = (int)$val;
    }
}

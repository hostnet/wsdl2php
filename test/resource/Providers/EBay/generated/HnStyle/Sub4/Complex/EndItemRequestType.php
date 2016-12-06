<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * EndItemRequestType
 * Ends the specified item listing before the date and time at which it would normally end
 * (per the listing duration). For competitive-bidding listings that have bids on them, the
 * listing ends as a successful auction with winning bidder(s) unless the seller first cancels
 * the bids. Only the item's seller can use EndItem to end an item listing. Applicable to items
 * listed on eBay.com and Half.com. For eBay Live Auctions, you cannot delete items that have
 * been closed or that are part of a Live Auction event that has started.
 */
class EndItemRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\EndReasonCodeType | Indicates the seller's reason for ending the listing early. This field is required if
     * the seller is ending the item early and the item did not successfully sell. Also applicable
     * to Half.com.
     */
    public $EndingReason;
    /**
     * @var string | An ID that the seller specified when they listed the Half.com item, if any. It can be
     * used for the seller's SKU. Note that SellerInventoryID is not returned if no ID was
     * specified. (Note: The SKU field used for eBay.com listings is not applicable to Half.com
     * listings.)
     */
    public $SellerInventoryID;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = $val;
    }

    /**
     * @param EndReasonCodeType $val
     * @throws Exception
     */
    public function setEndingReason($val)
    {
        $this->EndingReason = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSellerInventoryID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerInventoryID');
        }
        $this->SellerInventoryID = $val;
    }
}

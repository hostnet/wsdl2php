<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AddLiveAuctionItemRequestType
 * Lists a lot item on the eBay Live Auctions site. The lot item will also be visible to users
 * who search and browse the US eBay.com site. Only authorized eBay Live Auctions sellers can
 * list lot items.
 */
class AddLiveAuctionItemRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemType | Information about the item that spawned the transaction. It is a purchase from this
     * item's listing that the transaction represents. To remove a property from an item, specify
     * it in ModifyType as a changed property, but do not give it a value in Item. Also applicable
     * to Half.com (for GetOrders).
     */
    public $Item;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemType $val
     * @throws \Exception
     */
    public function setItem($val)
    {
        $this->Item = $val;
    }
}

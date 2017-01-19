<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AddItemRequestType
 * Defines a single new item and lists it on a specified eBay site. To list multiple new items,
 * execute AddItem once for each item, with a new item definition each time.
 */
class AddItemRequestType extends
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
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ExternalProductIDType | Contains an ISBN, UPC, or EAN value from the catalog product associated with the Half.com
     * item. All Half.com items are listed with Pre-filled Item Information.
     */
    public $ExternalProductID;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemType $val
     * @throws \Exception
     */
    public function setItem($val)
    {
        $this->Item = $val;
    }

    /**
     * @param ExternalProductIDType $val
     * @throws \Exception
     */
    public function setExternalProductID($val)
    {
        $this->ExternalProductID = $val;
    }
}

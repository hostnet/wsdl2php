<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * RemoveFromWatchListRequestType
 * Enables a user to remove item from his or her My eBay watch list.
 */
class RemoveFromWatchListRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $itemid;
    /**
     * @var boolean | If true, then all the items in the user's watch list are removed. Either ItemID or RemoveAllItems
     * must be specified, but NOT both.
     */
    public $removeallitems;
    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->itemid = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setRemoveAllItems($val)
    {
        $this->removeallitems = (int)$val;
    }
}

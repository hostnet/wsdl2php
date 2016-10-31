<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AddToWatchListRequestType
 * Adds one or more items to the user's My eBay watch list.
 */
class AddToWatchListRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $itemid;
    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->itemid = (int)$val;
    }
}

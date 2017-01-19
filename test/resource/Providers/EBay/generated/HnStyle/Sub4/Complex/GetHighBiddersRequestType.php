<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetHighBiddersRequestType
 * Retrieves a list of high bidders for the Dutch auction specified in the ItemId property
 * of the request. A seller specifies a unique item ID in this call to determine which buyers are
 * winning bidders and how many items each buyer can purchase.
 */
class GetHighBiddersRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemIDType $val
     * @throws \Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = $val;
    }
}

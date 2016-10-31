<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetAdFormatLeadsRequestType
 * Retrieve sales lead information for a real estate advertisement listing. GetAdFormatLeadsRequest
 * returns the number of leads for an ad and any contact information that the prospective buyer
 * submitted.
 */
class GetAdFormatLeadsRequestType extends
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

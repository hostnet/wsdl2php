<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AddMemberMessageAaQtoPartnerRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $itemid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MemberMessageType | Holds the content of the message.
     */
    public $membermessage;
    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->itemid = (int)$val;
    }

    /**
     * @param MemberMessageType $val
     * @throws Exception
     */
    public function setMemberMessage($val)
    {
        $this->membermessage = (int)$val;
    }
}

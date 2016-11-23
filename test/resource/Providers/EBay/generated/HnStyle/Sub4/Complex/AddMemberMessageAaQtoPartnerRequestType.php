<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AddMemberMessageAaQtoPartnerRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MemberMessageType | Holds the content of the message.
     */
    public $MemberMessage;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = (int)$val;
    }

    /**
     * @param MemberMessageType $val
     * @throws Exception
     */
    public function setMemberMessage($val)
    {
        $this->MemberMessage = (int)$val;
    }
}

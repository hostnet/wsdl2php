<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class MyMessagesMessageIdArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesMessageIDType | An ID that uniquely identifies a message for a given user. <br /><br /> This value is
     * not the same as the value used for the GetMemberMessages MessageID. Use the GetMemberMessages
     * value for used as the GetMyMessages ExternalID instead.
     */
    public $MessageID;
    // @codingStandardsIgnoreEnd

    /**
     * @param MyMessagesMessageIDType $val
     * @throws Exception
     */
    public function setMessageID($val)
    {
        $this->MessageID = (int)$val;
    }
}

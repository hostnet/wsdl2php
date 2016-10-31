<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AddMemberMessagesAaQtoBidderRequestContainerType
{
    /**
     * @var string | Unique key to distinguish between recommendations for each item.              Matches
     * a correlation ID you defined in the request, if any.
     */
    public $correlationid;
    /**
     * @var string | The item ID of the item reported for infringment.
     */
    public $itemid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MemberMessageType | Holds the content of the message.
     */
    public $membermessage;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setCorrelationID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CorrelationID');
        }
        $this->correlationid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ItemID');
        }
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

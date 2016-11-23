<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AddMemberMessagesAaQtoBidderResponseContainerType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Unique key to distinguish between recommendations for each item.              Matches
     * a correlation ID you defined in the request, if any.
     */
    public $CorrelationID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AckCodeType | Indicates the response status (e.g., success).
     */
    public $Ack;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCorrelationID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CorrelationID');
        }
        $this->CorrelationID = (int)$val;
    }

    /**
     * @param AckCodeType $val
     * @throws Exception
     */
    public function setAck($val)
    {
        $this->Ack = (int)$val;
    }
}

<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * MyMessagesMessageArrayType
 * Contains a list of message data.
 */
class MyMessagesMessageArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesMessageType | Contains the data for one message.
     */
    public $message;
    /**
     * @param MyMessagesMessageType $val
     * @throws Exception
     */
    public function setMessage($val)
    {
        $this->message = (int)$val;
    }
}

<?php

namespace Controle;

/**
 * MyMessagesMessageArrayType
 * Contains a list of message data.
 */
class MyMessagesMessageArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\MyMessagesMessageType | Contains the data for one message.
     */
    public $Message;
    // @codingStandardsIgnoreEnd

    /**
     * @param MyMessagesMessageType $val
     * @throws Exception
     */
    public function setMessage($val)
    {
        $this->Message = (int)$val;
    }
}

<?php

namespace Controle;

/**
 * MyMessagesMessageArrayType
 * Contains a list of message data.
 */
class MyMessagesMessageArrayType
{
    /**
     * @var \Controle\MyMessagesMessageType | Contains the data for one message.
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

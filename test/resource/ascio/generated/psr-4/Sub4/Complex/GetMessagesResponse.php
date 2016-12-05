<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetMessagesResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $GetMessagesResult;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Message
     */
    public $messages;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetMessagesResult($val)
    {
        $this->GetMessagesResult = (Response)$val;
    }

    /**
     * @param ArrayOfMessage $val
     * @throws Exception
     */
    public function setMessages($val)
    {
        $this->messages = (ArrayOfMessage)$val;
    }
}

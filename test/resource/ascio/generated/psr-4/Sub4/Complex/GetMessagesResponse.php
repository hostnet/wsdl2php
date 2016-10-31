<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetMessagesResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $getmessagesresult;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Message
     */
    public $messages;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetMessagesResult($val)
    {
        $this->getmessagesresult = (int)$val;
    }

    /**
     * @param ArrayOfMessage $val
     * @throws Exception
     */
    public function setMessages($val)
    {
        $this->messages = (int)$val;
    }
}

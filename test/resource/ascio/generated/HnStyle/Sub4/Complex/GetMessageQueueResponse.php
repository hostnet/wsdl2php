<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetMessageQueueResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $getmessagequeueresult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\QueueItem
     */
    public $item;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetMessageQueueResult($val)
    {
        $this->getmessagequeueresult = (int)$val;
    }

    /**
     * @param QueueItem $val
     * @throws Exception
     */
    public function setItem($val)
    {
        $this->item = (int)$val;
    }
}

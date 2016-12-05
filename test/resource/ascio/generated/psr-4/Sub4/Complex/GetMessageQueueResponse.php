<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetMessageQueueResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $GetMessageQueueResult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\QueueItem
     */
    public $item;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetMessageQueueResult($val)
    {
        $this->GetMessageQueueResult = (Response)$val;
    }

    /**
     * @param QueueItem $val
     * @throws Exception
     */
    public function setItem($val)
    {
        $this->item = (QueueItem)$val;
    }
}

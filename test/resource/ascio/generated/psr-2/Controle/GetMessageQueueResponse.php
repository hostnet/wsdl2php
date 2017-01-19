<?php

namespace Controle;

class GetMessageQueueResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Response
     */
    public $GetMessageQueueResult;
    /**
     * @var \Controle\QueueItem
     */
    public $item;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws \Exception
     */
    public function setGetMessageQueueResult($val)
    {
        $this->GetMessageQueueResult = $val;
    }

    /**
     * @param QueueItem $val
     * @throws \Exception
     */
    public function setItem($val)
    {
        $this->item = $val;
    }
}

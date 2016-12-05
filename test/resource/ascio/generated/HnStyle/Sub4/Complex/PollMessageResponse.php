<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class PollMessageResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $PollMessageResult;
    /**
     * @var int
     */
    public $msgCount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\QueueItem
     */
    public $item;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setPollMessageResult($val)
    {
        $this->PollMessageResult = (Response)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setMsgCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->msgCount = (int)$val;
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

<?php

namespace Controle;

class PollMessageResponse
{
    /**
     * @var \Controle\Response
     */
    public $pollmessageresult;
    /**
     * @var int
     */
    public $msgcount;
    /**
     * @var \Controle\QueueItem
     */
    public $item;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setPollMessageResult($val)
    {
        $this->pollmessageresult = (int)$val;
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
        $this->msgcount = (int)$val;
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

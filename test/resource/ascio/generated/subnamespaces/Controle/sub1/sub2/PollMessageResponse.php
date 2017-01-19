<?php

namespace Controle\sub1\sub2;

class PollMessageResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $PollMessageResult;
	/**
	 * @var int
	 */
	public $msgCount;
	/**
	 * @var \Controle\sub1\sub2\QueueItem
	 */
	public $item;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws \Exception
	 */
	public function setPollMessageResult($val)
	{
        $this->PollMessageResult = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setMsgCount($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->msgCount = $val;
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

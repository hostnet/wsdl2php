<?php

namespace Controle\sub1\sub2;

class GetMessageQueueResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $GetMessageQueueResult;
	/**
	 * @var \Controle\sub1\sub2\QueueItem
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

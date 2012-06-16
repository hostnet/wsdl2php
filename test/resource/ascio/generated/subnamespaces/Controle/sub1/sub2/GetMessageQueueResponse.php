<?php

namespace Controle\sub1\sub2;
class GetMessageQueueResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $GetMessageQueueResult;
	/**
	 * @var \Controle\sub1\sub2\QueueItem
	 */
	public $item;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetMessageQueueResult($val) {
		
		$this->GetMessageQueueResult = (int)$val;
	}

	/**
	 * @param QueueItem $val
	 * @throws Exception
	 */
	public function setItem($val) {
		
		$this->item = (int)$val;
	}

}


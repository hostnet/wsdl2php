<?php

namespace Controle;
class AckMessageResponse {
	/**
	 * @var \Controle\Response
	 */
	public $AckMessageResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setAckMessageResult($val) {
		
		$this->AckMessageResult = (int)$val;
	}

}


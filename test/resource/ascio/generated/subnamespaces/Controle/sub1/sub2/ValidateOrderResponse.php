<?php

namespace Controle\sub1\sub2;
class ValidateOrderResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $ValidateOrderResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setValidateOrderResult($val) {
		
		$this->ValidateOrderResult = (int)$val;
	}

}


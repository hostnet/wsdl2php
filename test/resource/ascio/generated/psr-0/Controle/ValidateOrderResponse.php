<?php

namespace Controle;
class ValidateOrderResponse {
	/**
	 * @var \Controle\Response
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


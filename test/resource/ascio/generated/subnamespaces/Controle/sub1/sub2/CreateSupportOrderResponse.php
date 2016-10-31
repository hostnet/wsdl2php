<?php

namespace Controle\sub1\sub2;
class CreateSupportOrderResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $CreateSupportOrderResult;
	/**
	 * @var string
	 */
	public $orderId;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateSupportOrderResult($val) {
		
		$this->CreateSupportOrderResult = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for orderId');
		$this->orderId = (int)$val;
	}

}


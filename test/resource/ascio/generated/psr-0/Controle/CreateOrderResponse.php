<?php

namespace Controle;
class CreateOrderResponse {
	/**
	 * @var \Controle\Response
	 */
	public $CreateOrderResult;
	/**
	 * @var \Controle\Order
	 */
	public $order;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateOrderResult($val) {
		
		$this->CreateOrderResult = (int)$val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val) {
		
		$this->order = (int)$val;
	}

}


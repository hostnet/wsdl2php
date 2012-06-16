<?php

namespace Controle\sub1\sub2;
class GetOrderResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $GetOrderResult;
	/**
	 * @var \Controle\sub1\sub2\Order
	 */
	public $order;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetOrderResult($val) {
		
		$this->GetOrderResult = (int)$val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val) {
		
		$this->order = (int)$val;
	}

}


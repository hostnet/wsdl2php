<?php

namespace Controle\sub1\sub2;
class SearchOrderResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $SearchOrderResult;
	/**
	 * @var int
	 */
	public $totalOrders;
	/**
	 * @var array \Controle\sub1\sub2\Order
	 */
	public $orders;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchOrderResult($val) {
		
		$this->SearchOrderResult = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setTotalOrders($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->totalOrders = (int)$val;
	}

	/**
	 * @param ArrayOfOrder $val
	 * @throws Exception
	 */
	public function setOrders($val) {
		
		$this->orders = (int)$val;
	}

}


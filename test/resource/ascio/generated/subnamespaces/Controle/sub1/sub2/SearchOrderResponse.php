<?php

namespace Controle\sub1\sub2;

class SearchOrderResponse
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchOrderResult($val)
	{
        $this->SearchOrderResult = (Response)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setTotalOrders($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->totalOrders = (int)$val;
	}

	/**
	 * @param ArrayOfOrder $val
	 * @throws Exception
	 */
	public function setOrders($val)
	{
        $this->orders = (ArrayOfOrder)$val;
	}
}

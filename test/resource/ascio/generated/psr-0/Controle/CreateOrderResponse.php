<?php

namespace Controle;

class CreateOrderResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\Response
	 */
	public $CreateOrderResult;
	/**
	 * @var \Controle\Order
	 */
	public $order;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateOrderResult($val)
	{
        $this->CreateOrderResult = ()$val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val)
	{
        $this->order = ()$val;
	}
}

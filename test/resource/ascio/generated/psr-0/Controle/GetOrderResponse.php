<?php

namespace Controle;

class GetOrderResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\Response
	 */
	public $GetOrderResult;
	/**
	 * @var \Controle\Order
	 */
	public $order;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetOrderResult($val)
	{
        $this->GetOrderResult = $val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val)
	{
        $this->order = $val;
	}
}

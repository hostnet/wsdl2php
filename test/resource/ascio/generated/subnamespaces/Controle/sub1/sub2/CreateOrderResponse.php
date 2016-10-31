<?php

namespace Controle\sub1\sub2;

class CreateOrderResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $createorderresult;
	/**
	 * @var \Controle\sub1\sub2\Order
	 */
	public $order;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateOrderResult($val)
	{
        $this->createorderresult = (int)$val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val)
	{
        $this->order = (int)$val;
	}
}

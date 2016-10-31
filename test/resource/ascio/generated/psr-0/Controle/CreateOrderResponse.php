<?php

namespace Controle;

class CreateOrderResponse
{
	/**
	 * @var \Controle\Response
	 */
	public $createorderresult;
	/**
	 * @var \Controle\Order
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

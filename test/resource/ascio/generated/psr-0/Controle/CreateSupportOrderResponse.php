<?php

namespace Controle;

class CreateSupportOrderResponse
{
	/**
	 * @var \Controle\Response
	 */
	public $createsupportorderresult;
	/**
	 * @var string
	 */
	public $orderid;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateSupportOrderResult($val)
	{
        $this->createsupportorderresult = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for orderId');
        }
        $this->orderid = (int)$val;
	}
}

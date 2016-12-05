<?php

namespace Controle\sub1\sub2;

class ValidateOrderResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $ValidateOrderResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setValidateOrderResult($val)
	{
        $this->ValidateOrderResult = (Response)$val;
	}
}

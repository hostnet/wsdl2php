<?php

namespace Controle\sub1\sub2;

class ValidateOrderResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $validateorderresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setValidateOrderResult($val)
	{
        $this->validateorderresult = (int)$val;
	}
}

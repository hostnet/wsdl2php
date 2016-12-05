<?php

namespace Controle\sub1\sub2;

class AckMessageResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $AckMessageResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setAckMessageResult($val)
	{
        $this->AckMessageResult = (Response)$val;
	}
}

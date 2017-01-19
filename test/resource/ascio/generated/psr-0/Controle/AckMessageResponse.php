<?php

namespace Controle;

class AckMessageResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\Response
	 */
	public $AckMessageResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws \Exception
	 */
	public function setAckMessageResult($val)
	{
        $this->AckMessageResult = $val;
	}
}

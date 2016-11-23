<?php

namespace Controle;

class DoRegistrantVerificationResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\Response
	 */
	public $DoRegistrantVerificationResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDoRegistrantVerificationResult($val)
	{
        $this->DoRegistrantVerificationResult = (int)$val;
	}
}

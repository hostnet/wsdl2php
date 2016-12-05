<?php

namespace Controle;

class VerifyEmailResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\ReturnIndicator
	 */
	public $VerifyEmailResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ReturnIndicator $val
	 * @throws Exception
	 */
	public function setVerifyEmailResult($val)
	{
        $this->VerifyEmailResult = ()$val;
	}
}

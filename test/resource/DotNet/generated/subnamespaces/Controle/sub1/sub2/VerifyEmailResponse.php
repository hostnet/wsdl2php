<?php

namespace Controle\sub1\sub2;

class VerifyEmailResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\ReturnIndicator
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

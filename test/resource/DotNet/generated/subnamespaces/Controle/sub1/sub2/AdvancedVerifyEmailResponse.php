<?php

namespace Controle\sub1\sub2;

class AdvancedVerifyEmailResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\ReturnIndicator
	 */
	public $AdvancedVerifyEmailResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ReturnIndicator $val
	 * @throws \Exception
	 */
	public function setAdvancedVerifyEmailResult($val)
	{
        $this->AdvancedVerifyEmailResult = $val;
	}
}

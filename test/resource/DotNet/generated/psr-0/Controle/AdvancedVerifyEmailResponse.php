<?php

namespace Controle;

class AdvancedVerifyEmailResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\ReturnIndicator
	 */
	public $AdvancedVerifyEmailResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ReturnIndicator $val
	 * @throws Exception
	 */
	public function setAdvancedVerifyEmailResult($val)
	{
        $this->AdvancedVerifyEmailResult = (int)$val;
	}
}

<?php

namespace Controle;

class VerifyEmailResponse
{
	/**
	 * @var \Controle\ReturnIndicator
	 */
	public $verifyemailresult;
	/**
	 * @param ReturnIndicator $val
	 * @throws Exception
	 */
	public function setVerifyEmailResult($val)
	{
        $this->verifyemailresult = (int)$val;
	}
}

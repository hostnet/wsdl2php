<?php

namespace Controle\sub1\sub2;

class VerifyEmailResponse
{
	/**
	 * @var \Controle\sub1\sub2\ReturnIndicator
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

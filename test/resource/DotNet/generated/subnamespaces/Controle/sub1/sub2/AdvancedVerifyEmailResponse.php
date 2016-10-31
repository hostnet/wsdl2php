<?php

namespace Controle\sub1\sub2;

class AdvancedVerifyEmailResponse
{
	/**
	 * @var \Controle\sub1\sub2\ReturnIndicator
	 */
	public $advancedverifyemailresult;
	/**
	 * @param ReturnIndicator $val
	 * @throws Exception
	 */
	public function setAdvancedVerifyEmailResult($val)
	{
        $this->advancedverifyemailresult = (int)$val;
	}
}

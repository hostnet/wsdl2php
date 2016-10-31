<?php

namespace Controle\sub1\sub2;

class DoRegistrantVerificationResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $doregistrantverificationresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDoRegistrantVerificationResult($val)
	{
        $this->doregistrantverificationresult = (int)$val;
	}
}

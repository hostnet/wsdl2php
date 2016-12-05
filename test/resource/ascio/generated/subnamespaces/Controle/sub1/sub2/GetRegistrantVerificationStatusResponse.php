<?php

namespace Controle\sub1\sub2;

class GetRegistrantVerificationStatusResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $GetRegistrantVerificationStatusResult;
	/**
	 * @var \Controle\sub1\sub2\RegistrantVerificationStatus
	 */
	public $verificationStatus;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetRegistrantVerificationStatusResult($val)
	{
        $this->GetRegistrantVerificationStatusResult = ()$val;
	}

	/**
	 * @param RegistrantVerificationStatus $val
	 * @throws Exception
	 */
	public function setVerificationStatus($val)
	{
        $this->verificationStatus = ()$val;
	}
}

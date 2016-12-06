<?php

namespace Controle;

class GetRegistrantVerificationStatusResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\Response
	 */
	public $GetRegistrantVerificationStatusResult;
	/**
	 * @var \Controle\RegistrantVerificationStatus
	 */
	public $verificationStatus;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetRegistrantVerificationStatusResult($val)
	{
        $this->GetRegistrantVerificationStatusResult = $val;
	}

	/**
	 * @param RegistrantVerificationStatus $val
	 * @throws Exception
	 */
	public function setVerificationStatus($val)
	{
        $this->verificationStatus = $val;
	}
}

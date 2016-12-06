<?php

namespace Controle;

class GetRegistrantVerificationInfoResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\Response
	 */
	public $GetRegistrantVerificationInfoResult;
	/**
	 * @var \Controle\RegistrantVerificationInfo
	 */
	public $verificationInfo;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetRegistrantVerificationInfoResult($val)
	{
        $this->GetRegistrantVerificationInfoResult = $val;
	}

	/**
	 * @param RegistrantVerificationInfo $val
	 * @throws Exception
	 */
	public function setVerificationInfo($val)
	{
        $this->verificationInfo = $val;
	}
}

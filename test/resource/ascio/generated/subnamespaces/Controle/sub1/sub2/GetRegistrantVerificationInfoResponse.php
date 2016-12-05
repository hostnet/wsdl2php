<?php

namespace Controle\sub1\sub2;

class GetRegistrantVerificationInfoResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $GetRegistrantVerificationInfoResult;
	/**
	 * @var \Controle\sub1\sub2\RegistrantVerificationInfo
	 */
	public $verificationInfo;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetRegistrantVerificationInfoResult($val)
	{
        $this->GetRegistrantVerificationInfoResult = ()$val;
	}

	/**
	 * @param RegistrantVerificationInfo $val
	 * @throws Exception
	 */
	public function setVerificationInfo($val)
	{
        $this->verificationInfo = ()$val;
	}
}

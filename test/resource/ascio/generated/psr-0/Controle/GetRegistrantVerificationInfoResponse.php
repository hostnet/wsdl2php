<?php

namespace Controle;

class GetRegistrantVerificationInfoResponse
{
	/**
	 * @var \Controle\Response
	 */
	public $getregistrantverificationinforesult;
	/**
	 * @var \Controle\RegistrantVerificationInfo
	 */
	public $verificationinfo;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetRegistrantVerificationInfoResult($val)
	{
        $this->getregistrantverificationinforesult = (int)$val;
	}

	/**
	 * @param RegistrantVerificationInfo $val
	 * @throws Exception
	 */
	public function setVerificationInfo($val)
	{
        $this->verificationinfo = (int)$val;
	}
}

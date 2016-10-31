<?php

namespace Controle\sub1\sub2;

class GetRegistrantVerificationInfoResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $getregistrantverificationinforesult;
	/**
	 * @var \Controle\sub1\sub2\RegistrantVerificationInfo
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

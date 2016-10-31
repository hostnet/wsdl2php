<?php

namespace Controle\sub1\sub2;

class GetRegistrantVerificationStatusResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $getregistrantverificationstatusresult;
	/**
	 * @var \Controle\sub1\sub2\RegistrantVerificationStatus
	 */
	public $verificationstatus;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetRegistrantVerificationStatusResult($val)
	{
        $this->getregistrantverificationstatusresult = (int)$val;
	}

	/**
	 * @param RegistrantVerificationStatus $val
	 * @throws Exception
	 */
	public function setVerificationStatus($val)
	{
        $this->verificationstatus = (int)$val;
	}
}

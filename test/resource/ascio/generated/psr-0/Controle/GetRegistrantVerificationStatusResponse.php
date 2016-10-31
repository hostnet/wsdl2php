<?php

namespace Controle;

class GetRegistrantVerificationStatusResponse
{
	/**
	 * @var \Controle\Response
	 */
	public $getregistrantverificationstatusresult;
	/**
	 * @var \Controle\RegistrantVerificationStatus
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

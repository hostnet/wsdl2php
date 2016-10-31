<?php

namespace Controle\sub1\sub2;
class GetRegistrantVerificationStatusResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $GetRegistrantVerificationStatusResult;
	/**
	 * @var \Controle\sub1\sub2\RegistrantVerificationStatus
	 */
	public $verificationStatus;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetRegistrantVerificationStatusResult($val) {
		
		$this->GetRegistrantVerificationStatusResult = (int)$val;
	}

	/**
	 * @param RegistrantVerificationStatus $val
	 * @throws Exception
	 */
	public function setVerificationStatus($val) {
		
		$this->verificationStatus = (int)$val;
	}

}


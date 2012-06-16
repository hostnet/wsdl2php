<?php

namespace Controle;
class GetRegistrantVerificationStatusResponse {
	/**
	 * @var \Controle\Response
	 */
	public $GetRegistrantVerificationStatusResult;
	/**
	 * @var \Controle\RegistrantVerificationStatus
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


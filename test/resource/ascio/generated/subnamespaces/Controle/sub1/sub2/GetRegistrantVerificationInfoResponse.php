<?php

namespace Controle\sub1\sub2;
class GetRegistrantVerificationInfoResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $GetRegistrantVerificationInfoResult;
	/**
	 * @var \Controle\sub1\sub2\RegistrantVerificationInfo
	 */
	public $verificationInfo;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetRegistrantVerificationInfoResult($val) {
		
		$this->GetRegistrantVerificationInfoResult = (int)$val;
	}

	/**
	 * @param RegistrantVerificationInfo $val
	 * @throws Exception
	 */
	public function setVerificationInfo($val) {
		
		$this->verificationInfo = (int)$val;
	}

}


<?php

namespace Controle;
class RegistrantVerificationInfo {
	/**
	 * @var string
	 */
	public $EmailAddress;
	/**
	 * @var \Controle\RegistrantVerificationStatus
	 */
	public $VerificationStatus;
	/**
	 * @var \Controle\RegistrantVerificationDetails
	 */
	public $VerificationDetails;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setEmailAddress($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for EmailAddress');
		$this->EmailAddress = (int)$val;
	}

	/**
	 * @param RegistrantVerificationStatus $val
	 * @throws Exception
	 */
	public function setVerificationStatus($val) {
		
		$this->VerificationStatus = (int)$val;
	}

	/**
	 * @param RegistrantVerificationDetails $val
	 * @throws Exception
	 */
	public function setVerificationDetails($val) {
		
		$this->VerificationDetails = (int)$val;
	}

}


<?php

namespace Controle\sub1\sub2;

class RegistrantVerificationInfo
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $EmailAddress;
	/**
	 * @var \Controle\sub1\sub2\RegistrantVerificationStatus
	 */
	public $VerificationStatus;
	/**
	 * @var \Controle\sub1\sub2\RegistrantVerificationDetails
	 */
	public $VerificationDetails;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setEmailAddress($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for EmailAddress');
        }
        $this->EmailAddress = (int)$val;
	}

	/**
	 * @param RegistrantVerificationStatus $val
	 * @throws Exception
	 */
	public function setVerificationStatus($val)
	{
        $this->VerificationStatus = (int)$val;
	}

	/**
	 * @param RegistrantVerificationDetails $val
	 * @throws Exception
	 */
	public function setVerificationDetails($val)
	{
        $this->VerificationDetails = (int)$val;
	}
}

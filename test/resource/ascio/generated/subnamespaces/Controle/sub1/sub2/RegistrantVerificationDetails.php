<?php

namespace Controle\sub1\sub2;

class RegistrantVerificationDetails
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $VerifiedBy;
	/**
	 * @var dateTime
	 */
	public $VerificationDate;
	/**
	 * @var array \Controle\sub1\sub2\Message
	 */
	public $Messages;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setVerifiedBy($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for VerifiedBy');
        }
        $this->VerifiedBy = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setVerificationDate($val)
	{
        $this->VerificationDate = $val;
	}

	/**
	 * @param ArrayOfMessage $val
	 * @throws \Exception
	 */
	public function setMessages($val)
	{
        $this->Messages = $val;
	}
}

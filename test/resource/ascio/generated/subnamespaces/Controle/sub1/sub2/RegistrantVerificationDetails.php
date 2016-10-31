<?php

namespace Controle\sub1\sub2;

class RegistrantVerificationDetails
{
	/**
	 * @var string
	 */
	public $verifiedby;
	/**
	 * @var dateTime
	 */
	public $verificationdate;
	/**
	 * @var array \Controle\sub1\sub2\Message
	 */
	public $messages;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setVerifiedBy($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for VerifiedBy');
        }
        $this->verifiedby = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setVerificationDate($val)
	{
        $this->verificationdate = (int)$val;
	}

	/**
	 * @param ArrayOfMessage $val
	 * @throws Exception
	 */
	public function setMessages($val)
	{
        $this->messages = (int)$val;
	}
}

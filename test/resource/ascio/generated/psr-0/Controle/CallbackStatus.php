<?php

namespace Controle;

class CallbackStatus
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Message;
	/**
	 * @var string
	 */
	public $Status;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setMessage($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Message');
        }
        $this->Message = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStatus($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Status');
        }
        $this->Status = (string)$val;
	}
}

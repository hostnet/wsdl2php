<?php

namespace Controle;

class Response
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Message;
	/**
	 * @var short
	 */
	public $ResultCode;
	/**
	 * @var array \Controle\string
	 */
	public $Values;
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
	 * @param short $val
	 * @throws Exception
	 */
	public function setResultCode($val)
	{
        $this->ResultCode = (short)$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setValues($val)
	{
        $this->Values = (ArrayOfstring)$val;
	}
}

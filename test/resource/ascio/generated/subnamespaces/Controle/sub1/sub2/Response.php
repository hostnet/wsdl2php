<?php

namespace Controle\sub1\sub2;

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
	 * @var array \Controle\sub1\sub2\string
	 */
	public $Values;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setMessage($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Message');
        }
        $this->Message = $val;
	}

	/**
	 * @param short $val
	 * @throws \Exception
	 */
	public function setResultCode($val)
	{
        $this->ResultCode = $val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws \Exception
	 */
	public function setValues($val)
	{
        $this->Values = $val;
	}
}

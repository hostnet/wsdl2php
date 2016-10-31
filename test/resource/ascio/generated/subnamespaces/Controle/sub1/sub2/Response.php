<?php

namespace Controle\sub1\sub2;

class Response
{
	/**
	 * @var string
	 */
	public $message;
	/**
	 * @var short
	 */
	public $resultcode;
	/**
	 * @var array \Controle\sub1\sub2\string
	 */
	public $values;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setMessage($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Message');
        }
        $this->message = (int)$val;
	}

	/**
	 * @param short $val
	 * @throws Exception
	 */
	public function setResultCode($val)
	{
        $this->resultcode = (int)$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setValues($val)
	{
        $this->values = (int)$val;
	}
}

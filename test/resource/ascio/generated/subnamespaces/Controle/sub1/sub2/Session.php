<?php

namespace Controle\sub1\sub2;

class Session
{
	/**
	 * @var string
	 */
	public $account;
	/**
	 * @var string
	 */
	public $password;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAccount($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Account');
        }
        $this->account = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setPassword($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Password');
        }
        $this->password = (int)$val;
	}
}

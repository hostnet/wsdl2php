<?php

namespace Controle;

class Session
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Account;
	/**
	 * @var string
	 */
	public $Password;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setAccount($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Account');
        }
        $this->Account = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPassword($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Password');
        }
        $this->Password = $val;
	}
}

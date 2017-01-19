<?php

namespace Controle;

class Employee
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var int
	 */
	public $Number;
	/**
	 * @var string
	 */
	public $DisplayName;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Id = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setNumber($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Number = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDisplayName($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for DisplayName');
        }
        $this->DisplayName = $val;
	}
}

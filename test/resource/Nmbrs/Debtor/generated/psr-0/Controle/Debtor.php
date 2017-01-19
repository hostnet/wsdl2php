<?php

namespace Controle;

class Debtor
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var string
	 */
	public $Number;
	/**
	 * @var string
	 */
	public $Name;
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
	 * @param string $val
	 * @throws \Exception
	 */
	public function setNumber($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Number');
        }
        $this->Number = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setName($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Name');
        }
        $this->Name = $val;
	}
}

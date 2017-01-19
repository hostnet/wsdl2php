<?php

namespace Controle;

class DebtorTag
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Number;
	/**
	 * @var string
	 */
	public $HexColor;
	/**
	 * @var string
	 */
	public $Tag;
	// @codingStandardsIgnoreEnd

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
	public function setHexColor($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for HexColor');
        }
        $this->HexColor = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Tag');
        }
        $this->Tag = $val;
	}
}

<?php

namespace Controle;

class EmployeeWageComponent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var int
	 */
	public $Code;
	/**
	 * @var decimal
	 */
	public $Value;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setEmployeeId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmployeeId = $val;
	}

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
	public function setCode($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Code = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setValue($val)
	{
        $this->Value = $val;
	}
}

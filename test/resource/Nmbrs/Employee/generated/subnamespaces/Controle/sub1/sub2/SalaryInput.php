<?php

namespace Controle\sub1\sub2;

class SalaryInput
{
	// @codingStandardsIgnoreStart
	/**
	 * @var decimal
	 */
	public $Value;
	/**
	 * @var \Controle\sub1\sub2\SalaryType
	 */
	public $Type;
	/**
	 * @var \Controle\sub1\sub2\SalaryTableEmployeeInput
	 */
	public $SalaryTable;
	// @codingStandardsIgnoreEnd

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setValue($val)
	{
        $this->Value = $val;
	}

	/**
	 * @param SalaryType $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        $this->Type = $val;
	}

	/**
	 * @param SalaryTableEmployeeInput $val
	 * @throws \Exception
	 */
	public function setSalaryTable($val)
	{
        $this->SalaryTable = $val;
	}
}

<?php

namespace Controle;

class SalaryInput
{
	// @codingStandardsIgnoreStart
	/**
	 * @var decimal
	 */
	public $Value;
	/**
	 * @var \Controle\SalaryType
	 */
	public $Type;
	/**
	 * @var \Controle\SalaryTableEmployeeInput
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

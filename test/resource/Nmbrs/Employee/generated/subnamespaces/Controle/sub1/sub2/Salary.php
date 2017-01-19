<?php

namespace Controle\sub1\sub2;

class Salary
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
	 * @var \Controle\sub1\sub2\SalaryTableEmployee
	 */
	public $SalaryTable;
	/**
	 * @var dateTime
	 */
	public $StartDate;
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
	 * @param SalaryTableEmployee $val
	 * @throws \Exception
	 */
	public function setSalaryTable($val)
	{
        $this->SalaryTable = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setStartDate($val)
	{
        $this->StartDate = $val;
	}
}

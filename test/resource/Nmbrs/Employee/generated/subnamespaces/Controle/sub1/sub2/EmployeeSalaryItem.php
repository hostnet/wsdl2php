<?php

namespace Controle\sub1\sub2;

class EmployeeSalaryItem
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var array \Controle\sub1\sub2\Salary\V2
	 */
	public $EmployeeSalaries;
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
	 * @param ArrayOfSalary_V2 $val
	 * @throws \Exception
	 */
	public function setEmployeeSalaries($val)
	{
        $this->EmployeeSalaries = $val;
	}
}

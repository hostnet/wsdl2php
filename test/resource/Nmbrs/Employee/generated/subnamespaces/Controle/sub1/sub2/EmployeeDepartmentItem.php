<?php

namespace Controle\sub1\sub2;

class EmployeeDepartmentItem
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var array \Controle\sub1\sub2\Department\V2
	 */
	public $EmployeeDepartments;
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
	 * @param ArrayOfDepartment_V2 $val
	 * @throws \Exception
	 */
	public function setEmployeeDepartments($val)
	{
        $this->EmployeeDepartments = $val;
	}
}

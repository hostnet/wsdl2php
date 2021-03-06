<?php

namespace Controle\sub1\sub2;

class EmployeeScheduleItem
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var array \Controle\sub1\sub2\Schedule\V2
	 */
	public $EmployeeSchedules;
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
	 * @param ArrayOfSchedule_V2 $val
	 * @throws \Exception
	 */
	public function setEmployeeSchedules($val)
	{
        $this->EmployeeSchedules = $val;
	}
}

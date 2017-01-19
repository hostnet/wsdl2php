<?php

namespace Controle;

class EmployeeContractItem
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var array \Controle\Contract\v3
	 */
	public $EmployeeContracts;
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
	 * @param ArrayOfContract_v3 $val
	 * @throws \Exception
	 */
	public function setEmployeeContracts($val)
	{
        $this->EmployeeContracts = $val;
	}
}

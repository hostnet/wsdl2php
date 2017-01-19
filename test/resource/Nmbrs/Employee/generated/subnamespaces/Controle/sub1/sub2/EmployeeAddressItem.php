<?php

namespace Controle\sub1\sub2;

class EmployeeAddressItem
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var array \Controle\sub1\sub2\EmployeeAddress\V2
	 */
	public $EmployeeAddresses;
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
	 * @param ArrayOfEmployeeAddress_V2 $val
	 * @throws \Exception
	 */
	public function setEmployeeAddresses($val)
	{
        $this->EmployeeAddresses = $val;
	}
}

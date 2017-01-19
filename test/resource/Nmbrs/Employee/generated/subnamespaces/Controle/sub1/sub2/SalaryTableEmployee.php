<?php

namespace Controle\sub1\sub2;

class SalaryTableEmployee extends
 \Controle\sub1\sub2\SalaryTable
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\SalaryTableScale
	 */
	public $Schaal;
	/**
	 * @var \Controle\sub1\sub2\SalaryTableStep
	 */
	public $Trede;
	// @codingStandardsIgnoreEnd

	/**
	 * @param SalaryTableScale $val
	 * @throws \Exception
	 */
	public function setSchaal($val)
	{
        $this->Schaal = $val;
	}

	/**
	 * @param SalaryTableStep $val
	 * @throws \Exception
	 */
	public function setTrede($val)
	{
        $this->Trede = $val;
	}
}

<?php

namespace Controle\sub1\sub2;

class SalaryTableEmployeeInput
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\SalaryTableScaleInput
	 */
	public $Scale;
	/**
	 * @var \Controle\sub1\sub2\SalaryTableStepInput
	 */
	public $Step;
	// @codingStandardsIgnoreEnd

	/**
	 * @param SalaryTableScaleInput $val
	 * @throws \Exception
	 */
	public function setScale($val)
	{
        $this->Scale = $val;
	}

	/**
	 * @param SalaryTableStepInput $val
	 * @throws \Exception
	 */
	public function setStep($val)
	{
        $this->Step = $val;
	}
}

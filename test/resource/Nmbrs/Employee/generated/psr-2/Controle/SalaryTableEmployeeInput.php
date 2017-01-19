<?php

namespace Controle;

class SalaryTableEmployeeInput
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\SalaryTableScaleInput
     */
    public $Scale;
    /**
     * @var \Controle\SalaryTableStepInput
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

<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SalaryTableEmployeeInput
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableScaleInput
     */
    public $Scale;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableStepInput
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

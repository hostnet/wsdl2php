<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SalaryTableEmployeeInput
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableScaleInput
     */
    public $scale;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableStepInput
     */
    public $step;
    /**
     * @param SalaryTableScaleInput $val
     * @throws Exception
     */
    public function setScale($val)
    {
        $this->scale = (int)$val;
    }

    /**
     * @param SalaryTableStepInput $val
     * @throws Exception
     */
    public function setStep($val)
    {
        $this->step = (int)$val;
    }
}

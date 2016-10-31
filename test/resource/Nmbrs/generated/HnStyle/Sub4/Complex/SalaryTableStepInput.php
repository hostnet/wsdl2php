<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SalaryTableStepInput
{
    /**
     * @var string
     */
    public $step;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setStep($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Step');
        }
        $this->step = (int)$val;
    }
}

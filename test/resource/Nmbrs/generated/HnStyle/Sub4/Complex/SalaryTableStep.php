<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SalaryTableStep
{
    /**
     * @var string
     */
    public $step;
    /**
     * @var string
     */
    public $stepdescription;
    /**
     * @var decimal
     */
    public $stepvalue;
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

    /**
     * @param string $val
     * @throws Exception
     */
    public function setStepDescription($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for StepDescription');
        }
        $this->stepdescription = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setStepValue($val)
    {
        $this->stepvalue = (int)$val;
    }
}

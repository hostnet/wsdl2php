<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SalaryTableStep
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Step;
    /**
     * @var string
     */
    public $StepDescription;
    /**
     * @var decimal
     */
    public $StepValue;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setStep($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Step');
        }
        $this->Step = ()$val;
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
        $this->StepDescription = ()$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setStepValue($val)
    {
        $this->StepValue = ()$val;
    }
}

<?php

namespace Controle;

class SalaryTableStepInput
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Step;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setStep($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Step');
        }
        $this->Step = $val;
    }
}

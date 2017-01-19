<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SalaryTableScaleInput
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Scale;
    /**
     * @var decimal
     */
    public $ScalePercentage;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setScale($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Scale');
        }
        $this->Scale = $val;
    }

    /**
     * @param decimal $val
     * @throws \Exception
     */
    public function setScalePercentage($val)
    {
        $this->ScalePercentage = $val;
    }
}

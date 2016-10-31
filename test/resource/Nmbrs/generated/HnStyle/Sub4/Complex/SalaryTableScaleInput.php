<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SalaryTableScaleInput
{
    /**
     * @var string
     */
    public $scale;
    /**
     * @var decimal
     */
    public $scalepercentage;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setScale($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Scale');
        }
        $this->scale = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setScalePercentage($val)
    {
        $this->scalepercentage = (int)$val;
    }
}

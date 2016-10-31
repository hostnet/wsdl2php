<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SalaryTableScale
{
    /**
     * @var string
     */
    public $scale;
    /**
     * @var string
     */
    public $schaaldescription;
    /**
     * @var decimal
     */
    public $scalevalue;
    /**
     * @var decimal
     */
    public $scalepercentagemax;
    /**
     * @var decimal
     */
    public $scalepercentagemin;
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
     * @param string $val
     * @throws Exception
     */
    public function setSchaalDescription($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SchaalDescription');
        }
        $this->schaaldescription = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setScaleValue($val)
    {
        $this->scalevalue = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setScalePercentageMax($val)
    {
        $this->scalepercentagemax = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setScalePercentageMin($val)
    {
        $this->scalepercentagemin = (int)$val;
    }
}

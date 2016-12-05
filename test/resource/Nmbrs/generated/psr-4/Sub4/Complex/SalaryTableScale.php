<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SalaryTableScale
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Scale;
    /**
     * @var string
     */
    public $SchaalDescription;
    /**
     * @var decimal
     */
    public $ScaleValue;
    /**
     * @var decimal
     */
    public $ScalePercentageMax;
    /**
     * @var decimal
     */
    public $ScalePercentageMin;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setScale($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Scale');
        }
        $this->Scale = (string)$val;
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
        $this->SchaalDescription = (string)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setScaleValue($val)
    {
        $this->ScaleValue = (decimal)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setScalePercentageMax($val)
    {
        $this->ScalePercentageMax = (decimal)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setScalePercentageMin($val)
    {
        $this->ScalePercentageMin = (decimal)$val;
    }
}

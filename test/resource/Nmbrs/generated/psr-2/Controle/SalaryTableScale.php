<?php

namespace Controle;

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
        $this->Scale = (int)$val;
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
        $this->SchaalDescription = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setScaleValue($val)
    {
        $this->ScaleValue = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setScalePercentageMax($val)
    {
        $this->ScalePercentageMax = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setScalePercentageMin($val)
    {
        $this->ScalePercentageMin = (int)$val;
    }
}

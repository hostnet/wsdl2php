<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class EmployeeCostCenter
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CostCenter
     */
    public $costcenter;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Kostensoort
     */
    public $kostensoort;
    /**
     * @var decimal
     */
    public $percentage;
    /**
     * @var boolean
     */
    public $default;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->id = (int)$val;
    }

    /**
     * @param CostCenter $val
     * @throws Exception
     */
    public function setCostCenter($val)
    {
        $this->costcenter = (int)$val;
    }

    /**
     * @param Kostensoort $val
     * @throws Exception
     */
    public function setKostensoort($val)
    {
        $this->kostensoort = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setPercentage($val)
    {
        $this->percentage = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setDefault($val)
    {
        $this->default = (int)$val;
    }
}

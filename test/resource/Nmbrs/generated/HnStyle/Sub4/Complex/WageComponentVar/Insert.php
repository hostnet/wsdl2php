<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar;

class Insert
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\WageComponent
     */
    public $wagecomponent;
    /**
     * @var int
     */
    public $period;
    /**
     * @var int
     */
    public $year;
    /**
     * @var boolean
     */
    public $unprotectedmode;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setEmployeeId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->employeeid = (int)$val;
    }

    /**
     * @param WageComponent $val
     * @throws Exception
     */
    public function setWageComponent($val)
    {
        $this->wagecomponent = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPeriod($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->period = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setYear($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->year = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setUnprotectedMode($val)
    {
        $this->unprotectedmode = (int)$val;
    }
}

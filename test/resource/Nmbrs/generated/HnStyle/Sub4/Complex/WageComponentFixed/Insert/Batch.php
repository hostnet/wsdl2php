<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\Insert;

class Batch
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeWageComponent
     */
    public $wagecomponents;
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
     * @param ArrayOfEmployeeWageComponent $val
     * @throws Exception
     */
    public function setWageComponents($val)
    {
        $this->wagecomponents = (int)$val;
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

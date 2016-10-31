<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class DebtorServicelevel
{
    /**
     * @var int
     */
    public $startperiod;
    /**
     * @var int
     */
    public $startyear;
    /**
     * @var string
     */
    public $servicelevel;
    /**
     * @var dateTime
     */
    public $startcontract;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setStartPeriod($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->startperiod = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setStartYear($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->startyear = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setServiceLevel($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ServiceLevel');
        }
        $this->servicelevel = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setStartContract($val)
    {
        $this->startcontract = (int)$val;
    }
}

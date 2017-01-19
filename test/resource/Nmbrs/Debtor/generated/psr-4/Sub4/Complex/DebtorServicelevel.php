<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class DebtorServicelevel
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $StartPeriod;
    /**
     * @var int
     */
    public $StartYear;
    /**
     * @var string
     */
    public $ServiceLevel;
    /**
     * @var dateTime
     */
    public $StartContract;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setStartPeriod($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->StartPeriod = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setStartYear($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->StartYear = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setServiceLevel($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ServiceLevel');
        }
        $this->ServiceLevel = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setStartContract($val)
    {
        $this->StartContract = $val;
    }
}

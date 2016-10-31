<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon;

class Insert
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var dateTime
     */
    public $start;
    /**
     * @var decimal
     */
    public $amount;
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
     * @param dateTime $val
     * @throws Exception
     */
    public function setStart($val)
    {
        $this->start = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setAmount($val)
    {
        $this->amount = (int)$val;
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

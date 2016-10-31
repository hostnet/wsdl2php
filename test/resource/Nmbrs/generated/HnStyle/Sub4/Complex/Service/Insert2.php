<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Service;

class Insert2
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
     * @var dateTime
     */
    public $ancienniteitsdatum;
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
     * @param dateTime $val
     * @throws Exception
     */
    public function setAncienniteitsdatum($val)
    {
        $this->ancienniteitsdatum = (int)$val;
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

<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ServiceInterval
{
    /**
     * @var dateTime
     */
    public $start;
    /**
     * @var dateTime
     */
    public $end;
    /**
     * @var dateTime
     */
    public $ancienniteitsdatum;
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
    public function setEnd($val)
    {
        $this->end = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setAncienniteitsdatum($val)
    {
        $this->ancienniteitsdatum = (int)$val;
    }
}

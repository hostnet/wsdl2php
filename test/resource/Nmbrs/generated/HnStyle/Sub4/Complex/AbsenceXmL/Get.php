<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\AbsenceXmL;

class Get
{
    /**
     * @var int
     */
    public $debtorid;
    /**
     * @var dateTime
     */
    public $from;
    /**
     * @var dateTime
     */
    public $to;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setDebtorId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->debtorid = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setFrom($val)
    {
        $this->from = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setTo($val)
    {
        $this->to = (int)$val;
    }
}

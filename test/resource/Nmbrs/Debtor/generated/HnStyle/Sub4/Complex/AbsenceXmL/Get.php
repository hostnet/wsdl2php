<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\AbsenceXmL;

class Get
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $DebtorId;
    /**
     * @var dateTime
     */
    public $from;
    /**
     * @var dateTime
     */
    public $to;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setDebtorId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setFrom($val)
    {
        $this->from = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setTo($val)
    {
        $this->to = $val;
    }
}

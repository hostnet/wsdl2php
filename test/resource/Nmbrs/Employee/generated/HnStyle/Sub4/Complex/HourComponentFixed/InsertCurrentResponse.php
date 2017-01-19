<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed;

class InsertCurrentResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $HourComponentFixed_InsertCurrentResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setHourComponentFixedInsertCurrentResult($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->HourComponentFixed_InsertCurrentResult = $val;
    }
}

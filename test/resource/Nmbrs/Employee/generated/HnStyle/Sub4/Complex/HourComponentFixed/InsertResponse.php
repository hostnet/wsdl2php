<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed;

class InsertResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $HourComponentFixed_InsertResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setHourComponentFixedInsertResult($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->HourComponentFixed_InsertResult = $val;
    }
}

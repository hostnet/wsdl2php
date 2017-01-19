<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar;

class InsertResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $HourComponentVar_InsertResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setHourComponentVarInsertResult($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->HourComponentVar_InsertResult = $val;
    }
}

<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar;

class InsertCurrentResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $HourComponentVar_InsertCurrentResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setHourComponentVarInsertCurrentResult($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->HourComponentVar_InsertCurrentResult = $val;
    }
}

<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar;

class InsertResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $WageComponentVar_InsertResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setWageComponentVarInsertResult($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->WageComponentVar_InsertResult = $val;
    }
}

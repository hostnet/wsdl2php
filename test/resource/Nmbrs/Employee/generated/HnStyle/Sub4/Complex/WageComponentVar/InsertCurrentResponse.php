<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar;

class InsertCurrentResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $WageComponentVar_InsertCurrentResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setWageComponentVarInsertCurrentResult($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->WageComponentVar_InsertCurrentResult = $val;
    }
}

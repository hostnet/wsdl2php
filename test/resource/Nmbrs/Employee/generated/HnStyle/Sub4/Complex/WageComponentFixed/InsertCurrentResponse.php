<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed;

class InsertCurrentResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $WageComponentFixed_InsertCurrentResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setWageComponentFixedInsertCurrentResult($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->WageComponentFixed_InsertCurrentResult = $val;
    }
}

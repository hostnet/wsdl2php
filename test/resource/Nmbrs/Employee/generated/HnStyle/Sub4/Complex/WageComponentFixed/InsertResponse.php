<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed;

class InsertResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $WageComponentFixed_InsertResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setWageComponentFixedInsertResult($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->WageComponentFixed_InsertResult = $val;
    }
}

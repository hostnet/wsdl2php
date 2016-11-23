<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\CostCenter;

class InsertResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $CostCenter_InsertResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCostCenterInsertResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CostCenter_InsertResult = (int)$val;
    }
}

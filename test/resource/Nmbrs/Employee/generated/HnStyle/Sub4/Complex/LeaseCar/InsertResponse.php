<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar;

class InsertResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $LeaseCar_InsertResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setLeaseCarInsertResult($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->LeaseCar_InsertResult = $val;
    }
}

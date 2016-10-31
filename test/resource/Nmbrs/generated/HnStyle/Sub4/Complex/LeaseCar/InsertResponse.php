<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar;

class InsertResponse
{
    /**
     * @var int
     */
    public $leasecar_insertresult;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setLeaseCarInsertResult($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->leasecar_insertresult = (int)$val;
    }
}
